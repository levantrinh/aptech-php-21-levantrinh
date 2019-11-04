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

// Route::get('/hien-thi', 'UserController@hienThiTatCa');

Route::get('/hien-thi-tat-ca', 'UserController@hienThiTatCa');

Route::get('/users/{id}', 'UserController@hienThiMot');

Route::get('/hien-thi-het', 'UserController@hienThiHet');

Route::get('/trinh', 'UserController@trinhHienThi');
