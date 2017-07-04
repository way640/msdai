<?php $arr = isset( $_SESSION['user']['user_id'] ) ? $_SESSION['user']['user_id'] : ''?>
@extends('Home.title')
@section('content')

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>积木盒子-轻松投</title>
    <!-- start: Mobile Specific -->
    <meta name="apple-itunes-app" content="app-id=790276804">
    <meta name="baidu-site-verification" content="23e805e02562d501312d9751851b71e6">
    <!-- end: Mobile Specific -->
    <meta property="wb:webmaster" content="9fd1b56cebfec3b3">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <!-- start: Style -->
    <link href="{{ asset('css/index-42bf23dd1d.css') }}" rel="stylesheet">
    <link href="{{ asset('css/list-0e6f6758cb.css') }}" rel="stylesheet">
<!--[if lt IE 9 ]>
    <link href="/Content-dist/style-ie-f145eccf98.css" rel="stylesheet">
    <![endif]-->
    <!--[if IE 9 ]>
    <link href="/Content-dist/style-ie9-45e9e6e599.css" rel="stylesheet">
    <![endif]-->
    <!-- end: Style -->

    <!-- start: Script -->
    <script type="text/javascript" src="{{ asset('jeDate/jedate.js') }}"></script>
    <script  type="text/javascript" src="{{ asset('js/jquery-1.3.2.min.js') }}"></script>

    <script src="{{ asset('js/hm.js') }}"></script><div class="container venus-container">
        <div class="banner">
        <img src="{{ asset('image/venus_banner-55eb2b8744.png') }}" alt="轻松投banner">
        <a href="javascript:;" class="banner-btn" target="_blank">查看攻略</a>
        </div>
        <div class="project-container">
            <h2 class="title">填写放款信息</h2>
            <div class="result-wrap" style="text-align:center">
                <div class="result-content" >
                    <form action="/mloans/loan" method="post" id="myform" name="myform" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <?php foreach($data as $k=>$v){?>
                        <input type="hidden" name="user_money" value="<?php echo $v->user_money?>">
                        <?php } ?>
                        <table class="insert-tab" width="100%">
                            <tbody><tr>
                                <th width="120">放款金额：</th>
                                <input type="hidden" id="uid" value="<?php echo $arr?>">
                                <td>
                                    <input class="common-text required" id="money" name="lenging_money" size="50" value="" type="text" required onkeyup='this.value=this.value.replace(/\D/gi,"")'>
                                    <div class="tbody"></div>
                                </td>
                            </tr>
                            <tr>
                                <th align="right">放款开始时间：</th>
                                <td>
                                    <p class="datep"><input class="datainp" id="dateinfo" type="text" name="lenging_start_time"  placeholder="请选择" readonly  required></p>
                                    <div class="start"></div>
                                </td>
                            </tr>
                            <tr>
                                <th>放款结束时间：</th>
                                <td>
                                    <p class="datep"><input class="datainp" id="dateinfo2" type="text" name="lenging_end_time"  placeholder="请选择"  readonly  required></p>
                                    <div class="end"></div>
                                </td>
                            </tr>
                            <tr>
                                <th>放款年利率：</th>
                                <td><input class="common-text" name="lenging_interest" size="50" value="" type="text" id="inter" required></td>
                            </tr>
                            <tr>
                                <th>回款分配类型：</th>
                                <td>
                                    <select name="lenging_type" class="common-text">
                                        <option value="1">本息回款</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <th>当前可用额度：</th>
                                <td>
                                    <input class="common-text required" id="ed" name="lenging_quota" size="50" value="" type="text" readonly>
                                    <div class="ts"></div>
                                </td>
                            </tr>
                            <tr>
                                <th>最终收款：</th>
                                <td>
                                    <input class="common-text required" id="zui" name="lenging_total" size="50" value="" type="text" disabled>
                                </td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    @if ( $arr )
                                     <input class="btn btn-primary btn6 mr10" value="提交" type="submit" id="butt">
                                    @else
                                     <input class="btn btn-primary btn6 mr10" value="提交" id="but" type="button">
                                    @endif
                                </td>
                            </tr>
                            </tbody></table>
                    </form>
                </div>
            </div>
            <div id="mask" class="mask"></div>
            <div id="prod" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" style="display: none;"><span id="transmark" style="display: none; width: 0px; height: 0px;"></span>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="nozhe">X</button>
                    <h3 id="myModalLabel">提示</h3>
                </div>
                <center>
                <div class="modal-body">
                    <p><span class="btn-modal-apply-win">请先登录</span></p>
                </div>
                </center>
                <div class="modal-footer">
                    <a href="/user/regist" class="btn btn-apply-big btn-modal-apply">免费注册</a>
                    <a href="/user/login" class="btn btn-apply-big btn-modal-apply">登录</a>
                </div>
            </div>
            <style type="text/css">
                .contact-us .qrcode img {
                    width: 100%;
                    height: 100%;
                }
                .modal-header{
                    background: #4687cc;
                }
                .modal-footer .btn{
                    color: white;
                    background: #4687cc;
                }
                .mask {
                    position: absolute; top: 0px; filter: alpha(opacity=60); background-color: #000;
                    z-index: 1002; left: 0px;
                    opacity:0.5; -moz-opacity:0.5;
                }
            </style>

            <script>
                //计算客户的可用余额和最终收益
                $('#money,#inter').blur(function ()
                {
                    var uid=$('#uid').val();
                    var num=$('#money').val();
                    var inter=$('#inter').val();
                        if(num<1000)
                        {
                            $('.tbody').html("<font color='red' size='2px'>最低加入金额 1,000元，上限500,000元</font>");
                        }
                        else if(num>=1000)
                        {
                            $.ajax({
                                type:"post",
                                url:"/mloans/dal",
                                data:{
                                    "uid":uid,
                                    "num":num,
                                    "inter":inter
                                },
                                dataType: "json",
                                success:function (data)
                                {
                                    var quota=data.quota;
                                    var sum=quota-num;
                                    var interest=data.interest;
                                    if(sum<0)
                                    {
                                       $('#money').val('');
                                        $('#zui').val('');
                                        $('#ed').val(quota);

                                    }else{
                                        if(uid=='')
                                        {
                                            $('.ts').html('<font color="red" size="2px">可用额度登录后显示</font>');
                                        }
                                        else
                                        {
                                            $('#ed').val(sum);
                                        }
                                        $('#zui').val(interest);
                                    }
                                    }

                            });
                            $('.tbody').html('');
                        }
                });


                $('#but').click(function ()
                {
                    $("#mask").css("height",$(document).height());
                    $("#mask").css("width",$(document).width());
                    $("#mask").show();
                    $('#prod').show();
                });


                $('#nozhe').click(function ()
                {
                    $("#mask").hide();
                    $('#prod').hide();

                });


                //日期插件
                jeDate({dateCell:'#dateinfo',isTime:true,format:'YYYY-MM-DD hh:mm:ss'});
                jeDate({dateCell:'#dateinfo2',isTime:true,format:'YYYY-MM-DD hh:mm:ss'});


                $('#butt').click(function ()
                {
                    var dateinfo=$('#dateinfo').val();
                    var dateinfo2=$('#dateinfo2').val();
                    if(dateinfo=='')
                    {
                        $('.start').html('<font color="red" size="2px">请选择放款开始时间</font>');
                        return false;
                    }
                    if(dateinfo2=='')
                    {
                        $('.end').html('<font color="red" size="2px">请选择放款结束时间</font>');
                        return false;
                    }
                });


                $('#dateinfo,#dateinfo2').focus(function ()
                {
                    var dateinfo=$('#dateinfo').val();
                    var dateinfo2=$('#dateinfo2').val();
                    if(dateinfo!='')
                    {
                        $('.start').hide();
                    }
                    if(dateinfo2!=''){
                        $('.end').hide();
                    }
                })
            </script>

                </div>
        </div>
    </div>
    <div class="flow">
        <div class="container">
            <div class="title">使用流程</div>
            <div class="flow-container">
                <div class="flow-content">
                    <img src="{{ asset('image/flow-37925c4dae.png') }}" alt="使用流程">
                </div>
                <div class="flow-word">
                    <span class="join">加入轻松投</span>
                    <span class="com">完成投标</span>
                    <span class="fin">投资结束</span>
                    <span class="out">退出操作</span>
                </div>
            </div>
        </div>
    </div>
    <div class="method-banner">
        <div class="container">
            <div class="method-all-banner"><img src="{{ asset('image/banner-250036630a.jpg') }}"></div>
            <div class="method-words">
                <div class="method-title">资金有规划，投标不放假</div>
                <div class="method-word-content">轻松投为积木盒子推出的高效自动投标工具。经用户授权后，系统为用户实现自动投标，满足用户方便快捷完成投资的需求。投资和收益回款稳定，有效进行投资规划。预期收益不等于实际收益，投资人需自行承担资金出借的风险与责任。市场有风险，投资需谨慎。</div>
            </div>
        </div>
    </div>
@stop
