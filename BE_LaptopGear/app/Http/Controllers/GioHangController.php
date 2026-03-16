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
        GioHang::create([
            'ma_sp'       => $request->ma_sp,
            'ten_sp'      => $request->ten_sp,
            'don_gia'     => $request->don_gia,
            'trang_thai'  => $request->trang_thai,
            'gia_cu'      => $request->gia_cu,
            'so_luong'    => $request->so_luong,
            'hinh'        => $request->hinh,
            'ma_dm'       => $request->ma_dm,
            'email'       => $request->email,
            'sdt'         => $request->sdt,
            'mo_ta'       => $request->mo_ta,

        ]);

        return response()->json([
            'status'    => true,
            'message'   => 'Thêm GioHang ' . $request->ten_sp. ' thành công',
        ]);
    }

        public function delData(Request $request)
    {
        GioHang::where('id', $request->id)->delete();

        return response()->json([
            'status'    => true,
            'message'   => 'Xóa Sản phẩm thành công',
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
    DB::table('gio_hangs')
        ->where('ma_kh', $request->ma_kh)
        ->where('ma_sp', $request->ma_sp)
        ->delete();

    return response()->json([
        'status' => true,
        'message' => 'Đã xóa sản phẩm khỏi giỏ hàng',
    ]);
}


}
