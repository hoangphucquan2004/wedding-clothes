<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LienHe extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'ho_ten',
        'email',
        'dia_chia',
        'dien_thoai',
        'noi_dung',
        'date',
        'trang_thai',
    ];
}
