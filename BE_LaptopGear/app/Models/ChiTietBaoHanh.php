<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChiTietBaoHanh extends Model
{
protected $table = 'chi_tiet_bao_hanhs';
protected $fillable = ['ma_ct_bh','ma_bh', 'so_luong_mua', 'ma_hd', 'don_gia'];
}
