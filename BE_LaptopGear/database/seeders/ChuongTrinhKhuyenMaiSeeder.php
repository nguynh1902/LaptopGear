<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChuongTrinhKhuyenMaiSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('ct_khuyen_mais')->delete();
        DB::table('ct_khuyen_mais')->truncate();
        DB::table('ct_khuyen_mais')->insert([
            [
                'ma_km'       => 1,
                'ma_sp'       => 1,
                'ty_le_km'    => 0.1, // 10% discount
                'ghi_chu'     => 'Khuyến mãi nhân dịp khai trương',
                'so_luong'    => 100,
            ],
            [
                'ma_km'       => 2,
                'ma_sp'       => 2,
                'ty_le_km'    => 0.15, // 15% discount
                'ghi_chu'     => 'Khuyến mãi mùa hè',
                'so_luong'    => 200,
            ],
            [
                'ma_km'       => 3,
                'ma_sp'       => 3,
                'ty_le_km'    => 0.2, // 20% discount
                'ghi_chu'     => 'Khuyến mãi cuối năm',
                'so_luong'    => 150,
            ]
        ]);
    }
}
