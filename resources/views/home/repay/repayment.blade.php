<?php $arr=isset($_SESSION['user']) ? $_SESSION['user'] : '';?>
<!DOCTYPE html>
<html class="v_scrollbar"><head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>还款- 挣点钱 zdmoney.com</title>
    <meta name="keywords" content="投资理财, 互联网金融, 网络投融资平台, 网络理财, 互联网理财, 积木盒子, 投资理财, box.jimu.com">
    <meta name="description" content="积木盒子提供安全、有保障的互联网投融资服务。投资理财100元起投，1—12个月项目期限，债权转让灵活。">
    <meta name="author" content="乐融多源(北京)科技有限公司">
    <!-- start: Mobile Specific -->
    <meta name="apple-itunes-app" content="app-id=790276804">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://box.jimu.com/RepaymentPlan/Content/img/appicon114-e316198f0e.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://box.jimu.com/Content-dist/img/appicon72-b8db4af724.png">
    <link rel="apple-touch-icon-precomposed" href="https://box.jimu.com/Content-dist/img/appicon-bcf4e34e3c.png">
    <meta name="baidu-site-verification" content="23e805e02562d501312d9751851b71e6">
    <!-- end: Mobile Specific -->
    <meta property="wb:webmaster" content="9fd1b56cebfec3b3">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <!-- start: Fav Icon -->
    <link href="https://box.jimu.com/Images-dist/favicon-f824e20afc.ico" rel="shortcut icon" type="image/x-icon">
    <!-- end: Fav Icon -->

    <!-- start: Style -->
    <link href="{{ asset('css/index-42bf23dd1d.css') }}" rel="stylesheet">
    <link href="{{ asset('css/month_main-ff8081ff9b.css') }}" rel="stylesheet">
    <!--[if lt IE 9 ]>
    <link href="/Content-dist/style-ie-f145eccf98.css" rel="stylesheet">
    <![endif]-->
    <!--[if IE 9 ]>
    <link href="/Content-dist/style-ie9-45e9e6e599.css" rel="stylesheet">
    <![endif]-->
    <!-- end: Style -->

    <!-- start: Script -->
    <script type="text/javascript" async="" src="{{ asset('js/mv.js') }}"></script><script type="text/javascript" async="" src="{{ asset('js/mba.js') }}"></script><script charset="utf-8" src="%E3%80%90%E5%9B%9E%E6%AC%BE%E8%AE%A1%E5%88%92%E3%80%91-%20%E7%A7%AF%E6%9C%A8%E7%9B%92%E5%AD%90%20jimu.com_files/v.htm"></script><script type="text/javascript">
        (function () {
            if (navigator.userAgent.indexOf("MSIE 7.") > 0) {
                location.href = '/Prompt/Obsolete';
            }
        })();
    </script>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="/Scripts-dist/html5-e1019d667d.js" type="text/javascript"></script>
    <script src="/Scripts-dist/excanvas-c9bcc9f465.js" type="text/javascript"></script>
    <script src="/Scripts-dist/excanvas-8c845e87e2.compiled.js" type="text/javascript"></script>

    <![endif]-->
    <!-- end: Script -->
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="scripts/repayment_plan/month" src="{{ asset('js/month.js') }}"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="domReady" src="{{ asset('js/domReady.js') }}"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery" src="{{ asset('js/jquery.js') }}"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="common" src="{{ asset('js/common.js') }}"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="scrollup" src="{{ asset('js/jquery_002.js') }}"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="bootstrap" src="{{ asset('js/bootstrap.js') }}"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="ui-helper" src="{{ asset('js/eden.js') }}"></script><style type="text/css">#table-responsive-1 td:nth-of-type(1):before{content:'时间'}
        #table-responsive-1 td:nth-of-type(2):before{content:'已回款'}
        #table-responsive-1 td:nth-of-type(3):before{content:'未回款'}
        #table-responsive-1 td:nth-of-type(4):before{content:'总金额'}
        #table-responsive-1 td:nth-of-type(5):before{content:''}
    </style></head>
<body>


