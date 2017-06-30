<!DOCTYPE html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="apple-itunes-app" content="app-id=790276804">
<!-- end: Meta -->
<meta property="wb:webmaster" content="9fd1b56cebfec3b3">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<!-- start: Fav Icon -->
<link href="https://www.jimu.com/favicon.ico?1496827969552" rel="shortcut icon" type="image/x-icon">
<link href="../../css/general-541378b38b.css" rel="stylesheet">
<link href="../../css/register_main-286e89e052.css" rel="stylesheet">
	
	

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>账号注册</title>
    <style>
        body {
            margin: 50px 0;
            text-align: center;
        }
        .inp {
            border: 1px solid gray;
            padding: 0 10px;
            width: 200px;
            height: 30px;
            font-size: 18px;
        }
        .btn {
            border: 1px solid gray;
            width: 100px;
            height: 30px;
            font-size: 18px;
            cursor: pointer;
        }
        #embed-captcha {
            width: 300px;
            margin: 0 auto;
        }
        .show {
            display: block;
        }
        .hide {
            display: none;
        }
        #notice {
            color: red;
        }
    </style>
</head>
<body style="height:100%">
<script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
<script src="https://static.geetest.com/static/tools/gt.js"></script>
<div class="register-logo">
        <a href="https://www.jimu.com/" target="_blank">
            <img src="../../image/logo-5464fa9708.png" alt="logo">
        </a>
    </div>
    <div class="register-main">
        <h2>免费注册账户</h2>
        <form class="popup">
		<?php echo e(csrf_field()); ?>

            <div class="input-wrap">
                <span class="input-tip">用户名</span>
                <input type="text" class="username" id="username" style="width:302px" placeholder="用户名" data-left="340" tabindex="1" id="UserName" name="UserName" autocomplete="off" data-val="true" data-val-regex="用户名只允许字母、数字、下划线、横线组成，首位只能为字母，且至少需要 6 个字符。" data-val-regex-pattern="(?!^\d[A-Za-z0-9_-]*$)^[A-Za-z0-9_-]{6,25}$" data-val-remote="用户名已存在。" data-val-remote-additionalfields="*.UserName" data-val-remote-url="/User/CheckUserName" data-val-required="请填写用户名。">
                <span class="help-block">
                    <span class="field-validation-valid" data-valmsg-for="UserName" data-valmsg-replace="true">
                    </span>
                </span>
            </div>
            <div class="input-wrap">
                <span class="input-tip">密码</span>
                <input type="password" class="password" id="userpwd" style="width:302px"  data-left="340" placeholder="密码" tabindex="2" id="LoginPass" name="LoginPass" autocomplete="off" data-val="true" data-val-regex="密码由 8 - 32 位数字、字母或常用符号组成，且必须同时包含数字和字母。" data-val-regex-pattern="^(?=.*[a-zA-Z].*)(?=.*[0-9].*)[A-Za-z0-9\^$\.\+\*_@!#%&amp;~=-]{8,32}$" data-val-required="请填写登录密码。">
                <span class="help-block">
                    <span class="field-validation-valid" data-valmsg-for="LoginPass" data-valmsg-replace="true"></span>
                </span>
            </div>
            <div class="input-wrap">


    <div id="embed-captcha"></div>
    <p id="wait" class="show">正在加载验证码......</p>
    <p id="notice" class="hide">请先完成验证</p>
	
                </div>

				
				
            <div class="input-wrap register-btn-wrap">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="agreeContract" checked="true" tabindex="4" data-val="true" data-val-extension-extension="on" data-val-extension="请勾选积木平台注册及服务协议。">
                        我已阅读并同意<a href="https://www.jimu.com/User/Contract" target="_blank">《积木平台注册及服务协议》</a><a href="https://www.jimu.com/User/Agreement" target="_blank">《风险提示及承诺》</a>
                    </label>
                </div>
                <span class="help-block">
                    <span class="field-validation-valid" data-valmsg-for="agreeContract" data-valmsg-replace="true"></span>
                </span>
                <button tabindex="5" type="button" id="act_register" class="register-btn">
                    立即注册
                </button>
            </div>
            <div>
                <p class="agreement-info">
                    <span>已有账户？<a href="http://www.zdmoney.com/user/login">登录</a></span>
                </p>
            </div>
        </form>
    </div>
    <div class="footer"></div>
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
</script>


<script>
	
	var obj = new Object;
	
	obj['username'] = $('#username').val()
	obj['userpwd']  = $('#userpwd').val()
	
	$('#act_register').on('click', function(){
		alert(obj)
		$.ajax({
			type: "GET",
			url: "<?php echo e(asset('home/user/doRegist')); ?>",
			data: obj,
			dataType: 'json',
			success: function(msg){
				
				alert( "Data Saved: " + msg );
			}
		});
	})	
	
</script>

</body>
</html>