<?php

namespace App\Http\Controllers;

use App\Models\ThanhToan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ThanhToanController extends Controller
{
    public function getData()
    {
        $data = ThanhToan::get();

        return response()->json([
            'data' => $data
        ]);
    }

    // Hàm lưu đơn hàng
    public function store(Request $request)
    {
        $dsSanPham = $request->input('san_pham');

        if (empty($dsSanPham)) {
            return response()->json([
                'status' => false,
                'message' => 'Không có sản phẩm nào được chọn.'
            ]);
        }

        // Lấy thông tin người dùng từ request
        $ma_kh  = $request->input('ma_kh') ?? null;
        $ho_ten = $request->input('ho_ten') ?? 'Khách lẻ';
        $email  = $request->input('email') ?? 'no@email.com';
        $dia_chi = $request->input('dia_chi') ?? 'Chưa cung cấp';
        $sdt = $request->input('sdt') ?? '0000000000';


        DB::beginTransaction();
        try {
            foreach ($dsSanPham as $sp) {
                DB::table('thanh_toans')->insert([
                    'ma_kh'      => $ma_kh,
                    'ho_ten'     => $ho_ten,
                    'email'      => $email,
                    'dia_chi'    => $dia_chi,
                    'sdt'        => $sdt,
                    'ma_sp'      => $sp['ma_sp'],
                    'ten_sp'     => $sp['ten_sp'],
                    'don_gia'    => $sp['don_gia'],
                    'hinh'       => $sp['hinh'],
                    'so_luong'   => $sp['so_luong'],
                    'ghi_chu'    => $sp['ghi_chu'] ?? null,
                    'tinh_trang' => 0,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }

            DB::commit();
            return response()->json([
                'status' => true,
                'message' => 'Đặt hàng thành công!',
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => false,
                'message' => 'Lỗi đặt hàng: ' . $e->getMessage()
            ]);
        }
    }
    public function destroy(Request $request)
    {
        ThanhToan::where('id', $request->id)->delete();

        return response()->json([
            'status'    => true,
            'message'   => 'Xóa HoaDon thành công',
        ]);
    }
}
