<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Thue extends Model
{
    protected $table = 'thues';
    protected $fillable = ['ma_thue','ten_thue', 'ty_le_thue'];
}
