<?php

namespace App\Http\Controllers\Api;

use App\Model\Lesson;
use App\Model\Tag;
use App\Model\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ContentController extends CommonController
{
    //Tag Model 获取数据
    public function tags(){
        return $this->response(Tag::get());
    }
    //获取lesson
    public function lesson($tid){
        if($tid){
            //利用join实现关联表信息的查询
        $data = DB::table('lessons')
                ->join('tag_lessons','lesson_id','=','tag_lessons.lesson_id')
                ->where('tag_id',$tid)
                ->get();
            //获取对应课程
//            $data = Lesson::where('id',$tid)->get();
        }else{
            //获取所有课程
            $data = Lesson::get();
        }
        return $this->response($data);
    }
    //获取推荐课程，条数row
    public function commendLesson($row){
        return $this->response(Lesson::where('iscommend',1)->limit($row)->get());
    }
    //获取热门课程，条数row
    public function hotLesson($row){
        return $this->response(Lesson::where('ishot',1)->limit($row)->get());
    }
    //获取视频
    public function videos($lessonId){
        $data = Video::where('lesson_id',$lessonId)->get();
        return $this->response($data);
    }
}
