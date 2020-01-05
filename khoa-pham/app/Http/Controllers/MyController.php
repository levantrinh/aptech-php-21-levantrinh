<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
 public function getJson()
 {
    //  $array = ['Laravel','php','asp.net','html','javascript'];
    //  return response()->json($array);
     $khoahoc = ['khoa hoc'=>'laravel', 'giao vien'=>'khoa pham'];
     return response()->json($khoahoc);
 }
}
