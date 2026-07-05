<?php

namespace App\Http\Controllers;

use App\Models\NhanVien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NhanVienController extends Controller
{
    public function checkToken()
    {
        $user = Auth::guard('sanctum')->user();
        if ($user) {
            return response()->json([
                'status' => 1,
                'ho_ten_admin' => $user->ho_ten,
            ]);
        }
        return response()->json([
            'status' => 0,
            'message' => 'Bạn cần đăng nhập hệ thống!'
        ]);
    }

    public function dangNhap(Request $request)
    {
        $check = NhanVien::where('email', $request->email)
                         ->where('mat_khau', $request->mat_khau)
                         ->first();

        if ($check) {
            return response()->json([
                'status'  => true,
                'message' => 'Đăng nhập thành công',
                'token'   => $check->createToken('token_admin')->plainTextToken,
            ]);
        }
        return response()->json([
            'status'  => false,
            'message' => 'Tài khoản sai email hoặc password',
        ]);
    }

    public function DangXuat()
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

    public function getData()
    {
        $user = Auth::guard('sanctum')->user();
        if (!$user) return response()->json(['status' => 0, 'message' => 'Bạn cần đăng nhập!']);

        $data = NhanVien::get();
        return response()->json(['data' => $data]);
    }

    public function addData(Request $request)
    {
        $user = Auth::guard('sanctum')->user();
        if (!$user) return response()->json(['status' => 0, 'message' => 'Bạn cần đăng nhập!']);

        $lastNhanVien = NhanVien::orderBy('id', 'desc')->first();
        $lastId = $lastNhanVien ? intval(substr($lastNhanVien->ma_nv, 2)) : 0;
        $newId = $lastId + 1;
        $maNV = 'NV' . str_pad($newId, 2, '0', STR_PAD_LEFT);

        NhanVien::create([
            'ma_nv'         => $maNV,
            'ho_ten'        => $request->ho_ten,
            'ngay_sinh'     => $request->ngay_sinh,
            'dia_chi'       => $request->dia_chi,
            'luong_cb'      => $request->luong_cb,
            'sdt'           => $request->sdt,
            'email'         => $request->email,
            'mat_khau'      => $request->mat_khau,
            'trang_thai'    => $request->trang_thai,
            'ghi_chu'       => $request->ghi_chu,
            'ngay_vao_lam'  => $request->ngay_vao_lam,
            'vai_tro'       => $request->vai_tro,
        ]);

        return response()->json([
            'status'  => true,
            'message' => 'Thêm nhân viên ' . $request->ho_ten . ' thành công',
        ]);
    }

    public function update(Request $request)
    {
        $user = Auth::guard('sanctum')->user();
        if (!$user) return response()->json(['status' => 0, 'message' => 'Bạn cần đăng nhập!']);

        NhanVien::where('id', $request->id)->update([
            'ho_ten'        => $request->ho_ten,
            'ngay_sinh'     => $request->ngay_sinh,
            'dia_chi'       => $request->dia_chi,
            'luong_cb'      => $request->luong_cb,
            'sdt'           => $request->sdt,
            'email'         => $request->email,
            'mat_khau'      => $request->mat_khau,
            'trang_thai'    => $request->trang_thai,
            'ghi_chu'       => $request->ghi_chu,
            'ngay_vao_lam'  => $request->ngay_vao_lam,
            'vai_tro'       => $request->vai_tro,
        ]);

        return response()->json([
            'status'  => true,
            'message' => 'Cập nhật nhân viên ' . $request->ho_ten . ' thành công',
        ]);
    }

    public function destroy(Request $request)
    {
        $user = Auth::guard('sanctum')->user();
        if (!$user) return response()->json(['status' => 0, 'message' => 'Bạn cần đăng nhập!']);

        NhanVien::where('id', $request->id)->delete();
        return response()->json([
            'status'  => true,
            'message' => 'Xóa nhân viên thành công',
        ]);
    }

    public function changeStatus(Request $request)
    {
        $user = Auth::guard('sanctum')->user();
        if (!$user) return response()->json(['status' => 0, 'message' => 'Bạn cần đăng nhập!']);

        $nhanVien = NhanVien::where('id', $request->id)->first();
        if ($nhanVien) {
            $nhanVien->trang_thai = ($nhanVien->trang_thai == NhanVien::HOAT_DONG) ? NhanVien::TAM_TAT : NhanVien::HOAT_DONG;
            $nhanVien->save();
            return response()->json([
                'status'  => true,
                'message' => 'Thay đổi trạng thái nhân viên thành công',
            ]);
        }
        return response()->json([
            'status'  => 0,
            'message' => 'Nhân viên không tồn tại',
        ]);
    }
}
