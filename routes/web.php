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

// Route::get('/', function () {
//     return redirect('/home');
// });

// Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','NguoiDungController');
});

Route::resource('sach', 'SachController');



Route::group(['middleware' =>'locale'], function() {
    Route::get('thay-doi-ngon-ngu/{language}','TrangChuController@ThayDoiNgonNgu')->name('thaydoingonngu');

    Route::get('/', 'TrangChuController@index')->name('trangchu');


    Route::prefix('contact')->group(function() {
        Route::get('','ContactController@index')->name('contact.index');
    });

    Route::prefix('nguoi-dung')->group(function() {
        Route::get('dang-nhap','NguoiDungController@getDangNhap')->name('nguoidung.dangnhap');
        Route::get('gio-hang/thong-tin-gio-hang','NguoiDungController@ThongTinGioHang')->name('nguoidung.giohang');
        Route::post('gio-hang/them-vao-gio-hang/{id}','NguoiDungController@ThemVaoGioHangChiTiet');
        Route::get('gio-hang/them-vao-gio-hang/{id}','NguoiDungController@ThemVaoGioHang')->name('nguoidung.them.giohang');
        Route::post('gio-hang/cap-nhat-gio-hang','NguoiDungController@CapNhatGioHang');
        Route::get('gio-hang/xoa-gio-hang/{id}','NguoiDungController@XoaGioHang')->name('nguoidung.xoa.giohang');
        Route::get('gio-hang/tien-hanh-dat-hang','NguoiDungController@TienHanhDatHang')->name('nguoidung.dathang');
        Route::post('gio-hang/tien-hanh-dat-hang','NguoiDungController@XacNhanDatHang')->name('nguoidung.dathang.xacnhan');
        Route::post('gio-hang/tien-hanh-dat-hang/thanh-cong','NguoiDungController@DatHang')->name('nguoidung.dathang.thanhcong');
    });

    Route::prefix('sach1')->group(function() {
        Route::get('danh-sach-sach','SachController@getSach')->name('sach');
        Route::get('chi-tiet-sach/{id}','SachController@getSachId')->name('sach.chitiet');
        Route::get('tim-kiem', 'TrangChuController@getTimKiem')->name('timkiem');
    });

    Route::prefix('binh-luan')->group(function() {
        Route::get('danh-sach','BinhLuanController@getBinhLuan')->name('binhluan');
        Route::get('y-kien-khach-hang','BinhLuanController@getThemYKien')->name('ykienkhachhang');
        Route::post('y-kien-khach-hang','BinhLuanController@postThemYKien')->name('post.ykienkhachhang');
        Route::get('tim-kiem', 'BinhLuanController@getTimKiem')->name('timkiem');
    });

    Route::prefix('tin-tuc')->group(function() {
        Route::get('','TinTucController@getTinTuc')->name('tintuc');
        Route::get('/chi-tiet/{id}','TinTucController@getTinTucId')->name('tintuc.chitiet');
        Route::get('tim-kiem', 'TinTucController@getTimKiem')->name('timkiem');
    });
});



//admin
Route::get('admin/logout', 'UserController@getLogout');
Route::group(['prefix'=>'admin', 'middleware' => 'auth'], function() {
    // Route::get('', 'UserController@postLogin');
    Route::prefix('sach')->group(function() {
        Route::get('them-sach','SachController@getThemSach')->name('admin.sach');
        Route::post('them-sach','SachController@postThemSach')->name('admin.sach.them');
    });
});

Route::get('/lien-he', 'LienHeController@index')->name('lienhe');

Route::get('/home', 'HomeController@index')->name('home');


Route::get('thong-ke','DonHangController@ThongKe')->name('admin.sach.thongke');