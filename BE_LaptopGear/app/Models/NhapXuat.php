<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NhapXuat extends Model
{
protected $table = 'nhap_xuats';
protected $fillable = ['ma_sp', 'gia_nhap', 'ngay_ap_dung', 'gia_xuat'];
}
