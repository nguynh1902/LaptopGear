<?php

namespace App\Http\Controllers;

use App\Models\DanhMuc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DanhMucController extends Controller
{
    public function getData()
    {
        $user = Auth::guard('sanctum')->user();
        if (!$user) {
            return response()->json(['status' => 0, 'message' => 'Bạn cần đăng nhập!']);
        }

        $data = DanhMuc::get();
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

        $usedCodes = DanhMuc::pluck('ma_dm')->toArray();
        $numericCodes = array_map(function ($code) {
            return (int)str_replace('DM', '', $code);
        }, $usedCodes);
        sort($numericCodes);
        $newNumber = 1;
        while (in_array($newNumber, $numericCodes)) {
            $newNumber++;
        }
        $newMaDm = 'DM' . str_pad($newNumber, 2, '0', STR_PAD_LEFT);

        DanhMuc::create([
            'ma_dm'         => $newMaDm,
            'ten_danh_muc'  => $request->ten_danh_muc,
            'trang_thai'    => $request->trang_thai,
        ]);

        return response()->json([
            'status'  => true,
            'message' => 'Thêm danh mục "' . $request->ten_danh_muc . '" thành công',
        ]);
    }

    public function update(Request $request)
    {
        $user = Auth::guard('sanctum')->user();
        if (!$user) {
            return response()->json(['status' => 0, 'message' => 'Bạn cần đăng nhập!']);
        }

        DanhMuc::where('id', $request->id)->update([
            'ten_danh_muc' => $request->ten_danh_muc,
            'trang_thai'   => $request->trang_thai,
        ]);

        return response()->json([
            'status'    => true,
            'message'   => 'Cập nhật danh mục ' . $request->ten_danh_muc . ' thành công',
        ]);
    }

    public function destroy(Request $request)
    {
        $user = Auth::guard('sanctum')->user();
        if (!$user) {
            return response()->json(['status' => 0, 'message' => 'Bạn cần đăng nhập!']);
        }

        DanhMuc::where('id', $request->id)->delete();

        return response()->json([
            'status'    => true,
            'message'   => 'Xóa danh mục thành công',
        ]);
    }

    public function changeStatus(Request $request)
    {
        $user = Auth::guard('sanctum')->user();
        if (!$user) {
            return response()->json(['status' => 0, 'message' => 'Bạn cần đăng nhập!']);
        }

        $danhMuc = DanhMuc::where('id', $request->id)->first();
        if ($danhMuc) {
            $danhMuc->trang_thai = ($danhMuc->trang_thai == DanhMuc::HOAT_DONG) ? DanhMuc::TAM_TAT : DanhMuc::HOAT_DONG;
            $danhMuc->save();
            return response()->json([
                'status'  => true,
                'message' => 'Thay đổi trạng thái danh mục thành công',
            ]);
        }
        return response()->json([
            'status'  => 0,
            'message' => 'Danh mục không tồn tại',
        ]);
    }

    public function getDataClientDanhMuc()
    {
        $data = DanhMuc::where('trang_thai', DanhMuc::HOAT_DONG)->get();
        return response()->json([
            'status'    => true,
            'data'      => $data,
        ]);
    }
}
