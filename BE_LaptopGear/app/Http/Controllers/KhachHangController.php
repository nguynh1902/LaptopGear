<?php

namespace App\Http\Controllers;

use App\Models\KhachHang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class KhachHangController extends Controller
{
    // === AUTH CLIENT ===
    public function dangNhap(Request $request)
    {
        $check = KhachHang::where('email', $request->email)
                          ->where('mat_khau', $request->mat_khau)
                          ->first();

        if ($check) {
            return response()->json([
                'status'  => true,
                'message' => 'Đăng nhập thành công',
                'token'   => $check->createToken('token_khach_hang')->plainTextToken,
                'ho_ten'  => $check->ho_ten,
                'avatar'  => $check->avatar,
            ]);
        }
        return response()->json([
            'status'  => false,
            'message' => 'Tài khoản sai email hoặc password',
        ]);
    }

    public function dangKy(Request $request)
    {
        $checkEmail = KhachHang::where('email', $request->email)->first();
        if ($checkEmail) {
            return response()->json([
                'status'  => 0,
                'message' => 'Email đã tồn tại trong hệ thống',
            ]);
        }

        $lastKhachHang = KhachHang::orderBy('id', 'desc')->first();
        $lastId = $lastKhachHang ? intval(substr($lastKhachHang->ma_kh, 2)) : 0;
        $newId = $lastId + 1;
        $maKH = 'KH' . str_pad($newId, 2, '0', STR_PAD_LEFT);

        KhachHang::create([
            'ma_kh'     => $maKH,
            'ho_ten'    => $request->ho_ten,
            'email'     => $request->email,
            'sdt'       => $request->sdt,
            'dia_chi'   => $request->dia_chi,
            'gioi_tinh' => $request->gioi_tinh,
            'mat_khau'  => $request->mat_khau,
            'trang_thai'=> 1
        ]);

        return response()->json([
            'status'  => true,
            'message' => 'Đăng ký thành công',
        ]);
    }

    public function checkToken()
    {
        $user = Auth::guard('sanctum')->user();
        if ($user) {
            return response()->json([
                'status' => 1,
                'ho_ten' => $user->ho_ten,
                'avatar' => $user->avatar,
            ]);
        }
        return response()->json([
            'status'  => 0,
            'message' => 'Bạn cần đăng nhập hệ thống!'
        ]);
    }

    public function dangXuat()
    {
        $user = Auth::guard('sanctum')->user();
        if ($user) {
            $user->currentAccessToken()->delete();
            return response()->json([
                'status'  => 1,
                'message' => "Đăng xuất thành công",
            ]);
        }
        return response()->json([
            'status'  => 0,
            'message' => "Có lỗi xảy ra",
        ]);
    }

    public function getProfile()
    {
        $user = Auth::guard('sanctum')->user();
        if ($user) {
            return response()->json([
                'status' => 1,
                'data'   => $user,
            ]);
        }
        return response()->json([
            'status'  => 0,
            'message' => 'Bạn cần đăng nhập hệ thống!'
        ]);
    }

    public function updateKhachHang(Request $request)
    {
        $user = Auth::guard('sanctum')->user();
        if (!$user) return response()->json(['status' => 0, 'message' => 'Bạn cần đăng nhập!']);

        KhachHang::where('id', $request->id)->update([
            'ho_ten'    => $request->ho_ten,
            'sdt'       => $request->sdt,
            'dia_chi'   => $request->dia_chi,
            'gioi_tinh' => $request->gioi_tinh,
        ]);

        return response()->json([
            'status'  => true,
            'message' => 'Cập nhật thông tin thành công',
        ]);
    }

    // === ADMIN ===
    public function getData()
    {
        $user = Auth::guard('sanctum')->user();
        if (!$user) return response()->json(['status' => 0, 'message' => 'Bạn cần đăng nhập!']);

        $data = KhachHang::get();
        return response()->json(['data' => $data]);
    }

    public function update(Request $request)
    {
        $user = Auth::guard('sanctum')->user();
        if (!$user) return response()->json(['status' => 0, 'message' => 'Bạn cần đăng nhập!']);

        KhachHang::where('id', $request->id)->update([
            'ho_ten'    => $request->ho_ten,
            'email'     => $request->email,
            'sdt'       => $request->sdt,
            'dia_chi'   => $request->dia_chi,
            'gioi_tinh' => $request->gioi_tinh,
            'mat_khau'  => $request->mat_khau,
        ]);

        return response()->json([
            'status'  => true,
            'message' => 'Cập nhật khách hàng thành công',
        ]);
    }

    public function destroy(Request $request)
    {
        $user = Auth::guard('sanctum')->user();
        if (!$user) return response()->json(['status' => 0, 'message' => 'Bạn cần đăng nhập!']);

        KhachHang::where('id', $request->id)->delete();
        return response()->json([
            'status'  => true,
            'message' => 'Xóa khách hàng thành công',
        ]);
    }
}
