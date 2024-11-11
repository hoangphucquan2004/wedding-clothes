<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HinhAnhBaiViet extends Model
{
    use HasFactory;
    protected $fillable = [
        'bai_viet_id',
        'hinh_anh'
    ];
    public function bai_Viet(){
        return $this->belongsTo(BaiViet::class);
    }
}
