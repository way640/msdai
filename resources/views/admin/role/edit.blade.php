@extends('admin.main')
@section('content')
<div class="col-md-12" style=" width: 650px">
    <form action="{{url('admin/role/update/'.$field->role_id)}}" method="post">
        <input type="hidden" name="_method" value="put">
        <div class="form-group">
            <label class="col-sm-3 control-label">角色名称：</label>
            <div class="col-sm-9">
                <input type="text" name="role_name" value="{{$field->role_name}}" class="form-control" placeholder="请输入文本"> <span class="help-block m-b-none">说明文字</span>

            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">角色简介：</label>
            <div class="col-sm-9">
                <input type="text" name="role_desc" value="{{$field->role_desc}}" class="form-control" placeholder="请输入文本"> <span class="help-block m-b-none">说明文字</span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">角色父ID：</label>
            <div class="col-sm-9">
                <input type="text" name="role_pid" value="{{$field->role_pid}}" class="form-control" placeholder="请输入文本"> <span class="help-block m-b-none">说明文字</span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">角色状态：</label>
            <div class="col-sm-9">
                <label class="radio-inline">
                    <input type="radio" checked="" value="1" id="optionsRadios1" name="role_status" value="{{$field->role_status}}">选项1</label>
                <label class="radio-inline">
                    <input type="radio" value="0" id="optionsRadios2" name="role_status" value="{{$field->role_status}}">选项2</label>
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