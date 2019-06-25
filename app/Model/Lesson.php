<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    //不允许批量添加的数据
    protected $guarded = [];
}
