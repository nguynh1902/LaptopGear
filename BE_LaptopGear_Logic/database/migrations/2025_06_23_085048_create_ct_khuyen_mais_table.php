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
Schema::create('ct_khuyen_mais', function (Blueprint $table) {
    $table->id();
    $table->integer('ma_km');
    $table->integer('ma_sp');
    $table->double('ty_le_km');
    $table->text('ghi_chu');
    $table->integer('so_luong');
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ct_khuyen_mais');
    }
};
