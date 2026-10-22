<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaoHanh extends Model
{
    protected $table = 'bao_hanhs';
    protected $fillable = ['ma_bh','ten_dang_nhap', 'ma_sp', 'ly_do', 'ngay_yeu_cau', 'trang_thai', 'ghi_chu', 'ngay_hen', 'ngay_hoan_thanh', 'ma_nv'];
}
