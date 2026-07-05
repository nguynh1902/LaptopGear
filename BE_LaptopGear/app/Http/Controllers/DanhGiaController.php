<?php

namespace App\Http\Controllers;

use App\Models\DanhGia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DanhGiaController extends Controller
{
    public function getData()
    {
        $user = Auth::guard('sanctum')->user();
        if (!$user) return response()->json(['status' => 0, 'message' => 'Bạn cần đăng nhập!']);

        $data = DanhGia::get();
        return response()->json(['data' => $data]);
    }

    public function changeStatus(Request $request)
    {
        $user = Auth::guard('sanctum')->user();
        if (!$user) return response()->json(['status' => 0, 'message' => 'Bạn cần đăng nhập!']);

        $DanhGia = DanhGia::where('id', $request->id)->first();
        if ($DanhGia) {
            $DanhGia->trang_thai = ($DanhGia->trang_thai == DanhGia::HOAT_DONG) ? DanhGia::TAM_TAT : DanhGia::HOAT_DONG;
            $DanhGia->save();
            return response()->json([
                'status'  => true,
                'message' => 'Thay đổi trạng thái thành công',
            ]);
        }
        return response()->json(['status' => 0, 'message' => 'Đánh giá không tồn tại']);
    }

    public function destroy(Request $request)
    {
        $user = Auth::guard('sanctum')->user();
        if (!$user) return response()->json(['status' => 0, 'message' => 'Bạn cần đăng nhập!']);

        DanhGia::where('id', $request->id)->delete();
        return response()->json([
            'status'  => true,
            'message' => 'Xóa đánh giá thành công',
        ]);
    }
}
