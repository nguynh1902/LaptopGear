<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NhanVienSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('nhan_viens')->delete();
        DB::table('nhan_viens')->truncate();
        DB::table('nhan_viens')->insert([
            [
                'ma_nv'          => 2,
                'ho_ten'         => 'Nguyen Trong Tinh',
                'ngay_sinh'      => '2004-02-02',
                'dia_chi'        => '456 Le Loi, Ho Chi Minh City',
                'ngay_vao_lam'   => '2020-02-02',
                'luong_cb'       => 12000000,
                'vai_tro'        => 'Admin',
                'sdt'            => '0987654321',
                'email'          => 'nguyentrongtinh@gmail.com',
                'mat_khau'       => '123456',
                'trang_thai'     => 1,
                'ghi_chu'        => 'Nhân viên chăm chỉ',
            ]
        ]);
    }
}
