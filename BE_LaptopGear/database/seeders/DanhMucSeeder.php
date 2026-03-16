<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DanhMucSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('danh_mucs')->delete();
        // DB::table('danh_mucs')->truncate();
        DB::table('danh_mucs')->insert([
            [
                'ma_dm' => 'DM01',
                'ten_danh_muc' => 'HỌC TẬP - VĂN PHÒNG',
                'trang_thai' => 1,
            ],
            [
                'ma_dm' => 'DM02',
                'ten_danh_muc' => 'LAPTOP GAMING',
                'trang_thai' => 1,
            ],
            [
                'ma_dm' => 'DM03',
                'ten_danh_muc' => 'LAPTOP ĐỒ HỌA',
                'trang_thai' => 1,
            ],
            [
                'ma_dm' => 'DM04',
                'ten_danh_muc' => 'LAPTOP MỎNG NHẸ CAO CẤP',
                'trang_thai' => 1,
            ],
            [
                'ma_dm' => 'DM05',
                'ten_danh_muc' => 'LAPTOP LIKE NEW',
                'trang_thai' => 1,
            ],
            [
                'ma_dm' => 'DM06',
                'ten_danh_muc' => 'LINH KIỆN - PHỤ KIỆN',
                'trang_thai' => 1,
            ],
            [
                'ma_dm' => 'DM07',
                'ten_danh_muc' => 'PC - MÁY TÍNH LẮP RÁP',
                'trang_thai' => 1,
            ],
        ]);
    }
}
