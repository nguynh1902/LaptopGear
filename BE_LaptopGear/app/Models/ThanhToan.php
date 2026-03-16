<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ThanhToan extends Model
{
 protected $table = 'thanh_toans';
    protected $fillable = [
        'ma_kh',
        'ho_ten',
        'email',
        'dia_chi',
        'sdt',
        'ma_sp',
        'ten_sp',
        'don_gia',
        'hinh',
        'so_luong',
        'ghi_chu',
        'tinh_trang',
    ];
}
