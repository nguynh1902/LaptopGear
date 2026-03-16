<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BaoHanhSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('bao_hanhs')->truncate();
        DB::table('bao_hanhs')->delete();
        DB::table('bao_hanhs')->insert([
            [
                'ma_bh'             => 1,
                'ten_dang_nhap'     => 'user1',
                'ma_sp'             => 101,
                'ly_do'             => 'Sản phẩm bị lỗi kỹ thuật',
                'ngay_yeu_cau'      => '2025-06-23',
                'trang_thai'        => 1,
                'ghi_chu'           => 'Yêu cầu bảo hành nhanh chóng',
                'ngay_hen'          => '2025-06-30',
                'ngay_hoan_thanh'   => '2025-07-05',
                'ma_nv'             => 1,
            ],
            [
                'ma_bh'             => 2,
                'ten_dang_nhap'     => 'user2',
                'ma_sp'             => 102,
                'ly_do'             => 'Sản phẩm không hoạt động',
                'ngay_yeu_cau'      => '2025-06-24',
                'trang_thai'        => 0,
                'ghi_chu'           => 'Chờ xử lý',
                'ngay_hen'          => '2025-07-01',
                'ngay_hoan_thanh'   => '2025-07-05',
                'ma_nv'             => 2,
            ],
            [
                'ma_bh'             => 3,
                'ten_dang_nhap'     => 'user3',
                'ma_sp'             => 103,
                'ly_do'             => 'Sản phẩm bị trầy xước',
                'ngay_yeu_cau'      => '2025-06-25',
                'trang_thai'        => 2,
                'ghi_chu'           => 'Đã gửi sản phẩm đi bảo hành',
                'ngay_hen'          => '2025-07-02',
                'ngay_hoan_thanh'   => '2025-07-05',
                'ma_nv'             => 3,
            ]
        ]);
    }
}
