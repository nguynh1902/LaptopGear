<?php

namespace App\Http\Controllers;

use App\Models\DanhGia;
use App\Models\SanPham;
use Illuminate\Http\Request;

class SanPhamController
{
    public function getDataClient()
    {
        $data = SanPham::inRandomOrder()->take(4)->get();

        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    }

    public function getDataTrangChu()
    {
        $data = SanPham::all();


        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    }

    public function getSanPhamById($id_san_pham)
    {
        $data_1 = SanPham::where('san_phams.id', $id_san_pham)
            ->first();

        $data_2 = DanhGia::all();



        if ($data_1) {
            return response()->json([
                'data_1'    => $data_1,
                'data_2'    => $data_2,
                'status'    => true
            ]);
        } else {
            return response()->json([
                'status'    => false,
                'message'   => "sai"
            ]);
        }
    }
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
        // Đảo trạng thái: nếu đang hoạt động (1) thì chuyển thành tạm tắt (0), ngược lại thì chuyển thành hoạt động
        $SanPham->trang_thai = ($SanPham->trang_thai == SanPham::HOAT_DONG) ? SanPham::TAM_TAT : SanPham::HOAT_DONG;

        $SanPham->save();

        return response()->json([
            'status'  => true,
            'message' => 'Thay đổi trạng thái SanPham thành công',
        ]);
    }


    public function getDataClientSanPham()
    {
        $data = SanPham::where('trang_thai', '>', 0)->get();

        return response()->json([
            'status'    => true,
            'data'      => $data,
        ]);
    }
}
