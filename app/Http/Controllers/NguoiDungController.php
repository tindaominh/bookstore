<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Sach;
use Cart;

class NguoiDungController extends Controller
{
    public function getDangNhap() {
        return view('nguoidung.dangnhap');
    }

    public function ThongTinGioHang() {
        // return back();
        return view('nguoidung.giohang');
    }

    public function ThemVaoGioHang($id) {
        $sach = Sach::where('id', $id)->first();
		
		Cart::add($sach->id, $sach->ten_sach, 1, $sach->don_gia, ['hinh' => $sach->hinh]);
		return back();
    }

    public function CapNhatGioHang(Request $request){
        $rowId = $request->txtRowID;
        $qTy = $request->txtSoLuong;
        Cart::update($rowId, $qTy);
        return redirect('nguoi-dung/gio-hang/thong-tin-gio-hang');
    }
}
