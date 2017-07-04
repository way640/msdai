
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>"/>
<script type="text/javascript" src="<?php echo e(asset('js/javasrcipt.js')); ?>"></script>

<script type="text/javascript" src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
<title>积木</title>

</head>

<body style="height:100%">
<!--top--------------------------------------------------------------------------------------------------------------->
	<div class="top">
    	<div class="top-server">
    		<h1>欢迎致电：<span>400-068-1176</span> 服务时间：9:00 - 21:00</h1>
        	<img id="WeiBo" onmousemove="WeiBoMove()" onmouseout="WeiBoOut()" src="<?php echo e(asset('image/微博-link.png')); ?>" />
        	<img id="WeChat" onmousemove="WeChatMove()" onmouseout="WeChatOut()" src="<?php echo e(asset('image/微信-link.png')); ?>" />
            <ul>
            	<li><a href="#">最新活动</a></li>

				<?php $arr = isset( $_SESSION['user'] ) ? $_SESSION['user'] : ''?>
				<?php if( $arr ): ?>
					<li><a href="javascript:void(0);"><?php echo $_SESSION['user']['username'];?>, 您好, 欢迎登陆</a></li>
					<li style="border-right:none;"><a href="javascript:void(0);" class="userLogout">注销</a></li>
				<?php else: ?>
					<li><a href="<?php echo e(url('user/login')); ?>">登录</a></li>

					<li style="border-right:none;"><a href="<?php echo e(url('user/regist')); ?>">注册</a></li>

				<?php endif; ?> 
            </ul>
			<script>
				$('.userLogout').on('click', function(){
					
					 $.ajax({
						type: "GET",
						url: "../../../user/logout",
						dataType: 'json',
						success: function(msg){
								
							alert('退出成功')
							window.location.href="<?php echo e(url('user/login')); ?>"
						}
					});
				})
			</script>	
        </div>
    </div>


<!--header------------------------------------------------------------------------------------------------------------>
<!--main-------------------------------------------------------------------------------------------------------------->
	<div class="header">
    	<div class="head">
        	<a class="logo" href="http://www.zdmoney.com"><img src="<?php echo e(asset('image/logo-bg.png')); ?>" /></a>
          	<ul>

                  <div id='box'>
                      
                  </div>

                  <a href="<?php echo e(url('')); ?>/cz/index">充值</a>

        	</ul>
        </div>
    </div>
    <script src='<?php echo e(asset('js/jquery.min.js')); ?>'></script>
