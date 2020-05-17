<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NguoiDungController extends Controller
{
    public function getDangNhap() {
        return view('nguoidung.dangnhap');
    }
}
