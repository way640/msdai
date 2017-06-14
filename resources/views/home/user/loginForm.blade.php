<!DOCTYPE html>
<!-- saved from url=(0153)https://passport.jimubox.com/authentication/loginForm?site=B662B0F090BE31C1DCB6A13D70E81429&redirectUrl=https%3A%2F%2Fwww.jimu.com%2FUser%2FAssetOverview -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>积木盒子登陆中心</title>
    <link href="css/loginform.css" rel="stylesheet">
    <script src="js/applycookie.js"></script>
</head>
<body marginwidth="0" marginheight="0">

<div class="container login-wrap">

    <div class="span5">
        <div class="login-container">
            <div class="control-panel-header padding-c">
                <h4 class="pull-left">登录</h4>
                <div class="pull-right">
                    <span>没有账号？</span>
                    <a href="https://www.jimu.com/User/Register" target="_blank" id="act_login_register">免费注册</a>
                </div>
            </div>
            <div class="padding-c">
                <hr>
            </div>

            <form action="https://passport.jimubox.com/authentication/login?redirectUrl=https://www.jimu.com/User/AssetOverview" method="post" novalidate="novalidate">
                <div class="padding-c">
                    <input type="hidden" name="site" value="B662B0F090BE31C1DCB6A13D70E81429">
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
            </div>

            <div id="minsheng_hint">
                <h3>
                    <img src="image/cmbc-logo-mini.png" class="cmbc-logo">积木盒子资金由民生银行全程托管
                </h3>
            </div>

            <div class="login-btn-wrap padding-c">
                <div class="contract">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="agreeContract" checked="true" tabindex="4" data-val="true" data-val-extension-extension="on" data-val-extension="请勾选积木平台注册及服务协议。">
                            我已阅读并同意<a href="https://www.jimubox.com/User/Contract" target="_blank">《积木平台注册及服务协议》</a>
                        </label>
                    </div>
                    <span class="help-block">
                        <span class="field-validation-valid" data-valmsg-for="agreeContract" data-valmsg-replace="true"></span>
                    </span>
                </div>
                <button type="submit" id="act_login" class="login-btn" tabindex="5">登录</button>
            </div>
            </form>
            <div id="oauth_www" class="padding-c">
                <p class="login-other">
                    <span class="login-label">使用第三方账号登录</span>
                    <a class="login-icon" target="_blank" href="https://www.jimubox.com/oauth/login?target=xiaomi" title="使用小米账号登录"><img alt="使用小米账号登录" src="./mi_icon.png"></a>
                    <a class="login-icon" target="_blank" href="https://www.jimubox.com/oauth/login?target=weibo" title="使用新浪微博账号登录"><img alt="使用新浪微博账号登录" src="./weibo_icon.png"></a>
                    <span class="split">|</span>
                    <a class="forget-pwd" target="_blank" href="https://www.jimu.com/User/Forgot/Password">忘记密码？</a>
                </p>
            </div>
        </div>
    </div>

</div>


<script src="./jquery.min.js.下载"></script>
<script src="./jquery.validate.min.js.下载"></script>
<script src="./jquery.validate.unobtrusive.min.js.下载"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $.validator.addMethod('accept', function (value, element, param) {
            if (value) {
                return true;
            }
            return false;
        });
    });
</script>

</body></html>