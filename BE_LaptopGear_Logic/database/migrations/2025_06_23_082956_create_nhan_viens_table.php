<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
Schema::create('nhan_viens', function (Blueprint $table) {
    $table->id();
$table->string('ma_nv', 10)->unique();
    $table->string('ho_ten');
    $table->date('ngay_sinh');
    $table->string('dia_chi');
    $table->date('ngay_vao_lam');
    $table->decimal('luong_cb', 12, 2)->unsigned();
    $table->string('vai_tro');
    $table->string('sdt');
    $table->string('email');
    $table->string('mat_khau');
    $table->integer('trang_thai');
    $table->text('ghi_chu');
    $table->timestamps();
});
    }

    public function down(): void
    {
        Schema::dropIfExists('nhan_viens');
    }
};
