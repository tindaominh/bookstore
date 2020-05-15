<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Binh_Luan extends Model
{
    protected $table = 'bs_binh_luan';
    protected $fillable = [
        'id',
        'id_sach',
        'id_nguoi_dung',
        'noi_dung',
        'id_binh_luan_cha',
        'ngay_binh_luan',
        'trang_thai',
    ];
}
