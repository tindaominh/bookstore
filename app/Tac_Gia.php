<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tac_Gia extends Model
{
    protected $table = 'bs_tac_gia';
    protected $fillable = [
        'id',
        'ten_tac_gia',
        'ngay_sinh',
        'gioi_thieu',
        'hinh',
    ];
}
