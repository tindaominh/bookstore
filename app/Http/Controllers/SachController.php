<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ThemSachRequest;
use Illuminate\Support\Facades\DB;


use App\Sach;

class SachController extends Controller
{
    public function index() {
        return view('sach.index');
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

    public function ThongKe() {

        $mang_mau = array('f56954', '00a65a', 'f39c12', '00c0ef', '3c8dbc', 'd2d6de', '371719', '994684', 'f906d6', '3b00fd','d1f60a', '00f92a');
        
        $thongkesachtheothang = DB::table('bs_don_hang')
        ->select(DB::raw('CONCAT(month(`ngay_dat`),"-" , year(`ngay_dat`)) as ngay, sum(`tong_tien`) as TT'))->groupBy('ngay')->get();

        return view('backend.sach.thong_ke',['mang_mau'=>$mang_mau, 'thongkesachtheothang'=>$thongkesachtheothang]);
    }
}
