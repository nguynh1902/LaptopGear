<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChiTietHoaDon extends Model
{
protected $table = 'chi_tiet_hoa_dons';
protected $fillable = ['ma_ct_hd','ma_hd', 'ma_sp', 'ho_ten', 'don_gia', 'so_luong'];
}
