<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GioHangSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('gio_hangs')->delete();
        DB::table('gio_hangs')->truncate();

        DB::table('gio_hangs')->insert([
            
        ]);
    }
}
