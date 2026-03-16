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
Schema::create('chi_tiet_bao_hanhs', function (Blueprint $table) {
    $table->id();
    $table->integer('ma_ct_bh');
    $table->unsignedBigInteger('ma_bh');
    $table->integer('so_luong');
    $table->unsignedBigInteger('ma_hd');
    $table->decimal('don_gia');
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chi_tiet_bao_hanhs');
    }
};
