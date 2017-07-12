@extends('Admin.main')
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
                <input name="config_link" id="app_desc" class="form-control" required placeholder="例：出差两天，委派助理小红管理" type="text"> <span class="help-block m-b-none">这里是注明委派的具体缘由</span>
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
            var str = '' 
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
                            $('#app_priv').append('<option level="' + v.priv_level + '" value="' + v.priv_id + '"><span>'+v.level_info+'</span>'+v.priv_name+'</option>');
                        });
                    }
                });
				
				//$('.col-md-12').delegate('#app_priv','change',function(){
				$('#app_priv').change(function(){	
					str = '';
				    var privId = $("#app_priv").find("option:selected");  
					str += privId.val();
					var nextAll = privId.nextAll();
					$.each(nextAll,function(k,v){
						
						if($(this).attr('level') <= privId.attr('level')){
							return false;
						}else{
							str += ','+$(this).val();
						}
					});    
				})
				
                $('#sub').click(function(){
                    					
					var admin_account = $('#admin_account').val()
					var app_desc = $('#app_desc').val()
					var app_start_time = $('#app_start_time').val()
					var app_end_time = $('#app_end_time').val()			
							
              /*      if(!admin_account || !app_desc || !app_start_time || !app_end_time){
                        alert('您还有信息未填写');
                    }else{*/
                        
						$.ajax({
                            type: "POST",
                            url: "{{url('admin/appo/doAppoAdd')}}",
                            data: "admin_account="+admin_account+"&app_desc="+app_desc+"&app_start_time="+app_start_time+"&app_end_time="+app_end_time+"&app_status="+str,
                            dataType: 'json',
                            success: function (msg) {

							    if ( msg.status == 1 ) {
									
									alert('添加成功')
									window.location.href="{{ url('admin/appo/index') }}"
								} else {
									
									alert('添加失败')
									window.location.href="{{ url('admin/appo/index') }}"
								}
                            }
                        });
                 //   }
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
                                if(msg.status != 1){
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