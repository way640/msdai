@extends('admin.main')
@section('content')
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--360浏览器优先以webkit内核解析-->


    <title> - 主页示例</title>
    <base href="{{URL::asset('')}}admin/">
    <link rel="shortcut icon" href="favicon.ico"> <link href="css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
<input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row row-sm text-center" id="dataInfo" style="padding-top: 2%">
                            <div class="col-xs-6">
                                <div class="panel padder-v item">
                                    <div class="h1 text-info font-thin h1">521</div>
                                    <span class="text-muted text-xs">同比增长</span>
                                    <div class="top text-right w-full">
                                        <i class="fa fa-caret-up text-warning m-r-sm"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="panel padder-v item bg-info">
                                    <div class="h1 text-fff font-thin h1">521</div>
                                    <span class="text-muted text-xs">今日访问</span>
                                    <div class="top text-right w-full">
                                        <i class="fa fa-caret-up text-warning m-r-sm"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="panel padder-v item bg-primary">
                                    <div class="h1 text-fff font-thin h1">521</div>
                                    <span class="text-muted text-xs">销售数量</span>
                                    <div class="top text-right w-full">
                                        <i class="fa fa-caret-up text-warning m-r-sm"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="panel padder-v item">
                                    <div class="font-thin h1">$129</div>
                                    <span class="text-muted text-xs">近日盈利</span>
                                    <div class="top text-right w-full">
                                        <i class="fa fa-caret-up text-warning m-r-sm"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title" style="border-bottom:none;background:#fff;">
                                <h5>服务器状态</h5>
                            </div>
                            <div class="ibox-content" style="border-top:none;">
                                <table class="table table-hover">
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div style="padding: 0 1%">
                        <div class="ibox float-e-margins">
                        <div class="" id="ibox-content">
                            <div class="ibox-title">
                                <h5>操作日志</h5>
                            </div>
                            <div id="showLog1" class="vertical-container light-timeline" style="width: 48%;display: inline-block;margin-left: 1%">

                            </div>
                            <div id='showLog2' class='vertical-container light-timeline' style='width: 48%;display: inline-block;margin-right: 1%'>
                           
                            </div>
                        </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-sm-2">
                <div class="ibox float-e-margins" style="display:block;height: 1180px">
                    <div class="ibox-title">
                        <h5>任务列表</h5>
                    </div>
                    <div class="ibox-content">
                        <ul class="todo-list m-t small-list ui-sortable" >
                            <li>
                                <a href="widgets.html#" class="check-link"><i class="fa fa-check-square"></i> </a>
                                <span class="m-l-xs todo-completed">吃饭</span>

                            </li>
                            <li>
                                <a href="widgets.html#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                <span class="m-l-xs">睡觉</span>
                                <small class="label label-primary"><i class="fa fa-clock-o"></i> 1小时</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 全局js -->
    <script src="js/jquery.min.js?v=2.1.4"></script>
    <script src="js/bootstrap.min.js?v=3.3.6"></script>
    <script src="js/plugins/layer/layer.min.js"></script>
    <!-- Flot -->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>
    <!-- 自定义js -->
    <script src="js/content.js"></script>
    <!--flotdemo-->

