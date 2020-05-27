<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Tin_Tuc;
use App\Loai_Tin_Tuc;


class TinTucController extends Controller
{
    public function getTinTuc() {
        $tintuc = Tin_Tuc::where('trang_thai', 1)->paginate(6);
        return view('tintuc.index',['tintuc' => $tintuc]);
    }

    public function getTinTucId($id) {
        $tintucmoi = Tin_Tuc::where('trang_thai', 1)->paginate(6);
        $tintuc = Tin_Tuc::where('id', $id)->first();
        return view('tintuc.chitiet', ['tintuc' => $tintuc, 'tintucmoi' => $tintucmoi]);
    }
}
