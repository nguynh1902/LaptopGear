<?php

namespace App\Http\Controllers;

use App\Models\GioHang;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class GioHangController
{
     public function getData()
    {
        $user = Auth::guard('sanctum')->user();
        if (!$user) return response()->json(['status' => false, 'message' => 'Bạn cần đăng nhập!']);

        $data = GioHang::where('khach_hang_id', $user->id)->get();

        return response()->json([
            'data' => $data
        ]);
    }
    
    public function addData(Request $request)
    {
        $user = Auth::guard('sanctum')->user();
        if (!$user) return response()->json(['status' => false, 'message' => 'Bạn cần đăng nhập!']);

        $check = GioHang::where('khach_hang_id', $user->id)->where('ma_sp', $request->ma_sp)->first();
        if ($check) {
            $check->so_luong += $request->so_luong;
            $check->save();
        } else {
            GioHang::create([
                'khach_hang_id' => $user->id,
                'ma_sp'       => $request->ma_sp,
                'ten_sp'      => $request->ten_sp,
                'don_gia'     => $request->don_gia,
                'trang_thai'  => 1,
                'gia_cu'      => $request->gia_cu ?? 0,
                'so_luong'    => $request->so_luong,
                'hinh'        => $request->hinh,
                'ma_dm'       => $request->ma_dm ?? '0',
                'mo_ta'       => $request->mo_ta ?? '',
            ]);
        }

        return response()->json([
            'status'    => true,
            'message'   => 'Thêm ' . $request->ten_sp . ' vào giỏ hàng thành công',
        ]);
    }

    public function delData(Request $request)
    {
        $user = Auth::guard('sanctum')->user();
        if (!$user) return response()->json(['status' => false, 'message' => 'Bạn cần đăng nhập!']);

        GioHang::where('khach_hang_id', $user->id)->where('id', $request->id)->delete();

        return response()->json([
            'status'    => true,
            'message'   => 'Xóa sản phẩm thành công',
        ]);
    }

    public function update(Request $request)
    {
        $user = Auth::guard('sanctum')->user();
        if (!$user) return response()->json(['status' => false, 'message' => 'Bạn cần đăng nhập!']);

        $request->validate([
            'ma_sp'    => 'required|string',
            'so_luong' => 'required|integer|min:1',
        ]);

        $gioHang = GioHang::where('khach_hang_id', $user->id)->where('ma_sp', $request->ma_sp)->first();

        if (!$gioHang) {
            return response()->json([
                'status'  => false,
                'message' => 'Sản phẩm không tồn tại trong giỏ hàng.',
            ], 404);
        }

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
        $user = Auth::guard('sanctum')->user();
        if (!$user) return response()->json(['status' => false, 'message' => 'Bạn cần đăng nhập!']);

        GioHang::where('khach_hang_id', $user->id)->where('ma_sp', $request->ma_sp)->delete();

        return response()->json([
            'status' => true,
            'message' => 'Đã xóa sản phẩm khỏi giỏ hàng',
        ]);
    }
}
