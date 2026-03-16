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
                'ma_nv'         => 1,
                'ho_ten'        => 'Nguyen Thanh Dat',
                'ngay_sinh'     => '2004-01-01',
                'dia_chi'       => '123 Nguyen Trai, Hanoi',
                'ngay_vao_lam'  => '2019-01-01',
                'luong_cb'      => 10000000,
                'vai_tro'       => 'Quản lý',
                'sdt'           => '0123456789',
                'email'         => 'nguyenthanhdat@gmail.com',
                'mat_khau'         => '123456',
                'trang_thai'    => 1,
                'ghi_chu'       => 'Nhân viên xuất sắc',
            ],
            [
                'ma_nv'         => 2,
                'ho_ten'        => 'Nguyen Trong Tinh',
                'ngay_sinh'     => '2004-02-02',
                'dia_chi'       => '456 Le Loi, Ho Chi Minh City',
                'ngay_vao_lam'  => '2020-02-02',
                'luong_cb'      => 12000000,
                'vai_tro'       => 'Nhân viên',
                'sdt'           => '0987654321',
                'email'         => 'nguyentrongtinh@gmail.com',
                'mat_khau'         => '123456',
                'trang_thai'    => 1,
                'ghi_chu'       => 'Nhân viên chăm chỉ',
            ],
            [
                'ma_nv'         => 3,
                'ho_ten'        => 'Nguyen Van Hieu',
                'ngay_sinh'     => '2004-03-03',
                'dia_chi'       => '789 Tran Hung Dao, Da Nang',
                'ngay_vao_lam'  => '2021-03-03',
                'luong_cb'      => 11000000,
                'vai_tro'       => 'Nhân viên',
                'sdt'           => '0123456789',
                'email'         => 'nguyenvanhieu@gmai.com',
                'mat_khau'         => '123456',
                'trang_thai'    => 1,
                'ghi_chu'       => 'Nhân viên nhiệt tình',
            ],
        ]);
    }
}