<link href="{{ asset('css/index-ef3dfa649d.css') }}" rel="stylesheet">
<div id="jimu-sup-header" class="jimu-sup-header" style="margin-bottom: 0px;">
    <div class="container">
        <div class="contactus">
            <div class="phone-wrap phone-wrap-default"><span class="jimu">欢迎致电：<strong>400-628-1176</strong></span><span class="dumiao">欢迎致电：<strong>400-707-1293</strong></span><span>服务时间：9:00 - 21:00</span></div>
        </div>
        <div class="sup-nav-other">
            <ul>
                <li><a href="https://info.jimu.com/" target="_blank">信息披露</a></li>
                <li><a href="https://box.jimu.com/Activity" target="_blank">最新活动</a></li>
                <li><a href="http://bbs.jimu.com/" target="_blank">积木坛子</a></li>
                <li><a href="https://campaigns.jimu.com/mobile-intro/" target="_blank">下载客户端</a></li>
                <li><a href="https://www.jimu.com/User/AssetOverview" title="lxy668" class="username"><?php echo  $arr['username']?></a></li>
                <li><a href="https://passport.jimubox.com//login/logout?site=A8CA1C0862C1781B7B3F6E3F1690F84F">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div id="jimu-header" class="jimu-header" style="position: relative;">
    <div class="container">
        <div class="logo"><a href="https://www.jimu.com/"><img src="{{ asset('image/logo_nav_full-9b4d613b2f.png') }}" alt="积木"></a></div>
        <div class="jimu-nav-wrap">
            <ul>
                <li><a href="http://www.zdmoney.com/" data-nav="home"><span>首页</span></a></li>
                <li><a href="/invest/invest" data-nav="venus"><span>轻松投</span></a></li>
                <li><a href="/lenging/lenging" data-nav="loan"><span>借款</span></a></li>
                <li><a href="/gold/gold" data-nav="loan"><span>贵金属</span></a></li>

                <li class="pull-right"><a href="/personal/personal" data-nav="account"><span>个人中心</span></a></li>
            </ul>
        </div>
    </div>
</div>
<div class="online-service hidden-phone"><a href="https://box.jimu.com/Help/Center" target="_blank" class="online-service-title">
        <div class="social-qq-pure"></div>
        <h4>在线客服</h4></a></div>
<script src="{{ asset('js/header-init-8dc16d38ce.js') }}"></script><div class="container jimu-account-container">
    <div class="jimu-account-nav-wrap">
        <div class="jimu-leftnav" data-version="4">
            <ul>
                <ul class="jimu-leftsecnav">
                    <li><a data-nav="user-center" class="" href="{{ url('personal/personal') }}">安全设置</a></li>
                    <li><a data-nav="user-center" class="" href="{{ url('cz/index') }}">账户充值</a></li>
                    <li><a data-nav="user-center" class="" href="{{ url('personal/addImage') }}">添加头像</a></li>
                    <li><a data-nav="user-center" class="" href="{{ url('personal/changePwd') }}">修改密码</a></li>
                    <li><a data-nav="user-center" class="" href="{{ url('personal/setNumber') }}">认证手机</a></li>
                    <li><a data-nav="user-center" class="" href="{{ url('personal/bindEmail') }}">绑定邮箱</a></li>
                    <li><a data-nav="user-center" class="" href="{{ url('personal/setAddress') }}">添加地址</a></li>
                    <li><a data-nav="user-center" class="active highlight asset-overview" href="{{ url('molans/repay') }}">我要还款</a></li>
                    <li><a data-nav="user-center" class="" href="{{ url('personal/idCard') }}">绑定身份证</a></li>
                </ul>
                <ul class="jimu-leftsecnav">
                    <li>
                    </li>
                </ul>

                <ul class="jimu-leftsecnav">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>

            </ul>
        </div>
    </div>
    <div class="jimu-account-content-wrap">
        <div class="container">
            <div class="row-fluid">
                <div class="span12 ">
                    <div class="module-header">
                        <h6>待还款</h6>
                    </div>
                </div>
            </div>

            <div>
                <?php foreach ($repay as $k=>$v){?>
                            <input type="hidden" id="amount" value="<?php echo $v->principal ?>"/>
                            <input type="hidden" id="rate" value="<?php echo $v->loan_interset ?>"/>
                            <input type="hidden" id="period" value="<?php echo $v->loan_long ?>"/>
                            <input type="hidden" id="typ" value="<?php echo $v->lenging_type ?>"/>
                <?php } ?>
            </div>

            <div class="row-fluid">
                <div class="span12 ">
                    <table class="table table-responsive" id="table-responsive-1">
                        <thead>
                        <tr>
                            <th width="100px">期限</th>
                            <th class="num-label">还款时间</th>
                            <th class="num-label">还款总额</th>
                            <th class="num-label">本金</th>
                            <th class="num-label">利息</th>
                            <th class="num-label">操作</th>
                            <th width="150px"></th>
                        </tr>
                        </thead>
                        <tbody id="result">

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
	</body>
  
  
  
  
  
  
  
