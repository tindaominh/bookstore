<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreSach;

use App\Sach;

class SachController extends Controller
{
    public function index(Request $request) {
        $users = Sach::orderBy('id','DESC')->paginate(10);
        return view('sach.index',compact('users'))
            ->with('i', ($request->input('page', 1) - 1) * 10);
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
            $random_file_name = str_random(4).'_'.$file_name;
            while(file_exists('upload/images/hinh_sach/'.$random_file_name)){
                $random_file_name = str_random(4).'_'.$file_name; 
            }
            $file->move('upload/images/hinh_sach',$random_file_name);
            $input['hinh'] = 'upload/images/hinh_sach/'.$random_file_name;
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

    public function getThemSach() {
        return view('backend.sach.themsach');
    }

    public function postThemSach(ThemSachRequest $request) {
        $validated = $request->validated();
        $name_hinh ='';
        if($request->hasFile('hinh_san_pham')){
            if($request->file('hinh_san_pham')->isValid()) {
                $file= $request->file('hinh_san_pham');
                $name= $file->getClientOriginalName();
                $file->move('public/images', $name);
                $name_hinh= $name;
            }
        }
        $data = new Sach;
        $data['ten_sach'] = $request->ten_sach;
        $data['id_tac_gia'] = $request->id_tac_gia;
        $data['gioi_thieu'] = $request->gioi_thieu;
        $data['doc_thu'] = $request->doc_thu;
        $data['id_loai_sach'] = $request->id_loai_sach;
        $data['id_nha_xuat_ban'] = $request->id_nha_xuat_ban;
        $data['so_trang'] = $request->so_trang;
        $data['ngay_xuat_ban'] = $request->ngay_xuat_ban;
        $data['kich_thuoc'] = $request->kich_thuoc;
        $data['sku'] = $request->sku;
        $data['trong_luong'] = $request->trong_luong;
        $data['trang_thai'] = $request->trang_thai;
        $data['hinh'] = $request->hinh;
        $data['don_gia'] = $request->don_gia;
        $data['gia_bia'] = $request->gia_bia;
        $data['giam_gia'] = $request->giam_gia;
        $data['noi_bat'] = $request->noi_bat;

        $data->save();
        return back()->with('success', 'Thêm thành công');
    }
}
