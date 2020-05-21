<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NguoiDungRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

use Carbon\Carbon;

use App\Sach;
use Cart;
use App\Don_Hang;
use App\Chi_Tiet_Don_Hang;
use App\Mail\SendMailNguoiDung;


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
            'ho_kh'      => $request->ho_kh,
            'ten_kh'     => $request->ten_kh,
            'dia_chi'    => $request->dia_chi,
            'dien_thoai' => $request->dien_thoai,
            'email'      => $request->email,
            'ma_don_hang'=> rand(1,1000),
        ];
        
        return view('nguoidung.xacnhan',['data' => $data]);
    }

    public function DatHang(Request $request) {
        if($request->input('edit')) {
            return redirect()->back()->withInput();
        }
        if($request->input('dat_hang')) {

            $id = DB::table('bs_nguoi_dung')->insertGetId(
                [
                    'ho_ten'     => $request->ho_ten,
                    'dia_chi'    => $request->dia_chi,
                    'dien_thoai' => $request->dien_thoai,
                    'email'      => $request->email,
                    'diem_tich_luy' => 1,
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
            ]);
    
            $id = DB::table('bs_don_hang')->insertGetId(
                [
                    'ma_don_hang'           => $request->ma_don_hang,
                    'tong_tien'             => str_replace(',', '', Cart::total()), 
                    'ngay_dat'              => date('Y-m-d H:m:s'),
                    'id_nguoi_dung'         => $id,
                    'ho_ten_nguoi_nhan'     => $request->ho_ten,
                    'dia_chi_nguoi_nhan'    => $request->dia_chi,
                    'so_dien_thoai_nguoi_nhan' => $request->dien_thoai,
                    'email_nguoi_nhan'      => $request->email,
                    'trang_thai'            => 1,
                    'created_at'            => date('Y-m-d H:m:s'),
                    'updated_at'            => date('Y-m-d H:m:s'),
            ]);
    
            $dsMH = array();
            foreach (Cart::content() as $item) {
                $dsMH[] = [
                    'id_don_hang' => $id,
                    'id_sach'     => $item->id,
                    'so_luong'    => $item->qty,
                    'don_gia'     => $item->price,
                    // 'thanh_tien'   => str_replace(',', '', Cart::subtotal()), 
                    'thanh_tien'  => $item->qty * $item->price,
                    'created_at'  => date('Y-m-d H:m:s'),
                    'updated_at'  => date('Y-m-d H:m:s'),
                ];
            }
    
            DB::table('bs_chi_tiet_don_hang')->insert($dsMH);    
            
            // Cart::destroy();


            Mail::to($request->email)->send(new SendMailNguoiDung($dsMH));

            return view('nguoidung.thanhcong');
           
        }
    }

}
