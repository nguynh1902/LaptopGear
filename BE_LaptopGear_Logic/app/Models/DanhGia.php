<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DanhGia extends Model
{
protected $table = 'danh_gias';
protected $fillable = ['ma_dg','ma_sp', 'ho_ten', 'noi_dung','trang_thai', 'ngay_danh_gia', 'so_sao'];
    const TAM_TAT   = 0;
    const HOAT_DONG     = 1;
}
