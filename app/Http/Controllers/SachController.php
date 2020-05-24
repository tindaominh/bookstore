<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreSach;
use Illuminate\Support\Str;
use App\Sach;

class SachController extends Controller
{
    public function index(Request $request) {
        $books = Sach::orderBy('id','ASC')->get();
        return view('sach.index',compact('books'))
            ->with('i');
    }

    public function create()
    {
        return view('sach.create');
    }

    public function store(StoreSach $request){
        $validated = $request->validated();
        if($request->hasFile('hinh')){
            $file = $request->file('hinh');
            $file_extension = $file->getClientOriginalExtension(); //lay duoi file
            if($file_extension == 'png' || $file_extension == 'jpg' || $file_extension == 'jpeg'){

            }
            else
                return redirect()->back()->with('errror', 'Hệ thống chưa hỗ trợ định dạng file mới upload!');
            $file_name = $file->getClientOriginalName();
            $random_file_name = Str::random(4).'_'.$file_name;
            while(file_exists('upload/images/'.$random_file_name)){
                $random_file_name = Str::random(4).'_'.$file_name; 
            }
            $file->move('upload/images/', $random_file_name);
            $input['hinh'] = $random_file_name;
        }
        else $input['hinh']='';

        //create sach
        $sach = new Sach;
        $sach->ten_sach = $request->ten_sach;
        $sach->hinh = $input['hinh'];
        $sach->id_loai_sach = $request->id_loai_sach;
        $sach->id_nha_xuat_ban = $request->id_nha_xuat_ban;
        $sach->id_tac_gia = $request->id_tac_gia;
        $sach->so_trang = $request->so_trang;
        $sach->ngay_xuat_ban = $request->ngay_xuat_ban;
        $sach->kich_thuoc = $request->kich_thuoc;
        $sach->gioi_thieu = $request->gioi_thieu;
        $sach->trong_luong = $request->trong_luong;
        $sach->don_gia = $request->don_gia;
        $sach->gia_bia = $request->gia_bia;
        $sach->trang_thai = isset($request->trang_thai)?$request->trang_thai:false;
        $sach->noi_bat = isset($request->noi_bat)?$request->noi_bat:false;
        $sach->save();

        return redirect()->route('sach.index')
                        ->with('success','Sach created successfully');
    }

    public function show($id)
    {
        $book = Sach::find($id);
        return view('sach.show', compact('book'));
    }

    public function edit($id)
    {
        $book = Sach::find($id);
        return view('sach.edit', ['book' => $book]);
    }

    public function update(Request $request, $id)
    {
        $book = Sach::findOrFail($id);
        $book->trang_thai = isset($request->trang_thai)?$request->trang_thai:false;
        $book->noi_bat = isset($request->noi_bat)?$request->noi_bat:false;

        $input = $request->all();

        if($request->hasFile('hinh')){
            $file = $request->file('hinh');
            $file_extension = $file->getClientOriginalExtension(); //lay duoi file
            if($file_extension == 'png' || $file_extension == 'jpg' || $file_extension == 'jpeg'){

            }
            else
                return redirect()->back()->with('errror', 'Hệ thống chưa hỗ trợ định dạng file mới upload!');
            $file_name = $file->getClientOriginalName();
            $random_file_name = Str::random(4).'_'.$file_name;
            while(file_exists('upload/images/'.$random_file_name)){
                $random_file_name = Str::random(4).'_'.$file_name; 
            }
            $file->move('upload/images/', $random_file_name);
            $input['hinh'] = $random_file_name;
        }
        else $input['hinh'] = $book->hinh;

        $book->update($input);

        return redirect()->route('sach.index')
                        ->with('success','Book updated successfully');
    }

    public function destroy(Request $request)
    {
        $book = Sach::findOrFail($request->id_book);
        $book->delete();
        return redirect()->route('sach.index')
                        ->with('success','Book deleted successfully');
    }

    public function getThemSach() {
        return view('backend.sach.themsach');
    }

    
}
