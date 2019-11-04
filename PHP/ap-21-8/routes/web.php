<?php

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
    return view('welcome');
});

Route::get('/', 'Controller@hienThiTrangChu');
Route::get('/{id}', 'Controller@hienThiBaiViet');
// co the dung: Route::get('/bai-viet/{id}', 'Controller@hienThiBaiViet');
