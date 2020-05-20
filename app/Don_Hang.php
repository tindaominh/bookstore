<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Don_Hang extends Model
{
    protected $table = 'bs_don_hang';
    protected $fillable = [
        'id',
        'ma_don_hang',
        'tong_tien',
        'ngay_dat',
        'id_nguoi_dung',
        'ho_ten_nguoi_nhan',
        'email_nguoi_nhan',
        'so_dien_thoai_nguoi_nhan',
        'trang_thai',
        'dia_chi_nguoi_nhan',
    ];

    public function chi_tiet_don_hang() {
        return $this->belongsTo('App\Chi_Tiet_Don_Hang');
    }
}
