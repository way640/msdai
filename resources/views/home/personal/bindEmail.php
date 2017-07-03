@extends('home.title')
@section('content')

<head>

</head>
<body style="height:100%">
<script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>

    <div class="online-service hidden-phone">
<script type="text/javascript" async="" src="js/mv.js"></script><script type="text/javascript" async="" src="./安全设置_files/mba.js.下载"></script><script charset="utf-8" src="./安全设置_files/v.js.下载"></script><script src="./安全设置_files/header-init-8dc16d38ce.js.下载"></script><div class="container jimu-account-container">
        <div class="jimu-account-nav-wrap">
            <div class="jimu-leftnav" data-version="4">
				<ul>
					<ul class="jimu-leftsecnav">
						<li><a data-nav="asset-overview" class="" href="https://www.jimu.com/User/AssetOverview">资产总览</a></li></ul><li><a data-nav="venus-category" class=" highlight venus-category" href="javascript:void(0)">轻松理财</a></li><ul class="jimu-leftsecnav"><li><a data-nav="venus" class="" href="https://box.jimu.com/User/Venus/JoinList">轻松投</a></li></ul><li><a data-nav="p2p" class=" highlight p2p" href="javascript:void(0)">散标理财</a></li><ul class="jimu-leftsecnav"><li><a data-nav="p2p-overview" class="" href="https://box.jimu.com/Account/CreditAssign/Owned">自选投</a></li>
						<li><a data-nav="p2p-autoinvest" class="" href="https://box.jimu.com/AutoInvest/AutoInvestInfo">自动投标队列</a></li>
						<li><a data-nav="p2p-repayment-plan" class="" href="https://box.jimu.com/RepaymentPlan/Month">回款计划</a></li>
					</ul>
						<li><a data-nav="award" class=" highlight award" href="javascript:void(0)">奖励管理</a></li>
					<ul class="jimu-leftsecnav">
						<li><a data-nav="coupon" class="" href="https://box.jimu.com/Coupon/List"><span>优惠券</span></a></li>
						<li><a data-nav="moneycat" class="" href="https://box.jimu.com/Recommend/Send">邀请好友</a></li>
						<li><a data-nav="usermission" class="" href="https://www.jimu.com/Mission/Index">我的任务</a></li>
						<li><a data-nav="userscore" class="" href="{{ url('home/personal/points') }}">我的积分</a></li>
					</ul>
						<li><a data-nav="userprofile" class=" highlight userprofile" href="javascript:void(0)">账户管理</a></li>
					<ul class="jimu-leftsecnav">
						<li><a data-nav="p2p-setting" class="" href="https://box.jimu.com/User/SecurityCenter">账户设置</a></li>
						<li><a data-nav="user-center" class="active highlight asset-overview" href="{{ url('personal/config') }}">安全设置</a></li>
						<li><a data-nav="message" class="" href="https://www.jimu.com/Message/List"><span>消息</span></a>
						</li>
					</ul>
				</ul>
			</div>
			</div>
			<div class="jimu-account-content-wrap">
  
			                <div class="container register" data-site-phone="400-628-1176">
        <div class="register-main">
            <h4>验证手机</h4>
            <hr>
            <form action="/User/BindMobile" method="post" novalidate="novalidate">
                <input name="ReturnUrl" value="" type="hidden">

                <div class="control-group">
                    <label class="control-label" for="mobile">手机号码</label>
                    <input class="mobile" id="number" data-left="342" placeholder="手机号码" tabindex="1" id="mobile" name="mobile" autocomplete="off" data-val="true" data-val-remote="手机号码已经被绑定" data-val-remote-url="/User/CheckUniqueMobile" data-val-remote-additionalfields="*.mobile" data-val-regex="请您填写有效的手机号码。" data-val-regex-pattern="^[1][0-9]{10}$" data-val-required="请填写手机号码。" type="text">
                    <span class="help-block">
                        <span class="field-validation-valid" data-valmsg-for="mobile" data-valmsg-replace="true">
                        </span>
                        <span class="specialMessage hide field-validation-error"></span>
                    </span>
                </div>
                
                    <label class="control-label" for="mobile_code">验证码</label>
                    <br>
                        <input placeholder="验证码" class="captcha" data-left="172" tabindex="2" id="mobile_code" name="mobileCode" autocomplete="off" data-val="true" data-val-regex="手机验证码为6位数字。" data-val-regex-pattern="^(\d{6})$" data-val-required="请填写手机验证码。" type="text">
						
						<a href="javascript:void(0);" id="sendMessage">获取验证码</a>
						
                    <span class="help-block">
                        <span class="field-validation-valid" data-valmsg-for="mobileCode" data-valmsg-replace="true"></span>
                    </span>
                
                <hr>
				<center>
                <a href="javascript:void(0);" class="checkCaptcha">
                    完成
                </a>
				</center>
            </form>
		</div>
    </div>
