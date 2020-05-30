<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Binh_Luan extends Model
{
    protected $table = 'bs_binh_luan';
    protected $fillable = [
        'id',
        'id_nguoi_dung',
        'noi_dung',
        'email',
        'hinh',
        'trang_thai',
    ];
}
