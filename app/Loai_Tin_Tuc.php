<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loai_Tin_Tuc extends Model
{
    protected $table = 'bsloai_tin_tuc';
    protected $fillable = [
        'id',
        'ten_loai_tin',
        'alias',
    ];

    // public function tin_tuc(){
    //     return $this->hasOne('App\Tin_Tuc');
    // }
}
