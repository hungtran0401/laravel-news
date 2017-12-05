<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiTin extends Model
{
    protected $table = 'loaitin';
    protected $fillable = ['Ten','TenKhongDau','idTheLoai','id'];
}
