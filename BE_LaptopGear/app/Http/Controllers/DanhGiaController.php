<?php

namespace App\Http\Controllers;

use App\Models\DanhGia;
use Illuminate\Http\Request;

class DanhGiaController
{
    public function getData()
    {
        $data = DanhGia::get();

        return response()->json([
            'data' => $data
        ]);
    }
 public function changeStatus(Request $request)
    {
        $DanhGia = DanhGia::where('id', $request->id)->first();
        // Đảo trạng thái: nếu đang hoạt động (1) thì chuyển thành tạm tắt (0), ngược lại thì chuyển thành hoạt động
        $DanhGia->trang_thai = ($DanhGia->trang_thai == DanhGia::HOAT_DONG) ? DanhGia::TAM_TAT : DanhGia::HOAT_DONG;

        $DanhGia->save();

        return response()->json([
            'status'  => true,
            'message' => 'Thay đổi trạng thái DanhGia thành công',
        ]);
    }
}
