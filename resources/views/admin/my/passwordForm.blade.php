@extends('admin.layout.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card form" id="form5">
                <div class="card-header">
                    <h3>修改密码</h3>
                </div>
                <br>
                <form method="post">
                    <div class="form-group">
                        <label for="formGroupExampleInput">原密码</label>
                        <div class="input-group ">
                            <div class="input-group-addon"><i class="fa fa-user-o"></i></div>
                            <input type="text" class="form-control" name="origin_password" id="inlineFormInputGroup" placeholder="请输入原密码">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">新密码</label>
                        <div class="input-group ">
                            <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                            <input type="password" class="form-control" name="password" placeholder="请输入新密码" id="inlineFormInputGroup">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="icon-number">确认密码</label>
                        <div class="input-group ">
                            <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                            <input type="text" class="form-control" id="icon-number" name="conform_password" placeholder="再次输入新密码">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-general btn-blue mr-2">确认修改</button>
                </form>
            </div>
        </div>
    </div>
@endsection