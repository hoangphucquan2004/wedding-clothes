<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaiViet extends Model
{
    use HasFactory;

    protected $fillable = [
        'danh_muc_bai_viet_id',
        'title',
        'slug',
        'content',
        'excerpt',
        'thumbnail',
        'status',
        'views',
    ];
    public function danh_muc_Bai_viet()
    {
        return $this->belongsTo(DanhMucBaiViet::class);
    }
    public function hinhAnhBaiViets()
    {
        return $this->hasMany(HinhAnhBaiViet::class);
    }
}
