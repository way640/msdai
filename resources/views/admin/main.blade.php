<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">

    <title> ZDmoney- 主页</title>
    <base href="{{URL::asset('')}}admin/">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->

    <link rel="shortcut icon" href="favicon.ico"> <link href="css/bootstrap.min.css?v=3.3.6" rel="stylesheet" />
    <link href="css/font-awesome.min.css?v=4.4.0" rel="stylesheet" />
    <link href="css/animate.css" rel="stylesheet" />
    <link href="css/style.css?v=4.1.0" rel="stylesheet" >
</head>

<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
    <div id="wrapper">
        <!--左侧导航开始-->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="nav-close"><i class="fa fa-times-circle"></i>
            </div>
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="{{url('admin/index/index')}}">
                                <span class="clear">
                                    <span class="block m-t-xs" style="font-size:20px;">
                                        <i class="fa fa-area-chart"></i>
                                        <strong class="font-bold">ZDmoney</strong>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="logo-element">ZDmoney
                        </div>
                    </li>

                    <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                        <span class="ng-scope">导航</span>
                    </li>

                </ul>
            </div>
        </nav>
        <!--左侧导航结束-->
        <!--右侧部分开始-->
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header"><a class="navbar-minimalize minimalize-styl-2 btn btn-info " href="javascript:void(0)"><i class="fa fa-bars"></i> </a>
                        
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="javascript:void(0);">
                               <?php echo $_SESSION['admin']['admin_account']?>，您好
                            </a>
                        </li>
	                   <li class="dropdown">
                            <a class="dropdown-toggle count-info" id="logout" data-toggle="dropdown" href="javascript:void(0);">
                               退出
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="row J_mainContent" id="content-main" style="overflow: auto">
                <div id="J_iframe">
                    @yield('content')
                </div>
            </div>
        </div>
        <!--右侧部分结束-->
    </div>

    <!-- 全局js -->
    <script src="js/jquery.min.js?v=2.1.4"></script>
    <script src="js/bootstrap.min.js?v=3.3.6"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="js/plugins/layer/layer.min.js"></script>

    <!-- 自定义js -->
    <script src="js/hAdmin.js?v=4.1.0"></script>
    <script type="text/javascript" src="js/index.js"></script>

    <!-- 第三方插件 -->
    <script src="js/plugins/pace/pace.min.js"></script>
<div style="text-align:center;">
<p>来源:<a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>
</div>
</body>
<script src="js/main.js"></script>
<script>
    $(document).ready(function() {
        function str_repeat(str, num){
            return new Array( num + 1 ).join( str );
        }
        $.ajax({
            type: "get",
            url: "{{url('admin/index/adminnav')}}",
            data: '',
            dataType: 'json',
            success: function (msg) {
                var level = 1;
                var nextLevel = 1;
                var str = '';
                var length = msg.data.length;


                $.each(msg.data,function(k,v){
//                    alert(k+1);
                    if(v.sys_link == ''){
                        v.sys_link = 'javascript:void(0)';
                    }else{
                        v.sys_link = "{{url('')}}/"+v.sys_link;
                    }
                    //开始部分
                    if( v.level <= level && v.level == 1){
                        if( length != k+1 && v.level < msg.data[k+1]['level'] ){
                            str += '<li><a href="javascript:void(0)"><i class="fa fa fa-bar-chart-o"> </i><span class="nav-label">'+v.sys_content+'</span><span class="fa arrow"></span></a>';
                        }else{
                            str += '<li><a class="J_menuItem" href="'+ v.sys_link +'"><i class="fa fa-home"> </i><span class="nav-label">'+ v.sys_content +'</span></a>';
                        }
                    }else if ( v.level <= level && v.level != 1) {
                        str += '<li> <a class="J_menuItem" href="'+ v.sys_link +'">'+ v.sys_content +'</a>';
                    }else if ( v.level > level ) {

                        str += '<ul class="nav nav-second-level collapse"> <li> <a class="J_menuItem" href="'+ v.sys_link +'">'+ v.sys_content +'</a>';
                    }else {
                        str += '<li> <a class="J_menuItem" href="'+ v.sys_link +'">'+ v.sys_content +'</a>';
                    }

                    //结束部分
                    if ( length == k+1) {
                        if(v.level == 1){
                            str += '</li>';
                        }else{
                            str += str_repeat('</li></ul>',parseInt(v.level)-1);
                        }
                    }else if ( v.level == msg.data[k+1]['level']) {
                        str += '</li>';
                    }else if ( v.level > msg.data[k+1]['level'] ) {
                        str += str_repeat('</li></ul></li>',parseInt(v.sys_desc)-parseInt(nextLevel));
                    }else {

                    }
                    level = v.level;
                });
                $('#side-menu').append(str);
            }
        });

        $('#side-menu').delegate('li','click',function(){
            if($(this).children().eq(1).attr('style') == undefined || $(this).children().eq(1).attr('style') != 'display: block;'){


                $.each($(this).siblings(),function(k,v){
                    $(this).removeClass('active')
                    $(this).find('ul').hide();
                });
                $(this).addClass('active');
                $(this).children().eq(1).animate({
                    height: 'toggle', opacity: 'toggle'
                }, "slow");
            }else{
                $(this).children().eq(1).fadeOut('fast');
                $(this).removeClass('active');
            }
//            console.log($(this).children().eq(1).attr('style'));
        });
    })
</script>

<script>
    $('#logout').on('click', function(){
		
        $.ajax({
			
            type: "POST",
            url: "{{ url('admin/public/doLogout') }}",
			dataType: 'json',
            success: function(msg){
                
				if ( msg.status == 1 ) {
					
					alert('已成功退出')
					
					window.location.href="{{ url('admin/login/login') }}"
				}
            }
        });
	})
</script>

</html>
