<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chi_Tiet_Don_Hang extends Model
{
    protected $table = 'bs_chi_tiet_don_hang';
    protected $fillable = [
        'id',
        'id_don_hang',
        'id_sach',
        'so_luong',
        'don_gia',
        'thanh_tien',
    ];

    public function don_hang() {
        return $this->hasMany('App\Don_Hang');
    }
}
