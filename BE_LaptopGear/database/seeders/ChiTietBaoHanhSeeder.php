<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChiTietBaoHanhSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('chi_tiet_bao_hanhs')->delete();
        DB::table('chi_tiet_bao_hanhs')->truncate();
        DB::table('chi_tiet_bao_hanhs')->insert([
            [
                'ma_ct_bh'      => 1,
                'ma_bh'         => 1,
                'so_luong'      => 2,
                'ma_hd'         => 1,
                'don_gia'       => 500000,
            ],
            [
                'ma_ct_bh'      => 2,
                'ma_bh'         => 1,
                'so_luong'      => 1,
                'ma_hd'         => 2,
                'don_gia'       => 300000,
            ],
            [
                'ma_ct_bh'      => 3,
                'ma_bh'         => 2,
                'so_luong'      => 3,
                'ma_hd'         => 3,
                'don_gia'       => 700000,
            ]
        ]);
    }
}
