<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide_Banner extends Model
{
    protected $table = 'bs_slide_banner';
    protected $fillable = [
        'id',
        'ten_slide',
        'hinh',
        'trang_thai',
    ];
}
