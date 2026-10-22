<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Thueseeder extends Seeder
{

    public function run(): void
    {
        DB::table('thues')->delete();
        DB::table('thues')->truncate();
        DB::table('thues')->insert([
            [
                'ma_thue'      => 1,
                'ten_thue'     => 'Thuế Giá Trị Gia Tăng (VAT)',
                'ty_le_thue'   => 0.1, // 10%
            ],
            [
                'ma_thue'      => 2,
                'ten_thue'     => 'Thuế Thu Nhập Cá Nhân (TNCN)',
                'ty_le_thue'   => 0.05, // 5%
            ],
            [
                'ma_thue'      => 3,
                'ten_thue'     => 'Thuế Thu Nhập Doanh Nghiệp (TNDN)',
                'ty_le_thue'   => 0.2, // 20%
            ]
        ]);
    }
}