</div>
<div class="jm-footer">
    <div class="footer-container">
        <div class="footer-info">
            <div class="footer-links">
                <div class="link">
                    <ul>
                        <li class="title">关于积木</li>
                        <li><a href="https://www.jimu.com/Home/About" target="_blank">公司介绍</a></li>
                        <li><a href="https://www.jimu.com/Home/Team" target="_blank">管理团队</a></li>
                        <li><a href="https://www.jimu.com/Issue/List?Category=News" target="_blank">媒体报道</a></li>
                        <li><a href="https://www.jimu.com/Issue/Platform" target="_blank">平台公告</a></li>
                        <li><a href="https://www.jimu.com/Home/Info" target="_blank">法律声明</a></li>
                    </ul>
                </div>
                <div class="link">
                    <ul>
                        <li class="title">安全保障</li>
                        <li><a href="https://www.jimu.com/Security/Operation" target="_blank">合规运营</a></li>
                        <li><a href="https://www.jimu.com/Security/Depository" target="_blank">资金存管</a></li>
                        <li><a href="https://www.jimu.com/Security/SafeGuard" target="_blank">风险缓释</a></li>
                        <li><a href="https://www.jimu.com/Security/Safety" target="_blank">信息安全</a></li>
                    </ul>
                </div>
                <div class="link">
                    <ul>
                        <li class="title">信息披露</li>
                        <li><a href="https://info.jimubox.com/" target="_blank">平台数据</a></li>
                        <li><a href="https://info.jimu.com/report" target="_blank">运营年报</a></li>
                        <li><a href="https://info.jimu.com/finance" target="_blank">财务信息</a></li>
                        <li><a href="https://box.jimu.com/Issue/List?Category=RepaymentNotification" target="_blank">还款公告</a></li>
                    </ul>
                </div>
                <div class="link">
                    <ul>
                        <li class="title">自助服务</li>
                        <li><a href="https://box.jimu.com/Help/Center" target="_blank">帮助中心</a></li>
                        <li><a href="https://box.jimu.com/Home/Calculator" target="_blank">收益计算器</a></li>
                        <li><a href="https://www.jimu.com/FeeScale" target="_blank">资费标准</a></li>
                    </ul>
                </div>
            </div>
            <div class="contact-us">
                <div class="contact-container">
                    <div class="contact-words">
                        <div class="phone">400-628-1176</div>
                        <div class="contact-info"><span class="msg"><img src="{{ asset('image/email-dafffe36ff.png') }}"></span><span><a href="mailto:info@jimubox.com">客服邮箱</a></span><span class="msg"><img src="{{ asset('image/headset-47aedf6e8a.png') }}"></span><span><a href="https://box.jimu.com/Help/Service">在线客服</a></span></div>
                        <div>服务时间：<span class="word">9:00 - 21:00</span></div>
                    </div>
                    <div class="contact-code"><img src="{{ asset('image/TCode-6cf118ddcd.png') }}"></div>
                </div>
            </div>
        </div>
        <div class="copyright"><span>北京乐融多源信息技术有限公司 © 2017 Jimu.com |&nbsp;<a href="http://www.jimugroup.com/" target="_blank">积木拼图集团</a></span>
            <div class="verify"><span><a href="http://lead.jimubox.com/icp/" target="_blank">京ICP证140334号</a></span><span>京ICP备12049103号-3</span><span class="beian"><a href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010502030854" target="_blank"><img src="{{ asset('image/beian-010583ba73.png') }}"></a></span><span class="word">京公网安备11010502030854</span><span class="seal"><a href="https://trustsealinfo.verisign.com/splash?form_file=fdf/splash.fdf&amp;dn=www.jimu.com&amp;lang=zh_cn" target="_blank"><img src="{{ asset('image/v_seal-7b3d8802eb.png') }}"></a></span><span class="cnnic"><a href="https://ss.knet.cn/verifyseal.dll?sn=e13102311010043020g7bl000000&amp;ct=df&amp;a=1&amp;pa=0.03119715587944666" target="_blank"><img src="{{ asset('image/cnnic-ab3646ddb7.png') }}"></a></span><span class="cert"><a href="https://search.szfw.org/cert/l/CX20141121005617005702" target="_blank"><img src="{{ asset('image/cert-a82b3df3c9.png') }}"></a></span><span class="wx-seal"><a href="http://www.itrust.org.cn/yz/pjwx.asp?wm=1592382670" target="_blank"><img src="{{ asset('image/wx_seal-b39ab6d2b1.png') }}"></a></span></div>
        </div>
    </div>
</div><script type="text/javascript">
    var require = {
        baseUrl: '/Content-dist',
        urlArgs: 'ver='+1499140606462,
        paths: {
            'jquery': 'bower_components/jquery/dist/jquery.min',
            'bootstrap': 'bower_components/bootstrap-stylus/js/bootstrap.min',
            'scrollup': 'bower_components/scrollup/dist/jquery.scrollUp.min',
            'ui-helper': 'scripts/eden.ui.helper',
            'domReady': 'bower_components/requirejs-domready/domReady',
            'common': 'scripts/common'
        },
        shim: {
            'bootstrap': {
                deps: ['jquery']
            },
            'scrollup': {
                deps: ['jquery']
            },
            'ui-helper': {
                deps: ['jquery', 'bootstrap']
            }
        },
        waitSeconds: 60,
        deps: ['scripts/repayment_plan/month']
    };
