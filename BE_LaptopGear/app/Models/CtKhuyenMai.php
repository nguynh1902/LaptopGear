<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CtKhuyenMai extends Model
{
protected $table = 'ct_khuyen_mais';
protected $fillable = ['ma_km', 'ma_sp', 'ty_le_km', 'ghi_chu', 'so_luong'];
}
