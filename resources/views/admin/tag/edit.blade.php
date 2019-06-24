@extends('admin.layout.master')
@section('content')
    <!-- TAB NAVIGATION -->
    <ul class="nav nav-tabs">
        <li><a href="/admin/tag">标签列表</a></li>
        <li class="active"><a href="#">修改标签</a></li>
    </ul>
    <!-- TAB NAVIGATION -->
    <form action="/admin/tag/{{$model['id']}}" method="post" class="form-horizontal">
        {{csrf_field()}}
        {{--伪造表单提交--}}
        {{method_field('PUT')}}
        <div class="panel panel-default">
            <div class="panel-heading" style="line-height: 48px;background: #ccc;padding: 0 15px;">
                <div class="panel-title">
                    标签管理
                </div>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">标签</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" required value="{{$model['name']}}">
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-primary">保存数据</button>
    </form>
@endsection