<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use Illuminate\Http\Request;

class SanPhamController
{
    // ==== QUẢN LÝ SẢN PHẨM (ADMIN) ====
    public function getData()
    {
        $data = SanPham::get();

        return response()->json([
            'data' => $data
        ]);
    }

    public function addData(Request $request)
    {
        // Lấy danh sách các mã đã dùng
        $usedCodes = SanPham::pluck('ma_sp')->toArray();

        // Lọc ra số phía sau của mã (vd: SP01 → 1)
        $numbers = collect($usedCodes)->map(function ($code) {
            return (int)str_replace('SP', '', $code);
        })->sort()->values();

        // Tìm số tiếp theo chưa sử dụng
        $newNumber = 1;
        foreach ($numbers as $num) {
            if ($num == $newNumber) {
                $newNumber++;
            } else {
                break;
            }
        }

        // Ghép mã mới
        $newMaSp = 'SP' . str_pad($newNumber, 2, '0', STR_PAD_LEFT);

        // Tạo sản phẩm
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
            'message' => 'Thêm sản phẩm "' . $request->ten_sp . '" thành công với mã: ' . $newMaSp,
        ]);
    }

    public function update(Request $request)
    {
        SanPham::where('id', $request->id)->update([
            'ma_sp'       => $request->ma_sp,
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
            'message'   => 'Cập nhật SanPham ' . $request->ten_sp . ' thành công',
        ]);
    }

    public function destroy(Request $request)
    {
        SanPham::where('id', $request->id)->delete();

        return response()->json([
            'status'    => true,
            'message'   => 'Xóa SanPham thành công',
        ]);
    }

    public function changeStatus(Request $request)
    {
        $SanPham = SanPham::where('id', $request->id)->first();
        $SanPham->trang_thai = ($SanPham->trang_thai == SanPham::HOAT_DONG) ? SanPham::TAM_TAT : SanPham::HOAT_DONG;

        $SanPham->save();

        return response()->json([
            'status'  => true,
            'message' => 'Thay đổi trạng thái SanPham thành công',
        ]);
    }

    // ==== CHỨC NĂNG PHÍA CLIENT (KHÁCH HÀNG) ====
    // Học viên code các chức năng lấy danh sách sản phẩm trang chủ, chi tiết sản phẩm tại đây
}
