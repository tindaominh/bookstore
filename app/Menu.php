<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'bs_menu';
    protected $fillable = [
        'id',
        'tieu_de',
        'alias',
        'trang_thai',
        'menu_cha',
    ];
}
