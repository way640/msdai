@extends('Home1.header')
@section('content')
<!--公告 -->
<div id="gy_guide_safety_xzk">
    <div class="px1000">
        <div class="gy_guide_index_xzk_header" style="margin-bottom:20px;">
            <img src="images/gy_guide_index_xzk_picx.png"/>
            <span><a href="{{url('')}}">首页</a></span>
            >
            <span><a href="{{url('aboutus/index')}}">关于我们</a></span>
        </div>
    </div>
    <div class="px1000" id="gy_guide_announcement">
        <div class="clearfix gy_guide_announcement_bigbox">
            <div class="fl gy_guide_announcement_left">
                <nav>
                    <p class="gy_member_submenu_zc"><a href="">立即注册</a></p>
                    <ul class="gy_member_submenu_content">
                        <li class="gy_member_current" id="gy_member_current_gywm">
                            <div class="gy_member_current_bg_bottom" >
                                <span class="gy_member_current_bg" id="gy_gywmbg"></span>
                                <span class="gy_member_current_bg_border">关于我们</span>
                            </div>
                            <ul class="df_member_submenu_ul" >
                                <li><span>&nbsp;</span><a href="javascript:;"  class="gsqbtx">公司简介</a></li>
                                <li><span class="df_member_submenu_bgpic">&nbsp;</span><a href="javascript:;" class="gsgg">公司公告</a></li>
                                <li><span class="df_member_submenu_bgpic">&nbsp;</span><a href="javascript:;" class="cpjs">产品介绍</a></li>
                                <li><span class="df_member_submenu_bgpic">&nbsp;</span><a href="javascript:;" class="lxwm">联系我们</a></li>
                                <li><span class="df_member_submenu_bgpic">&nbsp;</span><a href="javascript:;">加入我们</a></li>
                            </ul>
                        </li>
                        <li class="gy_member_current" id="gy_member_current_mtbd">
                            <div class="gy_member_current_bg_bottom">
                                <span class="gy_member_current_bg"></span>
                                <span class="gy_member_current_bg_border">媒体报道</span>
                            </div>

                        </li>
                        <li class="gy_member_current" id="gy_member_current_hydt">
                            <div class="gy_member_current_bg_bottom">
                                <span class="gy_member_current_bg"></span>
                                <span class="gy_member_current_bg_border">行业动态</span>
                            </div>
                        </li>
                        <li class="gy_member_current" id="gy_member_current_lxwm">
                            <div class="gy_member_current_bg_bottom">
                                <span class="gy_member_current_bg"></span>
                                <span class="gy_member_current_bg_border">业务模式</span>
                            </div>
                        </li>
                        <li class="gy_member_current" id="gy_member_current_bzzx">
                            <div class="gy_member_current_bg_bottom">
                                <span class="gy_member_current_bg"></span>
                                <span class="gy_member_current_bg_border">帮助中心</span>
                            </div>
                        </li>
                    </ul>
                    <div class="gy_member_current_down_pic">
                        <a href="">
                            <img src="images/gy_member_submenu_xinshou.png">
                        </a>
                    </div>
                    <div class="gy_member_current_down_fonts">
                        <p style="font-size:14.79px;">客服热线</p>
                        <p style="font-size:17.94px;color:#29A7E1;padding:10px 0px;">400-8944-400</p>
                        <p style="font-size:10.35px;color:#A7A7A7;padding-bottom:80px;">（周一至周日 08:00 - 22:00）</p>
                    </div>
                </nav>
            </div>

            <!--split line-->
            <!--公司简介-->
            <div class="fl gy_guide_announcement_rigth" id="gsjj" style="display:block;text-align:left;">
                <p class="gy_guide_announcement_r_header">公司简介</p>
                <div class="gy_guide_announcement_rigth_cpup">
                    <p class="gy_guide_ant_rh_tu_mian">
                        <span class="gy_guide_ant_rh_tu">&nbsp;</span>
                        <span>马上贷投资有限责任公司</span>
                    </p>
                    <img src="images/gy_guide_announcement_r_header_up_picture.png">
                    <div class="gy_gunt_rigth_context_main">
                        马上贷网站成立于1999年8月，是中国现代新型金融行业的成员之一，由上海宏烨马上贷工作室实际运营与管理，是目前中国领先的以证券交易为核心的互联网综合理财平台。马上贷网站在“让投资更简单”的使命驱动下，凭借庞大的用户群，及业界领先的服务团队，为中国日益庞大的投资者打造、并不断拓展和优化互联网综合理财平台。</div>

                </div>
                <div class="gy_guide_announcement_rigth_cpdown">
                    <p class="gy_guide_ant_rh_tu_mian"><span class="gy_guide_ant_rh_tu">&nbsp;</span><span>马上贷（上海）金融信息服务有限公司</span></p>
                    <div class="clearfix">
                        <div class="gy_gunt_rigth_context_main fl" style="width:530px;">
                            通过对数据和资讯内容进行分层、挖掘和潜心研发，马上贷网站从2017年开始相继推出“盈利宝”、“爱投顾”等互联网金融服务平台。其中，爱投顾于2014年12月16日，在网站和移动端同时上线，成为中国最早的互联网证券投顾服务平台。爱投顾作为国内最早的普惠金融实践者，是马上贷上市十周年的战略转型之举。通过与国内多家优秀券商进行战略合作，爱投顾聚集了业内顶尖券商及投资咨询公司的投资顾问（简称投顾）资源，深入挖掘投顾专业价值，引导中小投资者理性投资。平台可为广大投资者提供集证券开户、股市直播、问股咨询、组合内参、个股交易等一站式证券投资服务。2015年，爱投顾更是以创新的互联网思维、资深的行业基础、专业的平台运营能力、先进的盈利模式获得了用户、券商机构及行业协会的认可，中国证券业协会将爱投顾作为典型案例引入最新发布的《中国证券业发展报告2017》。
                        </div>
                        <div><img class="fl" src="images/gy_guide_announcement_r_header_up_picturetwo.png"></div>
                    </div>
                </div>
                <div class="gy_guide_announcement_vision">
                    <span class="gy_guide_announcement_vision_bg">公司愿景：</span>

                    <span class="gy_guide_announcement_vision_bg_wz">做中国最具影响力的P2P品牌企业与借贷金融服务提供商。</span>
                </div>
            </div>
        </div>
    </div>
</div>
@stop