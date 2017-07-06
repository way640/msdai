@extends('admin.main')
@section('content')
    <script src="{{URL::asset('')}}admin/js/jquery.min.js"></script>
    <div style="padding: 50px 300px 0 300px">
        <h1 align="center">角色赋值</h1>
    <div class="col-md-12">
        <div class="form-group">
            <label class="col-sm-3 control-label">角色名称：</label>
            <div class="col-sm-9">
                <select class="form-control" id="role_name" name="role_name" style="height: 40px">

                </select>
            </div>
        </div>
		
        <div class="form-group">
            <label class="col-sm-3 control-label">赋值权限</label>
            <div class="col-sm-9" id="privList">

			</div>
        </div>
		<br><br><br><br>
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
                    url:"{{url('admin/admin/roleList')}}",
                    data:'',
                    dataType:'json',
                    success:function ( msg ) {
                        $('#role_name').append('<option value="">请选择角色</option>');

                        $.each(msg.data,function(k,v){
                            $('#role_name').append('<option value="' + v.role_id + '"><span>'+v.role_name+'</span></option>');
                        });
                    }
                });
				
				$.ajax({
                    type:"get",
                    url:"{{url('admin/admin/privList')}}",
                    data:'',
                    dataType:'json',
                    success:function ( msg ) {
						
						$.each(msg.data,function(k,v){

							$.each(msg.data.arr1,function(k1,v1){
								
							    if ( k1 == v.priv_level ){
								    
						    		$('#privList').append( msg.data.arr1[k1] + '<input type="checkbox" value="' + v.role_id + '"><span>'+v.priv_name+'</span>' );
						    	}
							
						    });
                        });
                    }
                });
				
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