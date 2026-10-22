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
Schema::create('khuyen_mais', function (Blueprint $table) {
    $table->id();
    $table->integer('ma_km');
    $table->string('ten_km');
    $table->date('tu_ngay');
    $table->date('den_ngay');
    $table->integer('trang_thai');
    $table->timestamps();
});
    }

    public function down(): void
    {
        Schema::dropIfExists('khuyen_mais');
    }
};
