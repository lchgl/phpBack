<?php



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['namespace'=>'api'],function(){
    //显示标签
   Route::get('tags','ContentController@tags');
   //获取课程
    Route::get('lesson/{tid}','ContentController@lesson');
    //获取推荐课程
    Route::get('commendLesson/{row}','ContentController@commendLesson');
    //热门课程
    Route::get('hotLesson/{row}','ContentController@hotLesson');
    //视频列表
    Route::get('videos/{lessonId}','ContentController@videos');
});
