<?php

namespace App\Http\Controllers;

use App\Models\NhanVien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NhanVienController
{
    public function checkToken()
    {
        $user = Auth::guard('sanctum')->user();
        if ($user) {
            return response()->json([
                'status'    => 1,
                'ho_ten_admin'    => $user->ho_ten,
                // 'avatar'    => $user_login->avatar,
            ]);
        } else {
            return response()->json([
                'status'    => 0,
                'message'   => 'Bạn cần đăng nhập hệ thống!'
            ]);
        }
    }

    public function DangXuat()
    {
        $user = Auth::guard('sanctum')->user();
        if ($user) {
            DB::table('personal_access_tokens')
                ->where('id', $user->currentAccessToken()->id)
                ->delete();
            return response()->json([
                'status'  => 1,
                'message' => "Đăng xuất thành công",
            ]);
        } else {
            return response()->json([
                'status'  => 0,
                'message' => "Có lỗi xảy ra",
            ]);
        }
    }

    public function getData()
    {
        $data = NhanVien::get();

        return response()->json([
            'data' => $data
        ]);
    }

public function addData(Request $request)
{

    // Tạo mã nhân viên tự động
    $lastNhanVien = NhanVien::orderBy('id', 'desc')->first();
    $lastId = $lastNhanVien ? intval(substr($lastNhanVien->ma_nv, 2)) : 0;
    $newId = $lastId + 1;
    $maNV = 'NV' . str_pad($newId, 2, '0', STR_PAD_LEFT); // VD: NV01, NV02,...

    // Tạo mới nhân viên
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
      'ngay_vao_lam' => $request->ngay_vao_lam,
        'vai_tro'       => $request->vai_tro,
    ]);

    return response()->json([
        'status'    => true,
        'message'   => 'Thêm nhân viên ' . $request->ho_ten . ' thành công',
    ]);
}
public function updateAdmin(Request $request)
{
    NhanVien::where('id', $request->id)->update([
        'ho_ten'    => $request->ho_ten,
        'ngay_sinh' => $request->ngay_sinh,
        'dia_chi'   => $request->dia_chi,
        'sdt'       => $request->sdt,
        'email'     => $request->email,
    ]);

    $admin = NhanVien::find($request->id); // lấy lại thông tin sau khi update

    return response()->json([
        'status'  => true,
        'message' => 'Cập nhật thành công',
        'data'    => $admin
    ]);
}


    public function update(Request $request)
    {
        NhanVien::where('id', $request->id)->update([
             'ma_nv'         => $request->ma_nv,
            'ho_ten'        => $request->ho_ten,
            'ngay_sinh'     => $request->ngay_sinh,
            'dia_chi'       => $request->dia_chi,
            'luong_cb'      => $request->luong_cb,
            'sdt'           => $request->sdt,
            'email'         => $request->email,
            'mat_khau'         => $request->mat_khau,
            'trang_thai'    => $request->trang_thai,
            'ghi_chu'       => $request->ghi_chu,
            'ngay_vao_lam'  => $request->ngay_vao_lam,
            'vai_tro'       => $request->vai_tro,
        ]);

        return response()->json([
            'status'    => true,
            'message'   => 'Cập nhật NhanVien ' . $request->ho_ten . ' thành công',
        ]);
    }

    public function destroy(Request $request)
    {
        NhanVien::where('id', $request->id)->delete();

        return response()->json([
            'status'    => true,
            'message'   => 'Xóa NhanVien thành công',
        ]);
    }

    public function changeStatus(Request $request)
    {
        $NhanVien = NhanVien::where('id', $request->id)->first();
        // Đảo trạng thái: nếu đang hoạt động (1) thì chuyển thành tạm tắt (0), ngược lại thì chuyển thành hoạt động
        $NhanVien->trang_thai = ($NhanVien->trang_thai == NhanVien::HOAT_DONG) ? NhanVien::TAM_TAT : NhanVien::HOAT_DONG;

        $NhanVien->save();

        return response()->json([
            'status'  => true,
            'message' => 'Thay đổi trạng thái NhanVien thành công',
        ]);
    }


    public function getDataClientNhanVien()
    {
        $data = NhanVien::where('trang_thai', '>', 0)->get();

        return response()->json([
            'status'    => true,
            'data'      => $data,
        ]);
    }


        public function dangNhap(Request $request)
    {
        $check = NhanVien::where('email', $request->email)
            ->where('mat_khau', $request->mat_khau)->first();

        if ($check) {
            return response()->json([
                'status' => true,
                'message' => 'Đăng nhập thành công',
                // 'data' => $check, // ← Trả lại thông tin người dùng
                'token'     => $check->createToken('token_admin')->plainTextToken,
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Tài khoản sai email hoặc password',
            ]);
        }
    }
}
