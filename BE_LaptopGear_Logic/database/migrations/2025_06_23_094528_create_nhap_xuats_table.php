<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
Schema::create('nhap_xuats', function (Blueprint $table) {
    $table->id();
    $table->integer('ma_nhap_xuat');
    $table->integer('ma_sp');
    $table->integer('gia_nhap');
    $table->date('ngay_ap_dung');
    $table->integer('gia_xuat');
    $table->timestamps();
});
    }
    public function down(): void
    {
        Schema::dropIfExists('nhap_xuats');
    }
};
