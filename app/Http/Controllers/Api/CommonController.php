<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

abstract class CommonController extends Controller
{
    //abstract 抽象类
    public function response($data,$code = 200){
        return ['code'=>$code,'data'=>$data];
    }
}