</div>
  
            </div>
		</div>

    <div id="embed-captcha"></div>
    <p id="wait" class="show">正在加载验证码......</p>
    <p id="notice" class="hide">请先完成验证</p>

                </div>

				
				

<script type="text/javascript" async="" src="../../js/mv.js"></script>
<script type="text/javascript" async="" src="../../js/mba.js"></script>
<script charset="utf-8" src="../../js/v.js"></script>
<script type="text/javascript" src="../../js/jquery-07fd0237c1.min.js"></script>
    <script src="../../js/jquery-0abadbaab5.validate.min.js"></script>
    <script src="../../js/jquery-472ad11beb.validate.unobtrusive.js"></script>

    <!--[if lt IE 9]>
    <script type="text/javascript">
    $(document).ready(function(){
        $(".input-tip").each(function(i, n){
            showTip(n);
        });
        $("input").focus(function(){
            var pre = $(this).prev();
            if ($(pre).hasClass("input-tip")){
                hideTip(pre);
            }
        })
        .blur(function(){
            if ($(this).val() != ""){
                return;
            }
            var pre = $(this).prev();
            if ($(pre).hasClass("input-tip")){
                showTip(pre);
            }
        });

        function showTip(spanobj){
            $(spanobj).css("left", "15px");
        }
        function hideTip(spanobj){
            $(spanobj).css("left", "500px");
        }
    });
    </script>
    <![endif]-->
<script src="../../js/settings-88ea31cf32.js" type="text/javascript"></script>
<script src="../../js/init-fc412db349.js" type="text/javascript"></script>
<script src="../../js/hm.js"></script><script src="../../js/hm.js(1)"></script>

<script type="text/javascript" async="" src="../../js/dc.js"></script>
<script type="text/javascript" async="" src="../../js/agt.js"></script>
<script type="text/javascript" async="" src="../../js/conversion.js"></script>
<script type="text/javascript" async="" src="../../js/mvl.js"></script>

<script src="http://apps.bdimg.com/libs/jquery/1.9.1/jquery.js"></script>
<script src="../../js/gt.js"></script>
<script>
    var handlerEmbed = function (captchaObj) {
        $("#embed-submit").click(function (e) {
            var validate = captchaObj.getValidate();
            if (!validate) {
                $("#notice")[0].className = "show";
                setTimeout(function () {
                    $("#notice")[0].className = "hide";
                }, 2000);
                e.preventDefault();
            }
        });
        // 将验证码加到id为captcha的元素里，同时会有三个input的值：geetest_challenge, geetest_validate, geetest_seccode
        captchaObj.appendTo("#embed-captcha");
        captchaObj.onReady(function () {
            $("#wait")[0].className = "hide";
        });
        // 更多接口参考：http://www.geetest.com/install/sections/idx-client-sdk.html
    };
    $.ajax({
        // 获取id，challenge，success（是否启用failback）
        url: "../web/StartCaptchaServlet.php?t=" + (new Date()).getTime(), // 加随机数防止缓存
        type: "get",
        dataType: "json",
        success: function (data) {
            console.log(data);
            // 使用initGeetest接口
            // 参数1：配置参数
            // 参数2：回调，回调的第一个参数验证码对象，之后可以使用它做appendTo之类的事件
            initGeetest({
                gt: data.gt,
                challenge: data.challenge,
                new_captcha: data.new_captcha,
                product: "embed", // 产品形式，包括：float，embed，popup。注意只对PC版验证码有效
                offline: !data.success // 表示用户后台检测极验服务器是否宕机，一般不需要关注
                // 更多配置参数请参见：http://www.geetest.com/install/sections/idx-client-sdk.html#config
            }, handlerEmbed);
        }
    });
	
	$('#embed-submit').on('click', function(){

		var username = $('#username').val();
		var userpwd  = $('#userpwd').val();
	
		$.ajax({
			type: "POST",
			url: "../web/VerifyLoginServlet.php",
			data: {geetest_challenge: $("input[name='geetest_challenge']").val(),
				   geetest_validate: $("input[name='geetest_validate']").val(),
				   geetest_seccode: $("input[name='geetest_seccode']").val()},
			dataType: 'json',
			success: function(msg){
				
				if(msg.status == 'fail'){
					
					alert('请填写验证码')
				}else{
					
					$.ajax({
						type: "POST",
						url: "{{ url('user/doRegist') }}",
						data: 'username='+username+"&userpwd="+userpwd,
						dataType: 'json',
						success: function(msg){
							
							if(msg.status == 'fail'){
								
								alert('请填写验证码')
							}else if(msg.status == 0){
								
								alert(msg.msg)
							}else{

								alert('注册成功,请完善个人信息,以便享受本站更多服务')
								location.href="{{ url('personal/config') }}"
							}
						}
					});
				}
			}
		});
	})		

</script>

</body>

@stop