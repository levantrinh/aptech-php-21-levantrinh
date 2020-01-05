<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
    //
    protected $table = "TinTuc";
    public function loaiTin()
    {
        return $this->belongsTo('App\LoaiTin','idLoaiTin','id');
    }

    public function commnent()
    {
        return $this->hasMany('App\Commnent','idTinTuc','id');
    }
}
