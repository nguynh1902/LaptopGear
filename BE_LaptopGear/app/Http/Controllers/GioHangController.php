<?php

namespace App\Http\Controllers;

use App\Models\GioHang;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GioHangController
{
     public function getData()
    {
        $data = GioHang::all();

        return response()->json([
            'data' => $data
        ]);
    }
    public function addData(Request $request)
    {
        $existing = GioHang::where('ma_sp', $request->ma_sp)->first();
        if ($existing) {
            $existing->so_luong += ($request->so_luong ?? 1);
            $existing->save();

            return response()->json([
                'status'    => true,
                'message'   => 'Đã tăng số lượng sản phẩm trong giỏ hàng',
            ]);
        }

        GioHang::create([
            'ma_sp'       => $request->ma_sp,
            'ten_sp'      => $request->ten_sp,
            'don_gia'     => $request->don_gia,
            'tinh_trang'  => 1,
            'gia_cu'      => $request->gia_cu ?? $request->don_gia,
            'so_luong'    => $request->so_luong ?? 1,
            'hinh'        => $request->hinh ?? '',
            'ma_dm'       => $request->ma_dm ?? '',
            'email'       => $request->email,
            'sdt'         => $request->sdt,
            'mo_ta'       => $request->mo_ta ?? '',
        ]);

        return response()->json([
            'status'    => true,
            'message'   => 'Thêm vào giỏ hàng thành công',
        ]);
    }

    public function delData(Request $request)
    {
        GioHang::where('id', $request->id)->delete();

        return response()->json([
            'status'    => true,
            'message'   => 'Xóa sản phẩm thành công',
        ]);
    }

    public function delMultiple(Request $request)
    {
        $ids = collect($request->danh_sach)->pluck('id')->filter()->all();
        if (!empty($ids)) {
            GioHang::whereIn('id', $ids)->delete();
        }

        return response()->json([
            'status'    => true,
            'message'   => 'Đã xóa các sản phẩm đã chọn',
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'ma_sp'    => 'required|string',
            'so_luong' => 'required|integer|min:1',
        ]);

        // Tìm đúng bản ghi trong giỏ hàng chỉ theo ma_sp
        $gioHang = GioHang::where('ma_sp', $request->ma_sp)->first();

        if (!$gioHang) {
            return response()->json([
                'status'  => false,
                'message' => 'Sản phẩm không tồn tại trong giỏ hàng.',
            ], 404);
        }

        // Cập nhật số lượng
        $gioHang->so_luong = $request->so_luong;
        $gioHang->save();

        return response()->json([
            'status'  => true,
            'message' => 'Cập nhật số lượng thành công.',
            'data'    => $gioHang,
        ]);
    }

    public function removeItem(Request $request)
    {
        $query = DB::table('gio_hangs')->where('ma_sp', $request->ma_sp);
        if ($request->has('email') && !empty($request->email)) {
            $query->where('email', $request->email);
        }
        $query->delete();

        return response()->json([
            'status' => true,
            'message' => 'Đã xóa sản phẩm khỏi giỏ hàng',
        ]);
    }
}
