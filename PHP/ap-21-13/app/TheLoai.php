<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TheLoai extends Model
{
    //
    protected $table = "TheLoai";
    public function loaiTin()
    {
        return $this->hasMany('App\LoaiTin','idTheLoai','id');
    }

    public function tinTuc()
    {
        return $this->hasManyThrought('App\Tintuc','App\LoaiTin','idTheLoai','idLoaiTin','id');
    }
}
