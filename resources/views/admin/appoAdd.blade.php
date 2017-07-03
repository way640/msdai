@extends('admin.main')
@section('content')
    <script src="{{URL::asset('')}}admin/js/jquery.min.js"></script>
    <div style="padding: 50px 300px 0 300px">
        <h1 align="center">权限委派</h1>
    <div class="col-md-12">
        <div class="form-group">
            <label class="col-sm-3 control-label">委托人：</label>
            <div class="col-sm-9">
                <input name="admin_account" id="admin_account" required class="form-control" placeholder="例：123@qq.com；请务必填写正确的账户名称" type="text"> <span class="help-block m-b-none">这里填写你想将权限委托给谁</span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">权限明细：</label>
            <div class="col-sm-9">
                <select class="form-control" id="app_priv" name="app_priv" style="height: 40px">

                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">委派缘由：</label>
            <div class="col-sm-9">
                <input name="config_link" id="config_link" class="form-control" required placeholder="例：出差两天，委派助理小红管理" type="text"> <span class="help-block m-b-none">这里是注明委派的具体缘由</span>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 control-label">开始时间：</label>
            <div class="col-sm-9">
                <input name="app_start_time" id="app_start_time" required class="form-control" placeholder="例：2017-09-21" type="text">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">结束时间：</label>
            <div class="col-sm-9">
                <input name="app_end_time" id="app_end_time" required class="form-control" placeholder="例：2017-09-22" type="text"> 
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
                    url:"{{url('admin/appo/privlist')}}",
                    data:'',
                    dataType:'json',
                    success:function ( msg ) {
                        $('#app_priv').append('<option value="">请选择分类</option>');

                        $.each(msg.data,function(k,v){
                            $('#app_priv').append('<option value="admin/'+ v.priv_controller+'/'+v.priv_action+'"><span>'+v.level_info+'</span>'+v.priv_name+'</option>');
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
                $("#admin_account").blur(function(){
                    var obj = $(this);
                    if($(this).val() != ''){
                        $.ajax({
                            type: "get",
                            url: "{{url('admin/public/checkadminaccount')}}",
                            data: "admin_account="+obj.val(),
                            dataType: 'json',
                            success: function (msg) {
                                if(msg.success != 1){
                                    alert('该帐号不存在');
                                }
                            }
                        })
                    }else{
                        alert('委托人不能为空');
                    }
                });
            });
        </script>
    </div>
@stop