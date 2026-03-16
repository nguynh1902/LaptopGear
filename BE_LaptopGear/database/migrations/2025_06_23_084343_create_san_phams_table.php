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
        Schema::create('san_phams', function (Blueprint $table) {
            $table->id();
            $table->string('ma_sp', 10)->unique();
            $table->string('ten_sp');
            $table->double('don_gia');
            $table->double('gia_cu');
            $table->integer('trang_thai');
            $table->integer('so_luong');
            $table->string('hinh');
            $table->string('ma_dm', 10);
            $table->text('mo_ta');
            $table->string('trailer');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('san_phams');
    }
};
