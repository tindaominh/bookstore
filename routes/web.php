<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', 'HomeController@index')->name('trangchu');

Route::prefix('sach')->group(function() {
    Route::get('','SachController@index')->name('sach.index');
});

Route::prefix('contact')->group(function() {
    Route::get('','ContactController@index')->name('contact.index');
});

Route::prefix('nguoi-dung')->group(function() {
    Route::get('dang-nhap','NguoiDungController@getDangNhap')->name('nguoidung.dangnhap');
    Route::get('gio-hang/thong-tin-gio-hang','NguoiDungController@ThongTinGioHang')->name('nguoidung.giohang');
    Route::get('gio-hang/them-vao-gio-hang/{id}','NguoiDungController@ThemVaoGioHang')->name('nguoidung.them.giohang');
    Route::post('gio-hang/cap-nhat-gio-hang','NguoiDungController@CapNhatGioHang');
    Route::get('gio-hang/tien-hanh-dat-hang','NguoiDungController@TienHanhDatHang')->name('nguoidung.dathang');
    Route::post('gio-hang/tien-hanh-dat-hang','NguoiDungController@XacNhanDatHang')->name('nguoidung.dathang.xacnhan');
});

//admin
Route::group(['prefix'=>'admin'], function() {
    Route::prefix('sach')->group(function() {
        Route::get('them-sach','SachController@getThemSach')->name('admin.sach');
        Route::post('them-sach','SachController@postThemSach')->name('admin.sach.them');
    });
});


