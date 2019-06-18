<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class EntryController extends Controller
{
    public function __construct(){
        $this->middleware('admin.auth')->except(['loginForm','login']);
    }
    //登录
    public function loginForm(){
        if(!Auth::guard('admin')->check()){
            return view('admin/entry/login');
        }else{
            return   redirect('/admin/index');
        }
    }
    //登录验证
    public function login(Request $requset){
        $status = Auth::guard('admin')->attempt([
           'username'=>$requset->input('username'),
            'password'=>$requset->input('password'),
        ]);
        if($status){
            return redirect('/admin/index');
        }
        return redirect('/admin/login')->with('error','用户名或密码错误');
    }
    //登录主页
    public function index(){
        return view('admin/entry/index');
    }
    //退出
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
}
