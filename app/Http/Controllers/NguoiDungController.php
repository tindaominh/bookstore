<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NguoiDungRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailNguoiDung;

use Carbon\Carbon;

use App\Sach;
use App\Nguoi_Dung;
use Cart;
use Hash;

class NguoiDungController extends Controller
{
    public function index(Request $request)
    {
        $users = Nguoi_Dung::orderBy('id','DESC')->paginate(5);
        return view('users.index',compact('users'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'tai_khoan' => 'required',
            'email' => 'required|email|unique:users,email',
            'mat_khau' => 'required|same:confirm-password',
        ]);

        $input = $request->all(); //khai bao tat ca cac truong trong csdl o user.php fillable
        $input['mat_khau'] = Hash::make($input['mat_khau']); //ma hoa password

        //upload avatar len csdl
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $file_extension = $file->getClientOriginalExtension(); //lay duoi file
            if($file_extension == 'png' || $file_extension == 'jpg' || $file_extension == 'jpeg'){

            }
            else
                return redirect()->back()->with('errror', 'Hệ thống chưa hỗ trợ định dạng file mới upload!');
            $file_name = $file->getClientOriginalName();
            $random_file_name = str_random(4).'_'.$file_name;
            while(file_exists('upload/avatar/'.$random_file_name)){
                $random_file_name = str_random(4).'_'.$file_name; 
            }
            $file->move('upload/avatar',$random_file_name);
            $input['avatar'] = 'upload/avatar/'.$random_file_name;
        }
        else $input['avatar']='';


        $user = Nguoi_Dung::create($input);


        return redirect()->route('users.index')
                        ->with('success','User created successfully'); //xuat thong bao ra ngoai man hinh
    }

    public function show($id)
    {
        $user = Nguoi_Dung::find($id);
        return view('users.show', compact('user'));

    }

    public function update(Request $request)
    {
        $user = Nguoi_Dung::findOrFail($request->id_user);
        $this->validate($request, [
            'tai_khoan' => 'required',
            'email' => 'required|email|unique:users,email,'.$request->id_user,
            'mat_khau' => 'same:confirm-password',
        ]);


        $input = $request->all();
        if(!empty($input['mat_khau'])){ 
            $input['mat_khau'] = Hash::make($input['mat_khau']);
        }else{
            $input = array_except($input,array('mat_khau'));    
        }

        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $file_extension = $file->getClientOriginalExtension(); //lay duoi file
            if($file_extension == 'png' || $file_extension == 'jpg' || $file_extension == 'jpeg'){

            }
            else
                return redirect()->back()->with('errror', 'Hệ thống chưa hỗ trợ định dạng file mới upload!');
            $file_name = $file->getClientOriginalName();
            $random_file_name = str_random(4).'_'.$file_name;
            while(file_exists('upload/avatar/'.$random_file_name)){
                $random_file_name = str_random(4).'_'.$file_name; 
            }
            $file->move('upload/avatar',$random_file_name);
            $input['avatar'] = 'upload/avatar/'.$random_file_name;
        }
        
        else $input['avatar']= $user->avatar;
        
        $user->update($input);
        

        return redirect()->route('users.index')
                        ->with('success','User updated successfully');
    }

    public function getDangNhap() {
        return view('nguoidung.dangnhap');
    }

    public function ThongTinGioHang() {
        // return back();
        return view('nguoidung.giohang');
    }

    public function ThemVaoGioHangChiTiet(Request $request, $id) {
        $sach = Sach::where('id', $id)->first();
		if($sach == null){
            echo json_encode(array('n' => "0"));
        }else {
            Cart::add($id, $sach->ten_sach, $request->sl, $sach->don_gia, ['hinh' => $sach->hinh]);
            echo json_encode(array('n' => "1"));
        }
    }

    public function ThemVaoGioHang($id) {
        $sach = Sach::where('id', $id)->first();
        Cart::add($id, $sach->ten_sach, 1, $sach->don_gia, ['hinh' => $sach->hinh]);
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
            
            

            $data = array();
            foreach (Cart::content() as $item) {
                $data[] = [
                    'id_don_hang' => $id,
                    'id_sach'     => $item->id,
                    'so_luong'    => $item->qty,
                    'don_gia'     => $item->price,
                    'ten_sach'    => $item->name,
                    // 'thanh_tien'   => str_replace(',', '', Cart::subtotal()), 
                    'thanh_tien'  => $item->qty * $item->price,
                    'created_at'  => date('Y-m-d H:m:s'),
                    'updated_at'  => date('Y-m-d H:m:s'),
                    'ho_ten'      => $request->ho_ten,
                    'dia_chi'     => $request->dia_chi,
                    'dien_thoai'  => $request->dien_thoai,
                    'email'       => $request->email,
                    'ma_don_hang' => $request->ma_don_hang,
                    'tong_tien'   => str_replace(',', '', Cart::subtotal()),
                ];
            }

            
            Mail::to($request->email)->send(new SendMailNguoiDung($data));

            Cart::destroy();
            
            return view('nguoidung.thanhcong');
           
        }
    }

}