<script>
jQuery(document).ready(function(){

//导航栏 jsonp请求
var van = "http://www.zdmoney.com/index/nav?code=CA1998&callback=localHandler";
    $.ajax({
        type: "get",
        async: false, 
        url: van,
        dataType: "jsonp",
        jsonp: "callback",//传递给请求处理程序或页面的，用以获得jsonp回调函数名的参数名(一般默认为:callback)
        jsonpCallback:"localHandler",//自定义的jsonp回调函数名称，默认为jQuery自动生成的随机函数名，也可以写"?"，jQuery会自动为你处理数据
        success: function(msg){
            var str ='';
            $.each(msg,function(k,v){
                // alert(v.config_info);
                str +='<li><a href="<?php echo e(url('')); ?>/'+v.config_link+'" >'+v.config_info+'</a></li>'; 
            })
			$('#box').append(str);
        },
        error: function(){
            //alert('fail');
        }
    });
//锦囊妙计 4条最新添加的要知道的小知识

var url = "http://www.zdmoney.com/index/silk?code=CA1998&callback=localHandler";
    $.ajax({
        type: "get",
        async: false,
        url: url,
        dataType: "jsonp",
        jsonp: "callback",//传递给请求处理程序或页面的，用以获得jsonp回调函数名的参数名(一般默认为:callback)
        jsonpCallback:"localHandler",//自定义的jsonp回调函数名称，默认为jQuery自动生成的随机函数名，也可以写"?"，jQuery会自动为你处理数据
        success: function(msg){
            var str0 ='';
            var str1 ='';
            var str2 ='';
            var str3 ='';
            $.each(msg,function(k,v){
                //如果内容超过50个字就截取前50个字
                var content = v.article_content;
                var new_content = content.substring(0,50)+"...";
                if(k==0){
                    // alert(1);
                    //alert(v.article_content);
                    // var content = v.article_content;
                    // alert(content.substring(0,50)+"...");
                    str0 +='<a href="#" style="border-right:solid 1px #E5E5E5; border-bottom:solid 1px #E5E5E5;"><article><img src="image/icon-zplay.png"/><figcaption>'+v.article_author+'</figcaption></article><aside><h2 title="'+v.article_title+'">'+v.article_title+'</h2><p>'+new_content+'</p><h3>阅读1005&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;赞82&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;评论7</h3></aside></a>';
                }else if(k==1){
                    //alert(2);
                    str1 +='<a href="#" style="border-bottom:solid 1px #E5E5E5;"><article><img src="image/icon-zplay.png"/><figcaption>'+v.article_author+'</figcaption></article><aside><h2 title="'+v.article_title+'">'+v.article_title+'</h2><p>'+new_content+'</p><h3>阅读1104&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;赞97&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;评论189</h3></aside></a>';
                }else if(k==2){
                    //alert(3);
                    str2+='<a href="#" style="border-right:solid 1px #E5E5E5;;"><article><img src="image/icon-yplan.png"/><figcaption>'+v.article_author+'</figcaption></article><aside><h2 title="'+v.article_title+'">'+v.article_title+'</h2><p>'+new_content+'</p><h3>阅读1721&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;赞142&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;评论8</h3></aside></a>';
                }else{
                    //alert(4);
                    str3 +='<a href="#" style="border-right:solid 1px #E5E5E5;;"><article><img src="image/icon-zplay.png"/><figcaption>'+v.article_author+'</figcaption></article><aside><h2 title="'+v.article_title+'">'+v.article_title+'</h2><p>'+new_content+'</p><h3>阅读1750&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;赞205&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;评论270</h3></aside></a>';
                }
            })

			$('#pbox').html(str0+str1+str2+str3);
        },
        error: function(){
            //alert('fail');
        }
    }); 

//友情链接 jsonp接口
var link = "http://www.zdmoney.com/index/link?code=CA1998&callback=localHandler";
    $.ajax({
        type: "get",
        async: false,
        url: link,
        dataType: "jsonp",
        jsonp: "callback",//传递给请求处理程序或页面的，用以获得jsonp回调函数名的参数名(一般默认为:callback)
        jsonpCallback:"localHandler",//自定义的jsonp回调函数名称，默认为jQuery自动生成的随机函数名，也可以写"?"，jQuery会自动为你处理数据
        success: function(msg){
            //alert(msg);
            var str = '';
            $.each(msg,function(k,v){
                //alert(v.config_desc)
                str +='<a href="'+v.config_link+'" ><img id="roll'+(k+1)+'" src="<?php echo e(asset('')); ?>/'+v.config_desc+'" /></a>';
            })
            $('#linkbox').html(str);
        },
        error: function(){
            //alert('fail');
        }
    }); 
    //贵金属
    var link = "http://www.zdmoney.com/gold/getgo?code=CA1998&callback=localHandler";
        $.ajax({
            type: "get",
            async: false,
            url: link,
            dataType: "jsonp",
            jsonp: "callback",//传递给请求处理程序或页面的，用以获得jsonp回调函数名的参数名(一般默认为:callback)
            jsonpCallback:"localHandler",//自定义的jsonp回调函数名称，默认为jQuery自动生成的随机函数名，也可以写"?"，jQuery会自动为你处理数据
            success: function(msg){
                //alert(msg);
                var str = '';
                $.each(msg,function(k,v){
                    //alert(v.goldid)
                    str += '<li><p><span>指数</span>&nbsp;&nbsp;';
                            if(v.change_price>0){
                                str += '涨幅&nbsp;<font color="red" >↑↑&nbsp;';
                            }else{
                                str += '跌幅&nbsp;<font color="green" >↓↓&nbsp;';
                            }
                    str +=  v.change_price+'&nbsp;&nbsp;'+v.change_margin+'</font></p><font>'
                            +v.varietynm+'&nbsp;&nbsp;'
                            +v.goldid+'</font><p style="color:#8A8A8A;">当前价格：'
                            +v.last_price+'<br>买入价格：'
                            +v.buy_price+'&nbsp;&nbsp;<br>成交量：'
                            +v.volume+'</p><div class="earnings"><h2>最高价</h2><h2 style="color:green;">最低价</h2><h3>'
                            +v.high_price+'</h3><h3>'
                            +v.low_price+'</h3></div><a class="purchase" href="#">立即申购</a></li>';
                })
                //alert(str);
                $('#goldbox').html(str);
            }
        }); 
}); 
    
</script>

	<?php echo $__env->yieldContent('content'); ?>
	<!--content-wrap------------------------------------------------------------------------------------------------------>
	<div class="content-wrap">
  		<div class="c-wrap">
   			<h1>合作机构</h1>
        	<div class="scroll">
          		<a href="###" class="left2" onclick="left2()"></a>
                  	<div id='linkbox'>
                  	     
                  	</div>
              	<a href="###" class="right2" onclick="right2()"></a>
       		</div>
      	</div>
    </div>
