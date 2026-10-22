<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('loai_tai_khoans', function (Blueprint $table) {
            $table->id();
            $table->integer('ma_loai_tk');
            $table->string('ten_loai_tk');
            $table->integer('trang_thai');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('loai_tai_khoans');
    }
};
