<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
