<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;

    protected $fillable = [
        'danh_muc_id',
        'ma_san_pham',
        'ten_san_pham',
        'gia_san_pham',
        'image_path',
        'mo_ta_san_pham',
        'so_luong',
        'ngay_nhap',
        'khuyen_mai',
        'trang_thai',
        'is_new',
        'is_hot',
    ];

    protected $casts = [
        'trang_thai' => 'boolean',
        'is_new' => 'boolean',
        'is_hot' => 'boolean',
    ];

    public function danhMuc()
    {
        return $this->belongsTo(DanhMuc::class);
    }

    public function hinhAnhSanPhams()
    {
        return $this->hasMany(HinhAnhSanPham::class);
    }
}
