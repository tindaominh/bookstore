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
            Cart::add($id, $sach->ten_sach, 1, $price, ['hinh' => $sach->hinh]);
        }else {
            Cart::add($id, $sach->ten_sach, 1, $sach->don_gia, ['hinh' => $sach->hinh]);
        }
		return back();
    }

    public function CapNhatGioHang(Request $request){
        $rowId = $request->txtRowID;
        $qTy = $request->txtSoLuong;
        Cart::update($rowId, $qTy);
        return redirect('nguoi-dung/gio-hang/thong-tin-gio-hang');
    }

    public function XoaGioHang($id) {
        Cart::remove($id); 
        return redirect()->back()->with('success','Xóa thành công');
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
            'ma_don_hang' => rand(100000,999999),
        ];
        return view('nguoidung.xacnhan',['data' => $data]);
    }

    public function DatHang(Request $request) {
        if($request->input('edit')) {
            return redirect()->back()->withInput();
        }
        if($request->input('dat_hang')) {

            $don_hang = new Don_Hang;
            $don_hang['ma_don_hang'] = $request->ma_don_hang;
            $don_hang['tong_tien'] = $request->tong_tien;
            $don_hang['ngay_dat'] = $request->ngay_dat;
            $don_hang['id_nguoi_dung'] =   1;
            $don_hang['ho_ten_nguoi_nhan'] = $request->ho_ten_nguoi_nhan;
            $don_hang['email_nguoi_nhan'] = $request->email;
            $don_hang['so_dien_thoai_nguoi_nhan'] = $request->dien_thoai;
            $don_hang['trang_thai'] = 1;
            $don_hang['dia_chi_nguoi_nhan'] = $request->dia_chi;
            $don_hang->save();

          
            $chi_tiet_don_hang = new Chi_Tiet_Don_Hang;
            $chi_tiet_don_hang['id_don_hang'] = $request->id_sach;
            $chi_tiet_don_hang['id_sach'] = $request->id_sach;
            $chi_tiet_don_hang['so_luong'] = $request->so_luong;
            $chi_tiet_don_hang['don_gia'] = $request->don_gia;
            $chi_tiet_don_hang['thanh_tien'] = $request->thanh_tien;
            $chi_tiet_don_hang->save();
            
            Cart::destroy();

            return view('nguoidung.thanhcong');
           
        }
    }
}
