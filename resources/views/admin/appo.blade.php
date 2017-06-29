@extends('admin.main')
@section('content')
        <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>权限委派</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico"> <link href="css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css?v=4.1.0" rel="stylesheet">


</head>

<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">

        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>数据展示列表</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="table_basic.html#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="table_basic.html#">选项1</a>
                            </li>
                            <li><a href="table_basic.html#">选项2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <a href="{{url('admin/system/add')}}">
                        <button class="btn btn-outline btn-primary dim" type="button" title="添加信息" style="left:1%">
                            <i class="fa fa-plus"></i>
                        </button>
                    </a>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-sm-5 m-b-xs">
                            <select class="input-sm form-control input-s-sm inline" style="height: 35px">
                                <option value="all">所有类型</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <div class="input-group">
                                <input type="text" placeholder="请输入关键词" class="input-sm form-control"> <span class="input-group-btn">
                                        <button type="button" class="btn btn-sm btn-primary"> 搜索</button> </span>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>

                                <th></th>
                                <th>指派人</th>
                                <th>指派权限</th>
                                <th>截至日期</th>
                                <th>指派说明</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody style="border-bottom: 2px solid #cccccc">


                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

<!-- 全局js -->
<script src="js/jquery.min.js?v=2.1.4"></script>
<script src="js/bootstrap.min.js?v=3.3.6"></script>



<!-- Peity -->
<script src="js/plugins/peity/jquery.peity.min.js"></script>

<!-- 自定义js -->
<script src="js/content.js?v=1.0.0"></script>


<!-- iCheck -->
{{--<script src="js/plugins/iCheck/icheck.min.js"></script>--}}

        <!-- Peity -->
{{--<script src="js/demo/peity-demo.js"></script>--}}



<script>
    $(function ( ) {
        function getData( typeInfo ){
            $.ajax({
                type:"get",
                url:"{{url('admin/priv/appolist')}}",
                data:'type='+typeInfo,
                dataType:'json',
                success:function ( msg ) {
                    if( msg.status == 1 && typeof msg.data == 'object' && msg.data.length>0){
                        var str = '';
                        $.each(msg.data,function(k,v){
                            str += '<tr>' +
                                    '<td><input type="checkbox" class="i-checks" name="input[]"></td>' +
                                    '<td><span>'+ v.level_info+'</span>'+v.sys_content+'</td>' +
                                    '<td>'+v.type_name+'</td>' +
                                    '<td>'+v.sys_status+'</td>' +
                                    '<td>'+v.sys_link+'</td>' +
                                    '<td>' +
                                    '<a href="javascript:void(0)" alt="删除" title="删除" class="config-del" configId="'+ v.sys_id+'"><i class="fa fa-close text-navy"></i></a> ' +
                                    '<a href="javascript:void(0)" alt="修改" title="修改" class="config-save" configId="'+ v.sys_id+'"><i class="fa fa-wrench text-navy"></i></a>' +
                                    '</td>' +
                                    '</tr>';
                        });
                    }else{
                        str += '<tr><td></td><td colspan="4" align="center" >没有要展示的内容</td><td></td></tr>'
                    }
                    $(".table").children().eq(1).html(str);

                }
            });
        }
        getData('all');
        $.ajax({
            type: "get",
            url: "{{url('admin/system/systemtypelist')}}",
            data: '',
            dataType: 'json',
            success: function (msg) {
                $('.input-sm').html('');
                $('.input-sm').append('<option value="all">所有类型</option>');
                $.each(msg.data,function(k,v){
                    $('.input-sm').append('<option value="'+ k+'">'+v+'</option>');
                });
            }
        });

        $('.input-sm').change(function(){
            getData($(this).val());
        });
        $('.table-responsive').delegate('.config-del','click',function(){
//        $('.config-del').click(function(){
            if(confirm('这将删除该分类及它的所有子分类，是否继续？')){
                var configIdObj = $(this).parent().parent();
                var objLength = configIdObj.find('span').text().length;
                var delIds = configIdObj.find('a').eq(0).attr('configId');
                $.each(configIdObj.nextAll(),function(k,v){
                    if($(this).find('span').text().length > objLength){
                        delIds += ','+$(this).find('a').eq(0).attr('configId');
                        $(this).remove();
                    }else{
                        return false;
                    }
                });
                configIdObj.remove();

                $.ajax({
                    type: "get",
                    url: "{{url('admin/system/systemdel')}}",
                    data: 'configId='+configIdObj.attr('configId'),
                    dataType: 'json',
                    success: function (msg) {
                        if(msg.status == 1){

                        }else{
                            alert('删除失败');
                        }
                    }
                })

            }
        });
    });
</script>


</body>

</html>

@stop