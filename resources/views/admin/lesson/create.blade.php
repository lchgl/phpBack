@extends('admin.layout.master')
@section('content')
    <!-- TAB NAVIGATION -->
    <ul class="nav nav-tabs">
        <style>
            .panel-body{
                padding: 20px;
                border: 1px solid #666;
            }
        </style>
        <li><a href="/admin/lesson">课程列表</a></li>
        <li class="active"><a href="/admin/tag/create">新增课程</a></li>
    </ul>
    <!-- TAB NAVIGATION -->
    <form action="/admin/lesson" method="post" class="form-horizontal">
        {{csrf_field()}}
        <div class="panel panel-default">
            <div class="panel-heading" style="line-height: 48px;background: #ccc;padding: 0 15px;">
                <div class="panel-title">
                    课程管理
                </div>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">课程</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="title" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">介绍</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="introduce" row="5" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">预览图片</label>
                    <div class="col-sm-10">
                        <input type="file"  class="form-control" id="imgFile" onchange="PreviewImage(this,'imgHeadPhoto','divPreview');" size="20" />
                        <input type="text"  class="form-control" id="imgUrl" name="preview" >
                    </div>
                    <div>
                        <img id="imgHeadPhoto" src="noperson.jpg" style="width: 160px; height: 170px; border: solid 1px #d2e2e2;"
                             alt="" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">推荐</label>
                    <div class="col-sm-10">
                        <label class="radio-inline">
                            <input type="radio"  name="iscommend" value="1">是
                        </label>
                        <label class="radio-inline">
                            <input type="radio"  name="iscommend" value="0" checked>否
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">热门</label>
                    <div class="col-sm-10">
                        <label class="radio-inline">
                            <input type="radio"  name="ishot" value="1">是
                        </label>
                        <label class="radio-inline">
                            <input type="radio"  name="ishot" value="0" checked>否
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">点击数</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="click" required value="0">
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-default" id="app">
            <div class="panel-heading" style="line-height: 48px;background: #ccc;padding: 0 15px;">
                <div class="panel-title">
                    视频管理
                </div>
            </div>
            <div class="panel-body">
                <div class="panel panel-default" v-for="(item,index) in videos">
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">视频标题</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="title" v-model="item.title" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">视频地址</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <input type="text" class="form-control" v-model="item.path">
                                <span class="input-group-btn">
                                        <button class="btn btn-default" type="button" :id="v.id">上传视频</button>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success" @click.prevent="del(index)">删除视频</button>
                </div>
            </div>
            <div class="panel-body">
                <button class="btn btn-primary" @click.prevent="add">添加视频</button>
            </div>
            <textarea name="videos">
                @{{ videos }}
            </textarea>
        </div>
        <button class="btn btn-primary">保存数据</button>
    </form>
