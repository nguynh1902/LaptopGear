<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class KhachHang extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;
    
    protected $table = 'khach_hangs';
protected $fillable = [
    'ma_kh', 'ho_ten', 'email', 'sdt', 'dia_chi','avatar', 'gioi_tinh', 'mat_khau',
];
        const TAM_TAT   = 0;
    const HOAT_DONG     = 1;
}
