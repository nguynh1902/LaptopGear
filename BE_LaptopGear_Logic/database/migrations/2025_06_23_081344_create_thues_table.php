<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
Schema::create('thues', function (Blueprint $table) {
    $table->id('ma_thue');
    $table->string('ten_thue');
    $table->double('ty_le_thue');
    $table->timestamps();
});
    }

    public function down(): void
    {
        Schema::dropIfExists('thues');
    }
};
