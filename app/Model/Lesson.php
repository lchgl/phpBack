<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    //不允许批量添加的数据
    protected $guarded = [];
    //与视频模型的一对多关联
    public function videos(){
        return $this->hasMany(Video::class);
    }
}
