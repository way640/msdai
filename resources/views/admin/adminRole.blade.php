@extends('Admin.main')
@section('content')
    <script src="{{URL::asset('')}}admin/js/jquery.min.js"></script>
    <div style="padding: 50px 300px 0 300px">
        <h1 align="center">管理员赋值</h1>
    <div class="col-md-12">
        <div class="form-group">
            <label class="col-sm-3 control-label">管理员名称：</label>
            <div class="col-sm-9">
                <select class="form-control" id="admin_name" name="admin_name" style="height: 40px">

                </select>
            </div>
        </div>
		
        <div class="form-group">
            <label class="col-sm-3 control-label">角色名称：</label>
            <div class="col-sm-9" id="roleList">

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
                    url:"{{url('admin/admin/getAdmin')}}",
                    data:'',
                    dataType:'json',
                    success:function ( msg ) {
                        $('#admin_name').append('<option value="0">请选择管理员</option>');

                        $.each(msg.data,function(k,v){
                            $('#admin_name').append('<option value="' + v.admin_id + '"><span>'+v.admin_account+'</span></option>');
                        });
                    }
                });
				
				$.ajax({
                    type:"get",
                    url:"{{url('admin/admin/roleList')}}",
                    data:'',
                    dataType:'json',
                    success:function ( msg ) {
						
					    $.each(msg.data, function(k, v){
							
						    $('#roleList').append( '<input type="checkbox" class="roleList" value="' + v.role_id + '"><span>'+v.role_name+'</span>&nbsp;&nbsp;&nbsp;&nbsp;' );
						})		
                    }
                });
				
                $('#sub').click(function(){
                    
                    var adminName = $('#admin_name').val()
					var roleList = $("input[class='roleList']:checked")
					
                    if ( adminName  == 0 ) {
						
						alert('请选择角色');
						return false;
					}
                    //jquery获取复选框值  
                    var arr =[];
                    $("input[class='roleList']:checked").each(function(){
                        arr += ',' + $(this).val()  ;
                    });
					
					if ( arr == '' ) {
						
						alert('请选中需要赋予的权限');
						return false;
					}
                        
						$.ajax({
                            type: "POST",
                            url: "{{url('admin/admin/addAdminRole')}}",
                            data: "role_list=" + arr + "&admin_id=" + adminName, 
                            dataType: 'json',
                            success: function (msg) {

							    if ( msg.status == 1 ) {
									
									alert('添加成功')
									window.location.href="{{ url('admin/admin/adminRole') }}"
								} else {
									
									alert('添加失败')
									window.location.href="{{ url('admin/admin/adminRole') }}"
								}
                            }
                        });
                    })
                });
        </script>
    </div>
@stop