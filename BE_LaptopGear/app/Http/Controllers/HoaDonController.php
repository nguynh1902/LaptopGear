<?php

namespace App\Http\Controllers;

use App\Models\HoaDon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HoaDonController extends Controller
{
    // === KHACH HANG ===
    public function getDataClient()
    {
        $user = Auth::guard('sanctum')->user();
        if ($user) {
            $data = HoaDon::where('ma_kh', $user->ma_kh)
                          ->orderBy('created_at', 'desc')->get();
        } else {
            $data = collect(); // Nếu chưa đăng nhập thì không lấy hóa đơn
        }

        return response()->json([
            'status' => true,
            'data'   => $data,
        ]);
    }

    public function datHang(Request $request)
    {
        // Support array of products (from Thanh Toan page) OR single product (from Chi Tiet San Pham page)
        $sanPhams = $request->has('san_pham') ? $request->san_pham : [
            [
                'ma_sp'    => $request->ma_sp,
                'ten_sp'   => $request->ten_sp,
                'don_gia'  => $request->don_gia,
                'hinh'     => $request->hinh,
                'so_luong' => $request->so_luong,
                'ghi_chu'  => $request->ghi_chu,
            ]
        ];
        
        $lastHD = HoaDon::orderByDesc('id')->first();
        $lastId = $lastHD ? intval(substr($lastHD->ma_hoa_don, 2)) : 0;
        $newId = $lastId + 1;
        $maHoaDon = 'HD' . str_pad($newId, 2, '0', STR_PAD_LEFT);

        $user = Auth::guard('sanctum')->user();
        $maKh = $user ? $user->ma_kh : ($request->ma_kh ?? null);

        foreach ($sanPhams as $sp) {
            HoaDon::create([
                'ma_hoa_don' => $maHoaDon,
                'ma_kh'      => $maKh,
                'ho_ten'     => $request->ho_ten,
                'email'      => $request->email,
                'dia_chi'    => $request->dia_chi,
                'sdt'        => $request->sdt,
                'ma_sp'      => $sp['ma_sp'],
                'ten_sp'     => $sp['ten_sp'],
                'don_gia'    => $sp['don_gia'],
                'hinh'       => $sp['hinh'],
                'so_luong'   => $sp['so_luong'],
                'ghi_chu'    => isset($sp['ghi_chu']) ? $sp['ghi_chu'] : '',
                'tinh_trang' => 0, // Chờ duyệt
            ]);
        }

        return response()->json([
            'status'     => true,
            'message'    => 'Đặt hàng thành công, đơn hàng đang chờ Admin xét duyệt!',
            'ma_hoa_don' => $maHoaDon
        ]);
    }

    // === ADMIN ===
    public function getData()
    {
        $user = Auth::guard('sanctum')->user();
        if (!$user) return response()->json(['status' => 0, 'message' => 'Bạn cần đăng nhập!']);

        $data = HoaDon::orderBy('created_at', 'desc')->get();
        return response()->json(['data' => $data]);
    }

    public function changeStatus(Request $request)
    {
        $user = Auth::guard('sanctum')->user();
        if (!$user) return response()->json(['status' => 0, 'message' => 'Bạn cần đăng nhập!']);

        if ($request->ma_hoa_don) {
            $hoaDonMau = HoaDon::where('ma_hoa_don', $request->ma_hoa_don)->first();
            if ($hoaDonMau) {
                $newStatus = ($hoaDonMau->tinh_trang == 1) ? 0 : 1;
                HoaDon::where('ma_hoa_don', $request->ma_hoa_don)->update(['tinh_trang' => $newStatus]);
                
                return response()->json([
                    'status'  => true,
                    'message' => 'Cập nhật trạng thái đơn hàng thành công',
                ]);
            }
        }

        return response()->json([
            'status'  => 0,
            'message' => 'Hóa đơn không tồn tại',
        ]);
    }

    public function destroy(Request $request)
    {
        $user = Auth::guard('sanctum')->user();
        if (!$user) return response()->json(['status' => 0, 'message' => 'Bạn cần đăng nhập!']);

        if ($request->ma_hoa_don) {
            HoaDon::where('ma_hoa_don', $request->ma_hoa_don)->delete();
            return response()->json([
                'status'  => true,
                'message' => 'Hủy đơn hàng thành công',
            ]);
        }

        return response()->json([
            'status'  => 0,
            'message' => 'Hóa đơn không tồn tại',
        ]);
    }
}
