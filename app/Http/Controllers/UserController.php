<?php

namespace App\Http\Controllers;

use App\User;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
   
    public function postLogin(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required',
        ],[
            'email.required'=>'enter Email',
            'password.required'=>'enter Password'
        ]);
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect('admin/quan-tri');
        }else{
            return redirect('admin/login')->with('alert','Login failed');
        }
    }

    public function getLogout(Request $request){
        Auth::logout();
        $request->session()->forget('menus');
        $request->session()->forget('edit_delete');
        $request->session()->flush();
        return redirect('admin');
    }

    public function quan_tri(Request $request){
        echo 'ok';
    }
}