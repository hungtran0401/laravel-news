<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
    protected $table = 'tintuc';
    protected $fillable = ['TieuDe','TieuDeKhongDau','TomTat','NoiDung','Hinh','NoiBat','idLoaiTin'];
}
