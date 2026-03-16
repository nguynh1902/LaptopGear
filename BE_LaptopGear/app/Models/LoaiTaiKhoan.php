<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoaiTaiKhoan extends Model
{
protected $table = 'loai_tai_khoans';
protected $fillable = [
    'ma_loai_tk',
    'ten_loai_tk',
    'trang_thai',
];
}
