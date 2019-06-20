<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AdminPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class MyController extends Controller
{
    //修改密码
    public function passwordForm(){
        return view('admin.my.passwordForm');
    }
    public function changePassword(AdminPost $request){
        $model = Auth::guard('admin')->user();
        $model->password = bcrypt($request['password']);
        $model->save();
        flash()->overlay('修改密码成功','友情提示','关闭');
        return redirect()->back();
    }
}
