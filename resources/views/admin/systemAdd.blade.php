@extends('Admin.main')
@section('content')
    <script src="{{URL::asset('')}}admin/js/jquery.min.js"></script>
    <div style="padding: 50px 300px 0 300px">
        <h1 align="center">后台配置添加</h1>
    <div class="col-md-12">
        <div class="form-group">
            <label class="col-sm-3 control-label">配置信息：</label>
            <div class="col-sm-9">
                <input name="config_info" id="config_info" required class="form-control" placeholder="例：首页" type="text"> <span class="help-block m-b-none">这里是显示在导航上的内容或者是图片链接的显示内容</span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">所属分类：</label>
            <div class="col-sm-9">
                <select class="form-control" id="config_type" name="config_type" style="height: 40px">
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">所属分类：</label>
            <div class="col-sm-9">
                <select class="form-control" id="sys_desc" name="sys_desc" style="height: 40px">

                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">配置链接：</label>
            <div class="col-sm-9">
                <input name="config_link" id="config_link" class="form-control" required placeholder="例：index/index 或 http://www.xxx.com" type="text"> <span class="help-block m-b-none">这里是点击后要跳转的链接地址</span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">配置信息状态：</label>
            <div class="col-sm-9">
                <label class="radio-inline">
                    <input checked="checked" class="config_status" value="1" id="optionsRadios1" name="config_status" type="radio">开启</label>
                <label class="radio-inline">
                    <input value="0" class="config_status" id="optionsRadios2" name="config_status" type="radio">关闭</label>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-12 col-sm-offset-3">
                <button class="btn btn-primary" type="submit" id="sub">保存内容</button>
                <a href="javascript:void(0)" onClick="javascript:history.back(-1);"><button class="btn btn-white" type="button">取消</button></a>
            </div>
        </div>
    </div>
        <script>

            $(function(){
                $('.form-group').attr('style','padding-top:50px');
                $('.col-sm-3').attr('style','font-size:20px');
                $.ajax({
                    type:"get",
                    url:"{{url('admin/system/systemtypelist')}}",
                    data:'',
                    dataType:'json',
                    success:function ( msg ) {
                        $('#config_type').append('<option value="">请选择分类</option>');

                        $.each(msg.data,function(k,v){
                            $('#config_type').append('<option value="'+ k+'">'+v+'</option>');
                        });
                    }
                });
                function checkSysDesc(type){
                    $.ajax({
                        type:"get",
                        url:"{{url('admin/system/systemlist')}}",
                        data:'type='+type,
                        dataType:'json',
                        success:function ( msg ) {
                            $('#sys_desc').append('<option value="0">顶级</option>');

                            $.each(msg.data,function(k,v){
                                $('#sys_desc').append('<option value="'+ v.sys_id+'">'+ v.level_info+ v.sys_content+'</option>');
                            });
                        }
                    })
                }
                $('#config_type').change(function(){
                    var obj = $(this);
                    if( obj.val() != ''){
                        checkSysDesc(obj.val());
                    }else{
                        $('#sys_desc').children().remove();
                    }
                });
                $('.radio-inline').click(function(){
                    $(this).siblings().children().eq(0).removeAttr('checked');
                    $(this).children().eq(0).attr('checked','');

                });
                $('#sub').click(function(){
                    var config_info = $('#config_info').val();
                    var config_link = $('#config_link').val();
                    var config_type = $('#config_type').val();
                    var sys_desc = $('#sys_desc').val();
                    if(!config_info || !config_link || !config_type){
                        alert('您还有信息未填写');
                    }else{
                        var config_status = $(".config_status[checked='checked']").val();
                        $.ajax({
                            type: "get",
                            url: "{{url('admin/system/systeminsert')}}",
                            data: "sys_content="+config_info+"&sys_type="+config_type+"&sys_desc="+sys_desc+"&sys_link="+config_link+"&sys_status="+config_status,
                            dataType: 'json',
                            success: function (msg) {
                                if(msg.status == 1){
                                    if(confirm('添加成功，是否继续添加')){
                                        $('#config_info').val('');
                                        $('#config_link').val('');
                                    }else{
                                        location.href="{{url('admin/system/index')}}";
                                    }
                                }else{

                                }
                            }
                        });
                    }
                });

            });
        </script>
    </div>
@stop