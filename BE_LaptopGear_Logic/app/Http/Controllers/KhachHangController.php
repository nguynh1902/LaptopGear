<?php

namespace App\Http\Controllers;

use App\Models\KhachHang;
use Illuminate\Http\Request;

class KhachHangController
{
    // ==== QUẢN LÝ KHÁCH HÀNG (ADMIN) ====
    public function getData()
    {
        $data = KhachHang::get();

        return response()->json([
            'data' => $data
        ]);
    }

    public function update(Request $request)
    {
        KhachHang::where('id', $request->id)->update([
            'ma_kh'         => $request->ma_kh,
            'mat_khau'      => $request->mat_khau,
            'ho_ten'        => $request->ho_ten,
            'email'         => $request->email,
            'dia_chi'       => $request->dia_chi,
            'sdt'           => $request->sdt,
            'gioi_tinh'     => $request->gioi_tinh,
        ]);

        return response()->json([
            'status'    => true,
            'message'   => 'Cập nhật KhachHang ' . $request->ho_ten . ' thành công',
        ]);
    }

    public function destroy(Request $request)
    {
        KhachHang::where('id', $request->id)->delete();

        return response()->json([
            'status'    => true,
            'message'   => 'Xóa KhachHang thành công',
        ]);
    }

    // ==== CHỨC NĂNG PHÍA CLIENT (KHÁCH HÀNG) ====
    // Học viên code các chức năng: dangKy, dangNhap, checkToken, getProfile, updateKhachHang, DangXuat tại đây
}
