<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat_Truc_Tuyen extends Model
{
    protected $table = 'bs_chat_truc_tuyen';
    protected $fillable = [
        'id',
        'id_nguoi_dung',
        'ip',
        'dang_online',
        'da_duoc_tra_loi',
        'ho_ten',
        'email',
    ];
}
