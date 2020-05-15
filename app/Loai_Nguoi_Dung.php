<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loai_Nguoi_Dung extends Model
{
    protected $table = 'bs_loai_nguoi_dung';
    protected $fillable = [
        'id',
        'ten_loai_nguoi_dung',
    ];

    // public function nguoi_dung(){
    //     return $this->belongsTo('App\Nguoi_Dung');
    // }
}
