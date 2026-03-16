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
        Schema::create('gio_hangs', function (Blueprint $table) {
            $table->id();
            $table->string('ma_sp');
            $table->string('ten_sp');
            $table->double('don_gia');
            $table->double('gia_cu');
            $table->string('hinh');
            $table->integer('so_luong');
            $table->string('ma_dm', 10);
            $table->text('mo_ta');
            $table->string('email')->nullable();
            $table->string('sdt')->nullable();
            $table->tinyInteger('tinh_trang')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gio_hangs');
    }
};
