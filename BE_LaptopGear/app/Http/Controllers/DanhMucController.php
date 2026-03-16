<?php

namespace App\Http\Controllers;

use App\Models\DanhMuc;
use App\Models\NhanVien;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DanhMucController
{
    public function getData()
    {
        $data = DanhMuc::get();

        return response()->json([
            'data' => $data
        ]);
    }

public function addData(Request $request)
{
    // Lấy tất cả mã đã có trong DB
    $usedCodes = DanhMuc::pluck('ma_dm')->toArray();

    // Tạo mảng chỉ chứa phần số sau DM (ví dụ: 'DM02' => 2)
    $numericCodes = array_map(function ($code) {
        return (int)str_replace('DM', '', $code);
    }, $usedCodes);

    sort($numericCodes); // Sắp xếp tăng dần

    // Tìm số nhỏ nhất chưa dùng
    $newNumber = 1;
    while (in_array($newNumber, $numericCodes)) {
        $newNumber++;
    }

    // Tạo mã mới: DM01, DM02,...
    $newMaDm = 'DM' . str_pad($newNumber, 2, '0', STR_PAD_LEFT);

    // Tạo mới danh mục
    DanhMuc::create([
        'ma_dm'         => $newMaDm,
        'ten_danh_muc'  => $request->ten_danh_muc,
        'trang_thai'    => $request->trang_thai,
    ]);

    return response()->json([
        'status'  => true,
        'message' => 'Thêm danh mục "' . $request->ten_danh_muc . '" thành công với mã: ' . $newMaDm,
    ]);
}


    public function update(Request $request)
    {
        DanhMuc::where('id', $request->id)->update([
            'ma_dm'         => $request->ma_dm,
            'ten_danh_muc'        => $request->ten_danh_muc,
            'trang_thai'     => $request->trang_thai,

        ]);

        return response()->json([
            'status'    => true,
            'message'   => 'Cập nhật danh mục ' . $request->ten_danh_muc . ' thành công',
        ]);
    }

    public function destroy(Request $request)
    {
        DanhMuc::where('id', $request->id)->delete();

        return response()->json([
            'status'    => true,
            'message'   => 'Xóa DanhMuc thành công',
        ]);
    }

    public function changeStatus(Request $request)
    {
        $DanhMuc = DanhMuc::where('id', $request->id)->first();
        // Đảo trạng thái: nếu đang hoạt động (1) thì chuyển thành tạm tắt (0), ngược lại thì chuyển thành hoạt động
        $DanhMuc->trang_thai = ($DanhMuc->trang_thai == DanhMuc::HOAT_DONG) ? DanhMuc::TAM_TAT : DanhMuc::HOAT_DONG;
        $DanhMuc->save();
        return response()->json([
            'status'  => true,
            'message' => 'Thay đổi trạng thái DanhMuc thành công',
        ]);
    }


    public function getDataClientDanhMuc()
    {
        $data = DanhMuc::where('trang_thai', '>', 0)->get();
        return response()->json([
            'status'    => true,
            'data'      => $data,
        ]);
    }
}
