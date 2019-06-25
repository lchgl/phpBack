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
                        <input type="text" class="form-control" name="preview" required value="nopic.png">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">推荐</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="title" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">课程</label>
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
        <div class="panel panel-default">
            <div class="panel-heading" style="line-height: 48px;background: #ccc;padding: 0 15px;">
                <div class="panel-title">
                    视频管理
                </div>
            </div>
            <div class="panel-body">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">视频标题</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="title" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">视频地址</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="introduce" row="5" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <button class="btn btn-success">删除视频</button>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary">添加视频</button>
        </div>
        <button class="btn btn-primary">保存数据</button>
    </form>
@endsection