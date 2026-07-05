<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use App\Models\DanhGia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SanPhamController extends Controller
{
    // Client Routes
    public function getDataClient()
    {
        $data = SanPham::where('trang_thai', SanPham::HOAT_DONG)->inRandomOrder()->take(4)->get();
        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    }

    public function getDataTrangChu()
    {
        $data = SanPham::where('trang_thai', SanPham::HOAT_DONG)->get();
        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    }

    public function getSanPhamById($id_san_pham)
    {
        $data_1 = SanPham::where('id', $id_san_pham)->where('trang_thai', SanPham::HOAT_DONG)->first();
        $data_2 = DanhGia::where('ma_sp', $id_san_pham)->get();

        if ($data_1) {
            return response()->json([
                'status'    => true,
                'data_1'    => $data_1,
                'data_2'    => $data_2,
            ]);
        } else {
            return response()->json([
                'status'    => false,
                'message'   => "Sản phẩm không tồn tại hoặc đã bị ẩn"
            ]);
        }
    }

    public function getDataClientSanPham()
    {
        $data = SanPham::where('trang_thai', SanPham::HOAT_DONG)->get();
        return response()->json([
            'status'    => true,
            'data'      => $data,
        ]);
    }

    // Admin Routes
    public function getData()
    {
        $user = Auth::guard('sanctum')->user();
        if (!$user) {
            return response()->json(['status' => 0, 'message' => 'Bạn cần đăng nhập!']);
        }

        $data = SanPham::get();
        return response()->json([
            'data' => $data
        ]);
    }

    public function addData(Request $request)
    {
        $user = Auth::guard('sanctum')->user();
        if (!$user) {
            return response()->json(['status' => 0, 'message' => 'Bạn cần đăng nhập!']);
        }

        $usedCodes = SanPham::pluck('ma_sp')->toArray();
        $numbers = collect($usedCodes)->map(function ($code) {
            return (int)str_replace('SP', '', $code);
        })->sort()->values();

        $newNumber = 1;
        foreach ($numbers as $num) {
            if ($num == $newNumber) {
                $newNumber++;
            } else {
                break;
            }
        }
        $newMaSp = 'SP' . str_pad($newNumber, 2, '0', STR_PAD_LEFT);

        SanPham::create([
            'ma_sp'      => $newMaSp,
            'ten_sp'     => $request->ten_sp,
            'don_gia'    => $request->don_gia,
            'trang_thai' => $request->trang_thai,
            'gia_cu'     => $request->gia_cu,
            'so_luong'   => $request->so_luong,
            'hinh'       => $request->hinh,
            'ma_dm'      => $request->ma_dm,
            'mo_ta'      => $request->mo_ta,
            'trailer'    => $request->trailer,
        ]);

        return response()->json([
            'status'  => true,
            'message' => 'Thêm sản phẩm "' . $request->ten_sp . '" thành công',
        ]);
    }

    public function update(Request $request)
    {
        $user = Auth::guard('sanctum')->user();
        if (!$user) {
            return response()->json(['status' => 0, 'message' => 'Bạn cần đăng nhập!']);
        }

        SanPham::where('id', $request->id)->update([
            'ten_sp'      => $request->ten_sp,
            'don_gia'     => $request->don_gia,
            'trang_thai'  => $request->trang_thai,
            'gia_cu'      => $request->gia_cu,
            'so_luong'    => $request->so_luong,
            'hinh'        => $request->hinh,
            'ma_dm'       => $request->ma_dm,
            'mo_ta'       => $request->mo_ta,
            'trailer'     => $request->trailer,
        ]);

        return response()->json([
            'status'    => true,
            'message'   => 'Cập nhật sản phẩm ' . $request->ten_sp . ' thành công',
        ]);
    }

    public function destroy(Request $request)
    {
        $user = Auth::guard('sanctum')->user();
        if (!$user) {
            return response()->json(['status' => 0, 'message' => 'Bạn cần đăng nhập!']);
        }

        SanPham::where('id', $request->id)->delete();

        return response()->json([
            'status'    => true,
            'message'   => 'Xóa sản phẩm thành công',
        ]);
    }

    public function changeStatus(Request $request)
    {
        $user = Auth::guard('sanctum')->user();
        if (!$user) {
            return response()->json(['status' => 0, 'message' => 'Bạn cần đăng nhập!']);
        }

        $SanPham = SanPham::where('id', $request->id)->first();
        if ($SanPham) {
            $SanPham->trang_thai = ($SanPham->trang_thai == SanPham::HOAT_DONG) ? SanPham::TAM_TAT : SanPham::HOAT_DONG;
            $SanPham->save();
            return response()->json([
                'status'  => true,
                'message' => 'Thay đổi trạng thái sản phẩm thành công',
            ]);
        }
        return response()->json([
            'status'  => 0,
            'message' => 'Sản phẩm không tồn tại',
        ]);
    }
}
