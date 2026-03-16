<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoaiTaiKhoanSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('loai_tai_khoans')->delete();
        DB::table('loai_tai_khoans')->truncate();
        DB::table('loai_tai_khoans')->insert([
            [
                'ma_loai_tk'    => 1,
                'ten_loai_tk'   => 'Khách hàng',
                'trang_thai'    => 1,
            ],
            [
                'ma_loai_tk'    => 2,
                'ten_loai_tk'   => 'Nhân viên',
                'trang_thai'    => 1,
            ],
            [
                'ma_loai_tk'    => 3,
                'ten_loai_tk'   => 'Quản trị viên',
                'trang_thai'    => 1,
            ]
        ]);
    }
}
