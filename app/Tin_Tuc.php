<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tin_Tuc extends Model
{
    protected $table = 'bs_tin_tuc';
    protected $fillable = [
        'id',
        'tieu_de_tin',
        'noi_dung_tom_tat',
        'noi_dung_chi_tiet',
        'trang_thai',
        'hinh_dai_dien',
        'id_loai_tin_tuc',
        'ngay_dang',
    ];
}
