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
					<li style="border-right:none;"><a href="<?php echo e(url('user/logout')); ?>">注册</a></li>
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
        		<li><a href="http://www.zdmoney.com" >首页</a></li>
            	<li><a href="<?php echo e(url('invest/invest')); ?>">轻松投</a></li>
            	<li><a href="<?php echo e(url('lenging/lenging')); ?>">借款</a></li>
				<li><a href="<?php echo e(asset('gold/gold')); ?>">贵金属</a></li
                <li class="hot"></li>
				<?php if( $arr ): ?>					
					<li style="float:right;"><a href="<?php echo e(asset('personal/personal')); ?>">我的积木</a></li>
				<?php else: ?>

				<?php endif; ?>
        	</ul>
        </div>
    </div>
	<?php echo $__env->yieldContent('content'); ?>
	<!--content-wrap------------------------------------------------------------------------------------------------------>
	<div class="content-wrap">
  		<div class="c-wrap">
   			<h1>合作机构</h1>
        	<div class="scroll">
          		<a href="###" class="left2" onclick="left2()"></a>
              	<div>
              		<img id="roll1" src="<?php echo e(asset('image/wrap-广发基金.gif')); ?>" />
                    <img id="roll2" src="<?php echo e(asset('image/wrap-华夏基金.gif')); ?>" />
                    <img id="roll3" src="<?php echo e(asset('image/wrap-建信基金.gif')); ?>" />
                    <img id="roll4" src="<?php echo e(asset('image/wrap-汇添富基金.gif')); ?>" />
                    <img id="roll5" src="<?php echo e(asset('image/wrap-鹏华基金.gif')); ?>" />
                    <img id="roll6" src="<?php echo e(asset('image/wrap-工银瑞信.gif')); ?>" />
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