<?php
/**
 * Created by PhpStorm.
 * User: flsun
 * Date: 2019/6/15
 * Time: 11:05
 */

//Route::get('/main',function(){
//   return 'hahahhhhh';
//});
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){
    Route::get('/login','EntryController@loginForm');
    //登录验证
    Route::post('/login','EntryController@login');
    //登录主页
    Route::get('/index','EntryController@index');
    //退出登录
    Route::get('/logout','EntryController@logout');
    //修改密码
    Route::get('/changePassword','MyController@passwordForm');
    Route::post('/changePassword','MyController@changePassword');
    //资源管理器的标签管理
    Route::resource('tag','tagController');
});