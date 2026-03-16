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
Schema::create('chi_tiet_hoa_dons', function (Blueprint $table) {
    $table->id();
    $table->integer('ma_ct_hd');
    $table->unsignedBigInteger('ma_hd'  );
    $table->unsignedBigInteger('ma_sp');
    $table->string('ho_ten');
    $table->integer('don_gia');
    $table->integer('so_luong');
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chi_tiet_hoa_dons');
    }
};
