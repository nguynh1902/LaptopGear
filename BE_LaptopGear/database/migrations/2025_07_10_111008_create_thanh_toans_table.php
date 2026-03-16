<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
      Schema::create('thanh_toans', function (Blueprint $table) {
    $table->id();
    // Thông tin khách hàng tại thời điểm đặt hàng
    $table->string('ma_kh')->nullable(); // mã khách hàng nội bộ
    $table->string('ho_ten');
    $table->string('email');
    $table->string('dia_chi');
    $table->string('sdt');

    // Thông tin sản phẩm tại thời điểm thanh toán
    $table->string('ma_sp');
    $table->string('ten_sp');
    $table->double('don_gia');
    $table->string('hinh');
    $table->integer('so_luong');

    // Ghi chú đơn hàng
    $table->string('ghi_chu')->nullable();
$table->integer('tinh_trang')->default(0); // 0: Chờ xử lý, 1: Đã xác nhận, ...


    $table->timestamps();
});


    }

    public function down(): void
    {
        Schema::dropIfExists('thanh_toans');
    }
};
