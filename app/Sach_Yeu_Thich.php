<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sach_Yeu_Thich extends Model
{
    protected $table = 'bs_sach_yeu_thich';
    protected $fillable = [
        'id',
        'id_nguoi_dung',
        'id_sach',
    ];
}
