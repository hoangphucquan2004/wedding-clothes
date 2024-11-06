<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bai_Viet extends Model
{
    use HasFactory;
    protected $table = 'bai_viets';

    protected $fillable = [
        'danh_muc__bai_viet_id',
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
        return $this->belongsTo(Danh_muc_Bai_viet::class);
    }
    public function hinhAnhBaiViets()
    {
        return $this->hasMany(HinhAnhBaiViet::class);
    }
}
