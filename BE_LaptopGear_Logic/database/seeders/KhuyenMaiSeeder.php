<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KhuyenMaiSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('khuyen_mais')->delete();
        DB::table('khuyen_mais')->truncate();
        DB::table('khuyen_mais')->insert([
            [
                'ma_km'         => 1,
                'ten_km'        => 'Khuyến mãi Tết Nguyên Đán',
                'tu_ngay'       => '2025-01-01',
                'den_ngay'      => '2025-01-31',
                'trang_thai'    => 1,
            ],
            [
                'ma_km'         => 2,
                'ten_km'        => 'Khuyến mãi Quốc tế Phụ nữ',
                'tu_ngay'       => '2025-03-01',
                'den_ngay'      => '2025-03-08',
                'trang_thai'    => 1,
            ],
            [
                'ma_km'         => 3,
                'ten_km'        => 'Khuyến mãi Quốc tế Lao động',
                'tu_ngay'       => '2025-05-01',
                'den_ngay'      => '2025-05-07',
                'trang_thai'    => 1,
            ]
        ]);
    }
}
