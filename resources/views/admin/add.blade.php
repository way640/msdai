@extends('Admin.main')
@section('content')
<div class="col-md-12" style=" width: 650px">
    <form action="{{url('admin/user/store')}}" method="post">
        <div class="form-group">
            @if(count($errors)>0)
                <div class="mark">
                    @if(is_object($errors))
                        @foreach($errors->all() as $error)
                            <p>{{$error}}</p>
                        @endforeach
                    @else
                        <p>{{$errors}}</p>
                    @endif
                </div>
            @endif
            <label class="col-sm-3 control-label">管理员姓名：</label>
            <div class="col-sm-9">
                <input type="text" name="admin_account" class="form-control" placeholder="请输入文本"> <span class="help-block m-b-none">说明文字</span>

            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">请输入管理员密码：</label>
            <div class="col-sm-9">
                <input type="password" class="form-control" name="admin_pwd" placeholder="请输入密码">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12 col-sm-offset-3">
                <button class="btn btn-primary" type="submit">保存内容</button>
                <button class="btn btn-white" type="submit">取消</button>
            </div>
        </div>
    </form>
</div>
@stop