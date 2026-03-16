<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DanhGiaSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('danh_gias')->delete();
        DB::table('danh_gias')->truncate();
        DB::table('danh_gias')->insert([
            [
                'ma_dg'             => 1,
                'ma_sp'             => 1,
                'ho_ten'     => 'Nguyen Van A',
                'noi_dung'          => 'Sản phẩm rất tốt, tôi rất hài lòng với chất lượng.',
                'trang_thai'        => 1,
                'ngay_danh_gia'     => '2025-06-23',
                'so_sao'            => 5,
            ],
            [
                'ma_dg'             => 2,
                'ma_sp'             => 2,
                'ho_ten'     => 'Tran Thi B',
                'noi_dung'          => 'Sản phẩm không đúng như mô tả, tôi khá thất vọng.',
                'trang_thai'        => 0,
                'ngay_danh_gia'     => '2025-06-24',
                'so_sao'            => 2,
            ],
            [
                'ma_dg'             => 3,
                'ma_sp'             => 3,
                'ho_ten'     => 'Le Van C',
                'noi_dung'          => 'Dịch vụ giao hàng nhanh chóng, sản phẩm chất lượng tốt.',
                'trang_thai'        => 1,
                'ngay_danh_gia'     => '2025-06-25',
                'so_sao'            => 4,
            ]
        ]);
    }
}
