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

Route::get('/home', 'HomeController@index');

Route::prefix('sach')->group(function() {
    Route::get('','SachController@index')->name('sach.index');
});

Route::prefix('contact')->group(function() {
    Route::get('','ContactController@index')->name('contact.index');
});