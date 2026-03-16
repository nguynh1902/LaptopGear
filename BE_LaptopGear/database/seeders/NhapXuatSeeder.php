<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NhapXuatSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('nhap_xuats')->delete();
        DB::table('nhap_xuats')->truncate();
        DB::table('nhap_xuats')->insert([
            [
                'ma_nhap_xuat'  => 1,
                'ma_sp'         => 1,
                'gia_nhap'      => 1000000,
                'ngay_ap_dung'  => '2025-06-23',
                'gia_xuat'      => 1200000,
            ],
            [
                'ma_nhap_xuat'  => 2,
                'ma_sp'         => 2,
                'gia_nhap'      => 800000,
                'ngay_ap_dung'  => '2025-06-24',
                'gia_xuat'      => 950000,
            ],
            [
                'ma_nhap_xuat'  => 3,
                'ma_sp'         => 3,
                'gia_nhap'      => 1500000,
                'ngay_ap_dung'  => '2025-06-25',
                'gia_xuat'      => 1800000,
            ]
        ]);
    }
}
