<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('danh_mucs', function (Blueprint $table) {
            $table->id();
            $table->string('ma_dm',10)->unique();
            $table->string('ten_danh_muc');
            $table->integer('trang_thai');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('danh_mucs');
    }
};
