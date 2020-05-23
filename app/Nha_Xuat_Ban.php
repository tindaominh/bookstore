<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nha_Xuat_Ban extends Model
{
    protected $table = 'bs_nha_xuat_ban';
    protected $fillable = [
        'id',
        'ten_nha_xuat_ban',
        'dia_chi',
        'dien_thoai',
        'email',
    ];

    public function sach()
    {
        return $this->hasMany('App\Sach', 'id_nha_xuat_ban');
    }
}
