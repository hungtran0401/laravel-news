<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class theloai extends Model
{
    protected $table = 'theloai';
    protected $fillable = ['Ten','TenKhongDau','parent_id','cate_order','cate_keywords','cate_des'];
}
