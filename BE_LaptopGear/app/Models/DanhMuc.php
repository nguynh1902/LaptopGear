<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DanhMuc extends Model
{
    protected $table = 'danh_mucs';
    protected $fillable = [
        'ma_dm',
        'ten_danh_muc',
        'trang_thai',
    ];
    const TAM_TAT   = 0;
    const HOAT_DONG     = 1;
}