<!--footer------------------------------------------------------------------------------------------------------------>	
	<div class="footer" style="">
    	<div class="foot">
        	<article>
            	<div class="friend">
                	<a href="#">关于我们</a>
                  	<span></span>
                 	<a href="#">法律声明</a>
                    <span></span>
                  	<a href="#">媒体报道</a>
                    <span></span>
                  	<a href="#">团队介绍</a>
                    <span></span>
                  	<a href="#">帮助中心</a>
                    <span></span>
                  	<a href="#">友情链接</a>
                </div>
                <figure></figure>
            	<p>© 2016 北京乐融多源信息技术有限公司 京ICP证12049103号-3 京公网安备11010502025440</p>
           		<div class="certificate"></div>
			</article>
            <aside>
            	<p>联系我们 <span>9:00 - 21:00</span> </p>
              	<h1>400-068-1176</h1>
				<div class="customer"><a href="#">在线客服</a></div>
              	<div class="customer"><a href="#">客服邮箱</a></div>
            </aside>
        </div>
    </div>
<!-------------------------------------------------------------------------------------------------------------------->
</body>
</html>

<div>

    <script type="text/template" id="DaBaiTpl">
            <option value="北京">北京</option>
            <option value="上海">上海</option>
            <option value="深圳">深圳</option>
            <option value="苏州">苏州</option>
            <option value="成都">成都</option>
            </script>
    <script type="text/template" id="WangZaiXinYongTpl">
            <option value="北京">北京</option>
            <option value="上海">上海</option>
            <option value="深圳">深圳</option>
            <option value="苏州">苏州</option>
            <option value="成都">成都</option>
            <option value="重庆">重庆</option>
            <option value="合肥">合肥</option>
            <option value="广州">广州</option>
            <option value="南宁">南宁</option>
            <option value="贵阳">贵阳</option>
            <option value="海口">海口</option>
            <option value="廊坊">廊坊</option>
            <option value="郑州">郑州</option>
            <option value="长沙">长沙</option>
            <option value="南昌">南昌</option>
            <option value="太原">太原</option>
            <option value="西安">西安</option>
            <option value="天津">天津</option>
            <option value="大理">大理</option>
            <option value="杭州">杭州</option>
            </script>
    <script type="text/template" id="TimesTpl">
            <option value="安庆">安庆</option>
            <option value="兰州">兰州</option>
            <option value="广州">广州</option>
            <option value="惠州">惠州</option>
            <option value="茂名">茂名</option>
            <option value="顺德">顺德</option>
            <option value="中山">中山</option>
            <option value="柳州">柳州</option>
            <option value="任丘">任丘</option>
            <option value="仙桃">仙桃</option>
            <option value="长沙">长沙</option>
            <option value="无锡">无锡</option>
            <option value="镇江">镇江</option>
            <option value="瑞金">瑞金</option>
            <option value="本溪">本溪</option>
            <option value="凤城">凤城</option>
            <option value="青秀">青秀</option>
            <option value="兴宁">兴宁</option>
            <option value="青岛">青岛</option>
            <option value="诸城">诸城</option>
            <option value="渭南">渭南</option>
            <option value="大理">大理</option>
            <option value="嘉兴">嘉兴</option>
            <option value="荥阳">荥阳</option>
            <option value="赣州">赣州</option>
            <option value="南阳">南阳</option>
            <option value="东莞">东莞</option>
            <option value="东港">东港</option>
            <option value="江门">江门</option>
            <option value="中牟">中牟</option>
            <option value="桂林">桂林</option>
            <option value="海城">海城</option>
            <option value="湘潭">湘潭</option>
            <option value="阳江">阳江</option>
            </script>
    <script type="text/template" id="DiYaTpl">
            <option value="北京">北京</option>
            <option value="上海">上海</option>
            <option value="大连">大连</option>
            <option value="青岛">青岛</option>
            <option value="苏州">苏州</option>
            <option value="昆明">昆明</option>
            <option value="武汉">武汉</option>
            <option value="成都">成都</option>
            <option value="重庆">重庆</option>
            </script>
    <script type="text/template" id="BaiJuZuLinTpl">
            <option value="北京">北京</option>
            <option value="台州">台州</option>
            <option value="苏州">苏州</option>
            <option value="南京">南京</option>
            <option value="西安">西安</option>
            </script>
    <style type="text/css">

	
</div>




