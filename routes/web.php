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
    return view('index');
});

Route::prefix('product')->group(function() {
    Route::get('','BooksController@index')->name('book.index');
});

Route::prefix('contact')->group(function() {
    Route::get('','ContactController@index')->name('contact.index');
});