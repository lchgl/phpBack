@extends('admin.layout.master')
@section('content')
    <!-- TAB NAVIGATION -->
    <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="#tab1">标签列表</a></li>
        <li><a href="/admin/tag/create">新增标签</a></li>
    </ul>
    <!-- TAB NAVIGATION -->
    <form action="" method="post" class="form-horizontal" role="form">
        <div class="panel panel-default">
            <div class="panel-title" style="line-height: 48px;background: #ccc;padding: 0 15px;">
                资源管理tag
            </div>
            <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th width="100">编号</th>
                        <th>标签</th>
                        <th width="120">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $d)
                            <tr>
                                <td>{{$d['id']}}</td>
                                <td>{{$d['name']}}</td>
                                <td>
                                    <div class="btn-group btn-group-sm">
                                        <a href="/admin/create/{{$d['id']}}"  class="btn btn-default">编制</a>
                                        <a href="javascript:;" onclick="del({{$d['id']}})" class="btn btn-default">删除</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </form>
@endsection
@section('footScript')
    <script>
            function del(id){
                var flag = confirm('您确定要删除？');
                if(!flag){
                    return false;
                }
                $.ajax({
                    url:'/admin/tag/' + id,
                    method:'DELETE',
                    success:function(data){
                        alert(data.message);
                        location.reload()
                    }
                })
            }
    </script>
@endsection