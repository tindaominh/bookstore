<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DonHangController extends Controller
{
    public function ThongKe() {

        $mang_mau = array('f56954', '00a65a', 'f39c12', '00c0ef', '3c8dbc', 'd2d6de', '371719', '994684', 'f906d6', '3b00fd','d1f60a', '00f92a');
        
        $years = DB::table('bs_don_hang')->select(DB::raw('CONCAT(year(`created_at`)) as year'))->groupBy('year')->get();

        $thongkesachtheothang = DB::table('bs_don_hang')
        ->select(DB::raw('CONCAT(month(`created_at`),"-" , year(`created_at`)) as ngay, sum(`tong_tien`) as TT'))
        ->groupBy('ngay')->orderBy('created_at','ASC')
        ->get();
    
        $thongkesachtheoquy = DB::table('bs_don_hang')
        ->select(DB::raw('CONCAT(month(`ngay_dat`),"-" , year(`ngay_dat`)) as quy, sum(`tong_tien`) as TT'))
        // ->where()
        ->groupBy('quy')->orderBy('ngay_dat','ASC')->get();

        $thongkesachtheonam = DB::table('bs_don_hang')
        ->select(DB::raw('CONCAT(year(`created_at`)) as year, sum(`tong_tien`) as TT'))->groupBy('year')->orderBy('year','ASC')->get();

        return view('backend.sach.thong_ke',['mang_mau'             =>$mang_mau, 
                                             'years'                 =>$years,
                                             'thongkesachtheothang' =>$thongkesachtheothang, 
                                             'thongkesachtheoquy'   =>$thongkesachtheoquy,
                                             'thongkesachtheonam'   =>$thongkesachtheonam]);
    }
}
