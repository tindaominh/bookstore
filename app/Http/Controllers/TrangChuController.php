<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Slide_Banner;
use App\Tac_Gia;
use App\Sach;
use App\Loai_Sach;
use App\Tin_Tuc;

class TrangChuController extends Controller
{
    public function index() {
        $slides = Slide_Banner::where('trang_thai', 1)->get();
        $tac_gia = Tac_Gia::where('hinh','<>' ,null)->paginate(4);
        $sach = Sach::where('trang_thai', 1)->paginate(8);
        $sach1 = Sach::where('trang_thai', 1)->get();
        $sach2 = Sach::where('id_loai_sach',1)->paginate(6);
        $tin_tuc = Tin_Tuc::where('trang_thai', 1)->paginate(4);

        return view('index',['slides'   =>$slides, 
                             'tac_gia'  =>$tac_gia,
                             'sach'     =>$sach,
                             'sach1'    =>$sach1,
                             'sach2'    =>$sach2,
                             'tin_tuc'  =>$tin_tuc]);
    }

    public function ThayDoiNgonNgu($language) {
        \Session::put('locale', $language);
        return redirect()->back();
    }

    public function getTimKiem(Request $request) {
        $chuoi = trim($request->tim_kiem);
        
        if (strlen($chuoi)==0) 
            return redirect()->back();
        
        $sach= Sach::where('ten_sach','like', '%'.$chuoi.'%')->orderBy('id_loai_sach')->paginate(100);

        return view('sach1.tim_kiem',['sach' => $sach,]);
    }

}
