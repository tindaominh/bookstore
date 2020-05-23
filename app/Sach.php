<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sach extends Model
{
    protected $table = 'bs_sach';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'ten_sach',
        'id_tac_gia',
        'gioi_thieu',
        'doc_thu',
        'id_loai_sach',
        'id_nha_xuat_ban',
        'so_trang',
        'ngay_xuat_ban',
        'kich_thuoc',
        'sku',
        'trong_luong',
        'trang_thai',
        'hinh',
        'don_gia',
        'gia_bia',
        'giam_gia',
        'noi_bat',
    ];

    public function loai_sach() {
        return $this->belongsTo('App\Loai_Sach');
    }

    public function tac_gia()
    {
        return $this->belongsTo('App\Tac_Gia', 'id_tac_gia', 'id');
    }

    public function nha_xuat_ban()
    {
        return $this->belongsTo('App\Nha_Xuat_Ban', 'id_nha_xuat_ban', 'id');
    }
}
