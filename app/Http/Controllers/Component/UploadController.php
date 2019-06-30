<?php

namespace App\Http\Controllers\Component;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{
    //
    public function uploader (Request $request) {
        $upload = $request->file;
        if($upload->isValid()){
            //用刚刚定义的attachment处理，前面是上一层有个年和月的目录
            $path = $upload -> store(date('ym'),'attachment');
            return ['valid'=>1,'message'=>asset('attachment/'.$path)];
        }
        return ['valid'=>0,'message'=>'上传失败，文件不能超过2M'];
    }
    public function filesLists () {
        return ['data'=>[],'page'=>''];
    }
}