@endsection
@section('footScript')
    <script>
        new Vue({
            el:'#app',
            data:{
                videos:[{title:'',path:''}]
            },
            methods:{
                add:function () {
                    this.videos.push({title:'',path:''})
                },
                del:function(k){
                    this.videos.splice(k,1)
                }
            }
        });
        //js本地图片预览，兼容ie[6-9]、火狐、Chrome17+、Opera11+、Maxthon3
        function PreviewImage(fileObj, imgPreviewId, divPreviewId) {
            uploadImg();
            var allowExtention = ".jpg,.bmp,.gif,.png"; //允许上传文件的后缀名document.getElementById("hfAllowPicSuffix").value;
            var extention = fileObj.value.substring(fileObj.value.lastIndexOf(".") + 1).toLowerCase();
            var browserVersion = window.navigator.userAgent.toUpperCase();
            if (allowExtention.indexOf(extention) > -1) {
                if (fileObj.files) {//HTML5实现预览，兼容chrome、火狐7+等
                    if (window.FileReader) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            document.getElementById(imgPreviewId).setAttribute("src", e.target.result);
                        }
                        reader.readAsDataURL(fileObj.files[0]);
                    } else if (browserVersion.indexOf("SAFARI") > -1) {
                        alert("不支持Safari6.0以下浏览器的图片预览!");
                    }
                } else if (browserVersion.indexOf("MSIE") > -1) {
                    if (browserVersion.indexOf("MSIE 6") > -1) {//ie6
                        document.getElementById(imgPreviewId).setAttribute("src", fileObj.value);
                    } else {//ie[7-9]
                        fileObj.select();
                        if (browserVersion.indexOf("MSIE 9") > -1)
                            fileObj.blur(); //不加上document.selection.createRange().text在ie9会拒绝访问
                        var newPreview = document.getElementById(divPreviewId + "New");
                        if (newPreview == null) {
                            newPreview = document.createElement("div");
                            newPreview.setAttribute("id", divPreviewId + "New");
                            newPreview.style.width = document.getElementById(imgPreviewId).width + "px";
                            newPreview.style.height = document.getElementById(imgPreviewId).height + "px";
                            newPreview.style.border = "solid 1px #d2e2e2";
                        }
                        newPreview.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod='scale',src='" + document.selection.createRange().text + "')";
                        var tempDivPreview = document.getElementById(divPreviewId);
                        tempDivPreview.parentNode.insertBefore(newPreview, tempDivPreview);
                        tempDivPreview.style.display = "none";
                    }
                } else if (browserVersion.indexOf("FIREFOX") > -1) {//firefox
                    var firefoxVersion = parseFloat(browserVersion.toLowerCase().match(/firefox\/([\d.]+)/)[1]);
                    if (firefoxVersion < 7) {//firefox7以下版本
                        document.getElementById(imgPreviewId).setAttribute("src", fileObj.files[0].getAsDataURL());
                    } else {//firefox7.0+
                        document.getElementById(imgPreviewId).setAttribute("src", window.URL.createObjectURL(fileObj.files[0]));
                    }
                } else {
                    document.getElementById(imgPreviewId).setAttribute("src", fileObj.value);
                }
            } else {
                alert("仅支持" + allowExtention + "为后缀名的文件!");
                fileObj.value = ""; //清空选中文件
                if (browserVersion.indexOf("MSIE") > -1) {
                    fileObj.select();
                    document.selection.clear();
                }
                fileObj.outerHTML = fileObj.outerHTML;
            }
            return fileObj.value;    //返回路径
        }
        function uploadImg(){
            var file_obj = document.getElementById('imgFile').files[0];
            var fd = new FormData();
            fd.append('file', file_obj);
            $.ajax({
                url:'/component/uploader',
                type:'POST',
                data:fd,
                processData:false,  //tell jQuery not to process the data
                contentType: false,  //tell jQuery not to set contentType
                //这儿的三个参数其实就是XMLHttpRequest里面带的信息。
                success:function (arg,a1,a2) {
                    // console.log(arg);
                    // console.log(a1);
                    // console.log(a2);
                    $('#imgUrl').val(arg.message);
                },
                error:function(err){
                    console.log(err)
                }
            })
        }
        function upload(field) {
            require(['oss'], function (oss) {
                var id = '#' + field.id;
                var uploader = oss.upload({
                    //获取签名
                    serverUrl: '/component/oss?',
                    //上传目录
                    dir: 'hdphp/',
                    //按钮元素
                    pick: id,
                    accept: {
                        title: 'video',
                        extensions: 'mp4',
                        mimeTypes: 'video/mp4'
                    }
                });
                //上传开始
                uploader.on('startUpload', function () {
//                    console.log('开始上传');
                });
                //上传成功
                uploader.on('uploadSuccess', function (file, response) {
                    field.path = oss.oss.host + '/' + oss.oss.object_name;
//                    console.log('上传完成,文件名:' + oss.oss.host + '/' + oss.oss.object_name);
                });
                //上传中
                uploader.on('uploadProgress', function (file, percentage) {
                    $("#percentage" + field.id).show().find('b').text(parseInt(percentage * 100) + '%');
//                    console.log('上传中,进度:' + parseInt(percentage * 100));
                });
                //上传结束
                uploader.on('uploadComplete', function () {
                    $("#percentage" + field.id).hide();
//                    console.log('上传结束');
                })
            })
        }
    </script>
@endsection