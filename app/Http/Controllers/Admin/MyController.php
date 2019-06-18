<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MyController extends Controller
{
    //修改密码
    public function passwordForm(){
        return view('admin.my.passwordForm');
    }
    public function changePassword(){

    }
}
