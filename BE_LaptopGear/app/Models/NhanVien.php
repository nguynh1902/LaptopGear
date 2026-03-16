<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class NhanVien extends Model
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $table = 'nhan_viens';
    protected $fillable = [
        'ma_nv',
        'ho_ten',
        'ngay_sinh',
        'dia_chi',
        'ngay_vao_lam',
        'luong_cb',
        'vai_tro',
        'sdt',
        'mat_khau',
        'email',
        'trang_thai',
        'ghi_chu'
    ];
    const TAM_TAT   = 0;
    const HOAT_DONG     = 1;
}
