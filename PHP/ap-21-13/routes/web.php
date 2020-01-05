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
Route::resource('/users', 'UserController');
Route::resource('/posts', 'PostController');

// Route::get('get', function(){
// $data = DB::table('users')->get();
// var_dump($data);
// });

Route::get('where', function(){
    $data = DB::table('users')->where('id','=', 3)->first();
    var_dump($data);
});

Route::get('select', function(){
    $data = DB::table('users')->select(['id','name'])->get();
});