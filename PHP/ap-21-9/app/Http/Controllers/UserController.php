<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
//    public function hienThiTatCa(){
//        $users = DB::table('users')->get();
//        return $users;
//    }
public function hienThiTatCa()
{
    $users = DB::table('users')->get();
    return view('users', ['abc'=>$users]);

}

public function hienThiMot($id)
{
    $users = DB::table('users')->where('id', '=', $id)->get();
    return $users;
}

public function hienThiHet()
{
    $users = DB::table('users')->get();
    return $users;
}

public function trinhHienThi()
    {
        $users = DB::table('users')->select('*');
        $users = $users->get();

        
        return view('trinh');
    }
}