</script>

<script>
    $(document).ready(function() {
        var amount = $('#amount').val().trim();
        var rate = $('#rate').val().trim();
        var period = $('#period').val().trim();
        var type = $('#typ').val().trim();

        amount = parseFloat(amount);
        rate = parseFloat(rate);
        period = parseFloat(period);

        if (type == '1') {
            debx(amount, rate, period);
        }
    });

        //等额本息
        function debx(amount, rate, period) {
            //每月还款金额
            var month_rate = rate / 100 / 12;
            amount = parseFloat(amount);
            var month_total = parseFloat(amount * month_rate * Math.pow((1 + month_rate), period) / (Math.pow((1 + month_rate), period) - 1));
            month_total = parseFloat(month_total.toFixed(2));

            var total_amount = parseFloat((month_total * period).toFixed(2));
            var total_interest = parseFloat((total_amount - amount).toFixed(2));
            total_amount = (total_amount == null || total_amount == '' || total_amount == 0) ? '0.00' : total_amount;
            total_interest = (total_interest == null || total_interest == '' || total_interest == 0) ? '0.00' : total_interest;

            $("#ben_xi").html(formatMoney(total_amount.toString()) + '元');
            $("#li_xi").html(formatMoney(total_interest.toString()) + '元');


            var str = '';
            for (var i = 1; i <= period; i++) {
                //月还利息
                var current_principal = parseFloat(amount * month_rate * Math.pow((1 + month_rate), i - 1) / (Math.pow((1 + month_rate), period) - 1));
                var current_interest = parseFloat(month_total) - parseFloat(current_principal);
                current_principal = current_principal.toFixed(2);
                current_interest = current_interest.toFixed(2);
                var date = getRefundDate(i);

                show_month_total = formatMoney(month_total);
                show_current_principal = formatMoney(current_principal);
                show_current_interest = formatMoney(current_interest);


                str += '<tr><th width="100px">第' + i + '期</th>';
                str += '<th class="num-label">' + date + '</th>';
                str += '<th class="num-label" id="month_total">' + show_month_total + '</th>';
                str += '<th class="num-label">' + show_current_principal + '元</th>';
                str += '<th class="num-label">' + show_current_interest + '元</th>';
                str += '<th class="num-label" id="with"><button  class="rep">还款</button></th>';
                str += '<th width="150px"></th></tr>';
            }

            $("#result").html(str);
        }

        //获取每一期的还款时间
        function getRefundDate(period) {
            var date = new Date();
            var new_date = new Date(date.setDate(date.getDate() + period * 30));

            var year = new_date.getFullYear();
            var month = new_date.getMonth() + 1;
            var date1 = new_date.getDate();

            return year + '-' + month + '-' + date1;
        }

    //格式化资金
    function formatMoney(v) {
        if(isNaN(v)){
            return v;
        }
        v = (Math.round((v - 0) * 100)) / 100;
        v = (v == Math.floor(v)) ? v + ".00" : ((v * 10 == Math.floor(v * 10)) ? v
            + "0" : v);
        v = String(v);
        var ps = v.split('.');
        var whole = ps[0];
        var sub = ps[1] ? '.' + ps[1] : '.00';
        var r = /(\d+)(\d{3})/;
        while (r.test(whole)) {
            whole = whole.replace(r, '$1' + ',' + '$2');
        }
        v = whole + sub;

        return v;
    }

    $(document).on("click",".rep",function(){
        var month_total =$('#month_total').html();
        $.ajax({
            type:"get",
            url:"/molans/withpay",
            data:{
                "month_total":month_total
            },
            success:function (data) {
                if(data==0){
                    alert('余额不足请充值');
                }
                if(data==1){
                    $("#with").replaceWith('<th class="num-label">以还款</th>');
                }
            }
        })
    })

</script>
<script src="{{ asset('js/require-16035e47b8.js') }}" async=""></script>
<script src="{{ asset('js/font_2vki31oofhudte29.js') }}"></script>
<script src="{{ asset('js/settingsForBox-6792096396.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/init-fc412db349.js') }}" type="text/javascript"></script><script src="{{ asset('js/hm_002.js') }}"></script><script src="{{ asset('js/hm.js') }}"></script>

<script type="text/javascript" async="" src="{{ asset('js/dc.js') }}"></script><script type="text/javascript" async="" src="{{ asset('js/agt.js') }}"></script><script type="text/javascript" async="" src="{{ asset('js/conversion.js') }}"></script><script type="text/javascript" async="" src="{{ asset('js/mvl.js') }}"></script><a id="scrollUp" href="#top" style="display: none; position: fixed; z-index: 1099;"></a><iframe src="{{ asset('css/store.htm') }}" style="display: none;" width="0" height="0"></iframe></body></html>

