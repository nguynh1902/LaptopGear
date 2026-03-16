<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KhuyenMai extends Model
{
protected $table = 'khuyen_mais';
protected $fillable = [
    'ma_km','ten_km', 'tu_ngay', 'den_ngay', 'trang_thai'];
}
