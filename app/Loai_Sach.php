<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loai_Sach extends Model
{
    protected $table = 'bs_loai_sach';
    protected $fillable = [
        'id',
        'ten_loai_sach',
        'id_loai_cha',
        'sap_xep',
        'trang_thai',
    ];

    public function sach() 
    {
        return $this->hasMany('App\Sach');
    }
}
