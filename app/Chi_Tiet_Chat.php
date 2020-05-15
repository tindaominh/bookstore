<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chi_Tiet_Chat extends Model
{
    protected $table = 'bs_chi_tiet_chat';
    protected $fillable = [
        'id',
        'session_id_chat',
        'id_nguoi_dung_tl',
        'time_chat',
    ];
}