</body>
<script type="text/javascript">
    $(function(){
        $.ajax({
            type:"get",
            url:"{{url('admin/index/indexdata')}}",
            dataType:'json',
            success:function ( msg ) {
                var strHtml = '';
                $.each(msg.data.dataInfo,function(k,v){
                    strHtml += '<div class="col-xs-6"><div class="panel padder-v item">';
                    strHtml += '<div class="h1 text-info font-thin h1">'+v.data+'</div>';
                    strHtml += '<span class="text-muted text-xs">'+v.info+'</span>';
                    strHtml += '<div class="top text-right w-full">';
                    strHtml += '<i class="fa fa-caret-up text-warning m-r-sm"></i>';
                    strHtml += '</div></div></div>';
                });
                $('#dataInfo').html(strHtml);
                strHtml = '';
                $.each(msg.data.system,function(k,v){
                    if(k == 'status' ){
                        if(v.data == '1'){
                            v.data = '<button class="btn btn-outline btn-primary dim" type="button" status="1"><i class="glyphicon glyphicon-ok"></i></button><font color="green" size="4">前台正常开启</font>';
                        }else{
                            v.data = '<button class="btn btn-outline btn-primary dim" type="button" status="0"><i class="glyphicon glyphicon-remove"></i></button><font color="red" size="4">前台已关闭访问</font>';
                        }
                    }else if (k == 'start_time' ){
                        v.data = '<input type="hidden" value="'+v.data+'"><span><embed style="width:50%;height:35%;margin-left:-13%" wmode="transparent" src="{{url("image/time.swf")}}" quality="high" bgcolor="#ffffff" name="honehoneclock" allowscriptaccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" align="middle" height="140" width="320"></span>';
                    }
                    strHtml += '<tr><td>';
                    strHtml += v.info+'：</td><td id="';
                    strHtml += k+'">';
                    strHtml += v.data+'</td></tr>';
                });
                $('.table').html(strHtml);
            }
        })
        $('.table').delegate('button','click',function(){
            var rand = parseInt(Math.random()*10000);
            var pwd = prompt('请输入验证码：'+rand);
            if(pwd == rand){
                var superpwd = prompt('请输入管理密码：')
                if(superpwd != ''){
                    var obj  = $(this);
                    var status = obj.attr('status');
                    $.ajax({
                        type:"get",
                        url:"{{url('admin/index/checkstatus')}}",
                        data:'status='+status+'&superpwd='+superpwd,
                        dataType:'json',
                        success:function ( msg ) {
                            if(msg.status == '1'){
                                if(status == '0'){
                                    obj.parent().html('<button class="btn btn-outline btn-primary dim" type="button" status="1"><i class="glyphicon glyphicon-ok"></i></button><font color="green" size="4">前台正常开启</font>');
                                }else{
                                    obj.parent().html('<button class="btn btn-outline btn-primary dim" type="button" status="0"><i class="glyphicon glyphicon-remove"></i></button><font color="red" size="4">前台已关闭访问</font>');
                                }
                            }else{
                                alert('管理密码认证失败');
                            }
                        }
                    })
                }
            }else{
                alert('验证码填错了');
            }

        });

    $.ajax({
        type: "POST",
        url: "{{ url('admin/admin/getlog') }}",
        dataType : "json",
        success: function(msg){
            if(msg.status == 1){
                //循环判断日志类型
                var str = ''
                var new_str = 0

                $.each(msg.data, function(k, v){
                    
                    


                    if(v.log_type == 1){
                        //数据添加
                        str += "<div class='vertical-timeline-block'>"
                        str += "<div class='vertical-timeline-icon blue-bg' id='insertInfo'>"
                        str += "<i class='fa fa-file-text'></i></div>"
                        str += "<div class='vertical-timeline-content'>"
                        str += "<h2>"+v.type_name+"</h2><p>"+v.log_operation+"</p><span class='vertical-date'><br><small>"+v.time+"</small>"
                        str += "</span></div></div>"
                    }else if(v.log_type == 2){
                        //数据修改
                        str += "<div class='vertical-timeline-block'>"
                        str += "<div class='vertical-timeline-icon blue-bg' id='insertInfo'>"
                        str += "<i class='fa fa-edit'></i></div>"
                        str += "<div class='vertical-timeline-content'>"
                        str += "<h2>"+v.type_name+"</h2><p>"+v.log_operation+"</p><span class='vertical-date'><br><small>"+v.time+"</small>"
                        str += "</span></div></div>"
                    }else if(v.log_tyoe == 3){
                        //数据查看
                        str += "<div class='vertical-timeline-block'>"
                        str += "<div class='vertical-timeline-icon lazur-bg' id='insertInfo'>"
                        str += "<i class='fa fa-hand-pointer-o'></i></div>"
                        str += "<div class='vertical-timeline-content'>"
                        str += "<h2>"+v.type_name+"</h2><p>"+v.log_operation+"</p><span class='vertical-date'><br><small>"+v.time+"</small>"
                        str += "</span></div></div>"
                    }else if(v.log_type == 4){
                        //数据删除
                        str += "<div class='vertical-timeline-block'>"
                        str += "<div class='vertical-timeline-icon red-bg' id='insertInfo'>"
                        str += "<i class='fa fa-remove'></i></div>"
                        str += "<div class='vertical-timeline-content'>"
                        str += "<h2>"+v.type_name+"</h2><p>"+v.log_operation+"</p><span class='vertical-date'><br><small>"+v.time+"</small>"
                        str += "</span></div></div>"
                    }else if(v.log_type == 5){
                        //用户登录
                        str += "<div class='vertical-timeline-block'>"
                        str += "<div class='vertical-timeline-icon yellow-bg' id='insertInfo'>"
                        str += "<i class='fa fa-sign-in'></i></div>"
                        str += "<div class='vertical-timeline-content'>"
                        str += "<h2>"+v.type_name+"</h2><p>"+v.log_operation+"</p><span class='vertical-date'><br><small>"+v.time+"</small>"
                        str += "</span></div></div>"
                    }else{
                        //用户退出
                        str += "<div class='vertical-timeline-block'>"
                        str += "<div class='vertical-timeline-icon yellow-bg' id='insertInfo'>"
                        str += "<i class='fa fa-sign-out'></i></div>"
                        str += "<div class='vertical-timeline-content'>"
                        str += "<h2>"+v.type_name+"</h2><p>"+v.log_operation+"</p><span class='vertical-date'><br><small>"+v.time+"</small>"
                        str += "</span></div></div>"
                    }

                    if(k == 4){
                        $('#showLog1').html(str);
                        str = '';
                    }
                })

                $('#showLog2').html(str);


            }else{
                alert('加载失败，请重新加载')
            }
        }
    });
});
</script>
</html>
@stop