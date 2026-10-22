<?php

namespace App\Http\Controllers;

use App\Models\HoaDon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HoaDonController
{
    // ==== QUẢN LÝ HÓA ĐƠN (ADMIN) ====
    public function locChuaDuyet(Request $request)
    {
        $donHangs = DB::table('hoa_dons')
            ->where('tinh_trang', 0)
            ->select(
                'ma_hoa_don',
                'ma_kh',
                'ho_ten',
                'email',
                'dia_chi',
                'sdt',
                'ma_sp',
                'ten_sp',
                'don_gia',
                'hinh',
                'so_luong',
                'ghi_chu',
                'tinh_trang',
                'created_at'
            )
            ->orderBy('created_at', 'desc')
            ->get();

        return response()->json($donHangs);
    }

    public function locDaDuyet(Request $request)
    {
        $donHangs = DB::table('hoa_dons')
            ->where('tinh_trang', 1)
            ->select(
                'ma_hoa_don',
                'ma_kh',
                'ho_ten',
                'email',
                'dia_chi',
                'sdt',
                'ma_sp',
                'ten_sp',
                'don_gia',
                'hinh',
                'so_luong',
                'ghi_chu',
                'tinh_trang',
                'created_at'
            )
            ->orderBy('created_at', 'desc')
            ->get();

        return response()->json($donHangs);
    }

    public function thongKeHoaDon(Request $request)
    {
        $begin = $request->begin;
        $end = $request->end;

        $data = DB::table('hoa_dons')
            ->select(DB::raw('DATE(created_at) as ngay_dat'), DB::raw('COUNT(*) as so_luong_hoa_don'))
            ->whereBetween(DB::raw('DATE(created_at)'), [$begin, $end])
            ->groupBy(DB::raw('DATE(created_at)'))
            ->orderBy('ngay_dat')
            ->get();

        $labels = $data->pluck('ngay_dat');
        $so_luong = $data->pluck('so_luong_hoa_don');

        return response()->json([
            'status' => true,
            'data' => $data,
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'Số lượng hóa đơn',
                    'data' => $so_luong,
                    'borderColor' => '#36A2EB',
                    'fill' => false,
                ]
            ]
        ]);
    }

    public function locHoaDonChiTiet(Request $request)
    {
        $begin = $request->begin;
        $end = $request->end;

        $data = DB::table('hoa_dons')
            ->join('khach_hangs', 'hoa_dons.ma_kh', '=', 'khach_hangs.ma_kh')
            ->select(
                'hoa_dons.*',
                'khach_hangs.ho_ten as ten_khach_hang',
                'khach_hangs.email'
            )
            ->whereBetween(DB::raw('DATE(hoa_dons.created_at)'), [$begin, $end])
            ->orderBy('hoa_dons.created_at', 'desc')
            ->get();

        return response()->json($data);
    }

    public function getData()
    {
        $data = HoaDon::get();

        return response()->json([
            'data' => $data
        ]);
    }

    public function addData(Request $request)
    {
        HoaDon::create([
            'trang_thai' => $request->trang_thai,
        ]);

        return response()->json([
            'status'  => true,
            'message' => 'Thêm HoaDon ' . $request->ten_sp . ' thành công',
        ]);
    }

    public function update(Request $request)
    {
        HoaDon::where('id', $request->id)->update([
            'ma_sp'      => $request->ma_sp,
            'ten_sp'     => $request->ten_sp,
            'don_gia'    => $request->don_gia,
            'tinh_trang' => $request->tinh_trang,
            'gia_cu'     => $request->gia_cu,
            'so_luong'   => $request->so_luong,
            'hinh'       => $request->hinh,
            'ma_dm'      => $request->ma_dm,
            'mo_ta'      => $request->mo_ta,
            'trailer'    => $request->trailer,
        ]);

        return response()->json([
            'status'  => true,
            'message' => 'Cập nhật HoaDon ' . $request->ten_sp . ' thành công',
        ]);
    }

    public function destroy(Request $request)
    {
        HoaDon::where('id', $request->id)->delete();

        return response()->json([
            'status'  => true,
            'message' => 'Xóa HoaDon thành công',
        ]);
    }

    public function changeStatus(Request $request)
    {
        $ma = $request->ma_hoa_don;

        if (!$ma) {
            return response()->json([
                'status'  => false,
                'message' => 'Thiếu mã hóa đơn'
            ], 400);
        }

        $HoaDon = HoaDon::where('ma_hoa_don', $ma)->first();

        if (!$HoaDon) {
            return response()->json([
                'status'  => false,
                'message' => 'Không tìm thấy hóa đơn để cập nhật'
            ], 404);
        }

        $newStatus = ($HoaDon->tinh_trang == 1) ? 0 : 1;
        HoaDon::where('ma_hoa_don', $ma)->update(['tinh_trang' => $newStatus]);

        return response()->json([
            'status'  => true,
            'message' => 'Thay đổi trạng thái hóa đơn thành công',
        ]);
    }

    // ==== CHỨC NĂNG PHÍA CLIENT (KHÁCH HÀNG) ====
    // Học viên code chức năng đặt hàng (datHang) và xem hóa đơn khách hàng tại đây
}
