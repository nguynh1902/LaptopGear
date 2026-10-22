<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChiTietHoaDonSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('chi_tiet_hoa_dons')->delete();
        DB::table('chi_tiet_hoa_dons')->truncate();
        DB::table('chi_tiet_hoa_dons')->insert([
            [
                'ma_ct_hd'      => 1,
                'ma_hd'         => 1,
                'ma_sp'         => 11,
                'ho_ten'        => 'Nguyen Van A',
                'don_gia'       => 500000,
                'so_luong'      => 2,
            ],
            [
                'ma_ct_hd'      => 2,
                'ma_hd'         => 1,
                'ma_sp'         => 12,
                'ho_ten'        => 'Nguyen Van A',
                'don_gia'       => 300000,
                'so_luong'      => 1,
            ],
            [
                'ma_ct_hd'      => 3,
                'ma_hd'         => 2,
                'ma_sp'         => 13,
                'ho_ten'        => 'Tran Thi B',
                'don_gia'       => 700000,
                'so_luong'      => 1,
            ]
        ]);
    }
}
