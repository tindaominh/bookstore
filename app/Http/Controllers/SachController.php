<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SachController extends Controller
{
    public function index() {
        return view('sach.index');
    }
}
