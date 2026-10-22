<?php

namespace App\Http\Controllers;

use App\Models\DonDatHang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DonDatHangController
{
public function addDatHang(Request $request)
{
$khachHang = DB::table('khach_hangs')->where('ma_kh', $request->ma_kh)->first();

if (!$khachHang) {
    return response()->json([
        'status' => false,
        'message' => 'Khách hàng không tồn tại',
    ]);
}

    // Tạo mã đơn đặt hàng tự động ngay tại đây
    $lastOrder = DB::table('don_dat_hangs')->orderByDesc('id')->first();
    if (!$lastOrder || !$lastOrder->ma_don_dat_hang) {
        $maDonDatHang = 'DDH01';
    } else {
        $lastNumber = (int) str_replace('DDH', '', $lastOrder->ma_don_dat_hang);
        $newNumber = $lastNumber + 1;
        $maDonDatHang = 'DDH' . str_pad($newNumber, 2, '0', STR_PAD_LEFT);
    }

    foreach ($request->san_pham as $sp) {
        DB::table('don_dat_hangs')->insert([
            'ma_don_dat_hang' => $maDonDatHang,
            'ma_kh'     => $khachHang->ma_kh,
            'ho_ten'    => $khachHang->ho_ten,
            'email'     => $khachHang->email,
            'dia_chi'   => $khachHang->dia_chi,
            'sdt'       => $khachHang->sdt,
            'ma_sp'     => $sp['ma_sp'],
            'ten_sp'    => $sp['ten_sp'],
            'don_gia'   => $sp['don_gia'],
            'so_luong'  => $sp['so_luong'],
            'hinh'      => $sp['hinh'],
            'ghi_chu'   => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    return response()->json([
        'status' => true,
        'message' => 'Đặt hàng thành công',
    ]);
}


}
