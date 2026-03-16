<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
Schema::create('danh_gias', function (Blueprint $table) {
    $table->id();
    $table->integer('ma_dg');
    $table->integer('ma_sp');
    $table->string('ho_ten');
    $table->string('noi_dung');
    $table->integer('trang_thai');
    $table->date('ngay_danh_gia');
    $table->integer('so_sao');
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('danh_gias');
    }
};
