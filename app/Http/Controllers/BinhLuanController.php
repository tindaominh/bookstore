<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\BinhLuanRequest;
use App\Binh_Luan;

class BinhLuanController extends Controller
{
    public function getBinhLuan() {
        $binhluan= Binh_Luan::paginate(6);
        return view('binhluan.index',['binhluan'=>$binhluan]);
    }

    public function getThemYKien() {
        return view('binhluan.ykienkhachhang');
    }

    public function postThemYKien(BinhLuanRequest $request) {
        $validated = $request->validated();

        $data= new Binh_Luan;
        if($request->hasFile('hinh')){
            $hinh = $request->file('hinh');
            $name = $hinh->getClientOriginalName();
           if($request->file('hinh')->isValid()) {
               $hinh->move('public/images/hinh_binh_luan/',$name);
            }
            $data['hinh'] = $name;
        }

        
        $data['email']=$request->email;
        $data['noi_dung']=$request->noi_dung;
        $data['trang_thai']=$request->trang_thai;

        $data->save();
        
        return back()->with('success','Thêm thành công');
    }

    public function getTimKiem(Request $request) {
        $chuoi = trim($request->tim_kiem);
        
        if (strlen($chuoi)==0) 
            return redirect()->back();
        
        $binhluan= Binh_Luan::where('noi_dung','like', '%'.$chuoi.'%')->paginate(6);

        return view('tintuc.index',['binhluan' => $binhluan]);
    }
}
