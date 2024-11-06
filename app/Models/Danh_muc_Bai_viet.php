<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Danh_muc_Bai_viet extends Model
{
    use HasFactory;
    protected $fillable = [
        'ten_danh_muc',
        'anh_danh_muc',
        'slug',
        'mo_ta_bai_viet',
        'thu_tu',
        'trang_thai',
    ];
    protected $casts = [
        'trang_thai' => 'boolean',
    ];
    public function bai_Viet()
    {
        return $this->hasMany(Bai_Viet::class);
    }
}
