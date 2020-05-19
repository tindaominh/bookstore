<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NguoiDungRequest;

use Carbon\Carbon;

use App\Sach;
use Cart;
use App\Don_Hang;
use App\Chi_Tiet_Don_Hang;


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
		if($sach->don_gia == null){
            $price = "Liên hệ cửa hàng";
            Cart::add($sach->id, $sach->ten_sach, 1, $price, ['hinh' => $sach->hinh]);
        }else {
            Cart::add($sach->id, $sach->ten_sach, 1, $sach->don_gia, ['hinh' => $sach->hinh]);
        }
		return back();
    }

    public function CapNhatGioHang(Request $request){
        $rowId = $request->txtRowID;
        $qTy = $request->txtSoLuong;
        Cart::update($rowId, $qTy);
        return redirect('nguoi-dung/gio-hang/thong-tin-gio-hang');
    }

    public function TienHanhDatHang() {
        return view('nguoidung.dathang');
    }

    public function XacNhanDatHang(NguoiDungRequest $request) {
        $validated = $request->validated();
        $data = [
            'ho_kh' => $request->ho_kh,
            'ten_kh' => $request->ten_kh,
            'dia_chi' => $request->dia_chi,
            'dien_thoai' => $request->dien_thoai,
            'email' => $request->email,
            'ngay_dat' => Carbon::now('Asia/Ho_Chi_Minh'),
            // rand(100000,999999)
        ];
        return view('nguoidung.xacnhan',['data' => $data]);
    }
}
