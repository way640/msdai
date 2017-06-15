<!DOCTYPE html>
<!-- saved from url=(0031)https://www.jimu.com/User/Login -->
<html class="v_scrollbar"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
<title>用户登录</title>
<base href="./../../">
<meta name="keywords" content="投资理财, 互联网金融, 网络投融资平台, 网络理财, 互联网理财, 积木盒子, 投资理财, www.jimu.com">
<meta name="description" content="积木盒子提供安全、有保障的互联网投融资服务。投资理财100元起投，1—12个月项目期限，债权转让灵活。">
<meta name="author" content="乐融多源(北京)科技有限公司">

<meta name="apple-itunes-app" content="app-id=790276804">
<!-- end: Meta -->
<meta property="wb:webmaster" content="9fd1b56cebfec3b3">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<!-- start: Fav Icon -->
<link href="https://www.jimu.com/favicon.ico?1496827969552" rel="shortcut icon" type="image/x-icon">
<<<<<<< HEAD
<link href="css/general-541378b38b.css" rel="stylesheet">
    <link href="css/login_main-137a6f8775.css" rel="stylesheet">
</head>
<body>

<script type="text/javascript" async="" src="js/mv.js"></script>
<script type="text/javascript" async="" src="js/mba.js"></script>
<script charset="utf-8" src="js/v.js"></script>
<script type="text/javascript">
        function formLoadingAction(flag) {
            var loadtxt = document.getElementById("login-form-loading");
            var iframec = document.getElementById("iframe-c");
            loadtxt.className = flag ? "hidden-default" : "";
            iframec.className = flag ? "" : "hidden-default";
        }
    </script>
    <div class="page-desc js-ignore-pagemark">
        <!-- start:Page-desc-inner -->
        <div class="page-desc-inner">
            <div class="container">
                <a href="https://www.jimu.com/">
                    <img src="image/jimu-232871d0cb.png">
                </a>
                <h1>登录</h1>
            </div>
        </div>
    </div>

    <div class="container login-wrap">
        <div class="row">
            <div class="col-xs-7"></div>
            <div class="col-xs-5">
            </div>
        </div>
        <div class="row">

            <div class="col-xs-7">
                <a href="https://www.jimu.com/Issue/Jimu/2243" target="">
                        <img alt="登录页活动图" src="file/07a662f4-3d1d-42d5-8806-084234e29cf0">
                    </a>
                </div>

            <div id="login-form">
                <div id="login-form-loading" class="hidden-default"></div>
                <div class="" id="iframe-c">
                    <iframe id="iframe_login" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" onload="formLoadingAction(&#39;loaded&#39;)" onunload="formLoadingAction()" src="../resources/views/home/user/loginForm.blade.php">
                    </iframe>
                </div>
            </div>

        </div>
        <!-- end:Wall -->
    </div>

    <div id="sink-footer"></div>
    <div class="footer-container">
        <div class="footer-container-bg"></div>
=======
<link href="../../css/general-541378b38b.css" rel="stylesheet">
<link href="../../css/register_main-286e89e052.css" rel="stylesheet">
    
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>账号登录</title>
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
<div class="register-logo">
        <a href="https://www.jimu.com/" target="_blank">
            <img src="../../image/logo-5464fa9708.png" alt="logo">
        </a>
    </div>
    <div class="register-main">
        <h2>登录账户</h2>
        <form class="popup">
        {{ csrf_field() }}
            <input type="hidden" name="redirectUrl" value="">
            <div class="input-wrap">
                        <span class="input-tip">用户名</span>
                        <input data-val="true" placeholder="用户名/手机/邮箱" data-left="100" data-val-regex="用户名错误。" data-val-regex-pattern="[A-Za-z0-9_@.-]{6,100}" data-val-required="请填写用户名/手机号/邮箱。" id="username" name="username" tabindex="1" type="text" value="" onfocus="this.parentNode.className=&#39;input-wrap focusin&#39;" onblur="this.parentNode.className=&#39;input-wrap&#39;">
                        <span class="help-block"><span class="field-validation-valid" data-valmsg-for="username" data-valmsg-replace="true"></span></span>
                    </div>
                    <div class="input-wrap">
                        <span class="input-tip">密码</span>
                        <input autocomplete="off" placeholder="密码" data-left="100" data-val="true" data-val-length="登录密码必须由6-32位字符组成。" data-val-length-max="32" data-val-length-min="6" data-val-required="请填写登录密码。" id="password" name="password" tabindex="2" type="password" onfocus="this.parentNode.className=&#39;input-wrap focusin&#39;" onblur="this.parentNode.className=&#39;input-wrap&#39;">
                        <span class="help-block"><span class="field-validation-valid" data-valmsg-for="password" data-valmsg-replace="true"></span></span> 
                    </div>
            <div class="input-wrap">
    <div id="embed-captcha"></div>
    <p id="wait" class="show">正在加载验证码......</p>
    <p id="notice" class="hide">请先完成验证</p>
                </div>
            <div class="input-wrap register-btn-wrap">
                <div class="checkbox">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="agreeContract" checked="true" tabindex="4" data-val="true" data-val-extension-extension="on" data-val-extension="请勾选积木平台注册及服务协议。">
                            我已阅读并同意<a href="https://www.jimubox.com/User/Contract" target="_blank">《积木平台注册及服务协议》</a>
                        </label>
                    </div>
                    <span class="help-block">
                        <span class="field-validation-valid" data-valmsg-for="agreeContract" data-valmsg-replace="true"></span>
                    </span>
                <button tabindex="5" type="button" id="act_register" class="register-btn">
                    登录
                </button>
            </div>
            <div id="oauth_www" class="padding-c">
                <p class="login-other">
                    <span class="login-label">使用第三方账号登录</span>
                    <a class="login-icon" target="_blank" href="#" title="使用新浪微博账号登录"><img alt="使用新浪微博账号登录" src="image/weibo_icon.png"></a>
                    <span class="split">|</span>
                    <a class="forget-pwd" target="_blank" href="#">忘记密码？</a>
                    <a href="http://www.zdmoney.com/user/regist" target="_blank" id="act_login_register">免费注册</a>
                </p>
            </div>
        </form>
>>>>>>> 29ecd98031fa057730189662fdacd2a283d24b7b
    </div>

<script src="js/jquery-07fd0237c1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            // qrcode hover
            $('#jm-download-qr').mouseover(function() {
                $(this).parent().animate({
                    height: '183px'
                }, 500).end()
                        .next().animate({
                            marginTop: '-8px'
                        }, 500);
            }).mouseout(function() {
                $(this).parent().animate({
                    height: '46px'
                }, 500).end().next().animate({
                    marginTop: '-129px'
                }, 500);
            });
        });
    </script>
<script src="js/settings-88ea31cf32.js" type="text/javascript"></script>
<script src="js/init-fc412db349.js" type="text/javascript"></script>
<script src="js/hm.js"></script>
<script src="js/hm.js(1).下载"></script>


<<<<<<< HEAD
=======
<script>
    
    var obj = new Object();
    
    obj['username'] = $('#username').val()
    obj['userpwd']  = $('#userpwd').val()
    
    $('#act_register').on('click', function(){
        
        $.ajax({
            type: "POST",
            url: "http://www.zdmoney.com/home/user/doRegist",
            data: obj,
            success: function(msg){
                
                alert( "Data Saved: " + msg );
            }
        });
    })  
    
</script>
>>>>>>> 29ecd98031fa057730189662fdacd2a283d24b7b

<script type="text/javascript" async="" src="js/dc.js"></script>
<script type="text/javascript" async="" src="js/agt.js"></script>
<script type="text/javascript" async="" src="js/conversion.js"></script>
<script type="text/javascript" async="" src="js/mvl.js"></script>
<img src="image/pv" style="display: none; width: 0px; height: 0px;">
</body>
</html>