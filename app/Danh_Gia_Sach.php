<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Danh_Gia_Sach extends Model
{
    protected $table = 'bs_danh_gia_sach';
    protected $fillable = [
        'id',
        'danh_gia',
        'id_nguoi_dung',
    ];
}
