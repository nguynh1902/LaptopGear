<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
Schema::create('bao_hanhs', function (Blueprint $table) {
    $table->id();
    $table->integer('ma_bh');
    $table->string('ten_dang_nhap');
    $table->unsignedBigInteger('ma_sp');
    $table->string('ly_do');
    $table->date('ngay_yeu_cau');
    $table->integer('trang_thai');
    $table->string('ghi_chu');
    $table->date('ngay_hen');
    $table->date('ngay_hoan_thanh');
    $table->integer('ma_nv');
    $table->timestamps();
});
    }

    public function down(): void
    {
        Schema::dropIfExists('bao_hanhs');
    }
};
