@extends('Home1.header')
@section('content')

<!-- 首页 我要投资 -->

<div id="gy_guide_index_xzk">
    <div class="px1000">
        <div class="gy_guide_index_xzk_header">
            <img src="images/gy_guide_index_xzk_picx.png"/>
            <span><a href="{{url('')}}">首页</a></span>
            >
            <span><a href="{{url('invest/index')}}">我要投资</a></span>
        </div>
        <div class="gy_guide_index_xzk_main clearfix">
            <div class="gy_guide_index_xzk_main_left fl">
                <div class="fl gy_guide_index_xzk_main_leftcp">
                    <ul class="gy_guide_index_xzk_mleft_one">
                        <span>信用期限：</span>
                        <li class="gy_guide_index_xzk_mleft_div" id="gy_guide_index_xzk_mleft_yi" style="background: #29A7E1;color:#FFFFFF;">不限</li>
                        <li class="gy_guide_index_xzk_mleft_div" id="gy_guide_index_xzk_mleft_yi">3个月以下</li>
                        <li class="gy_guide_index_xzk_mleft_div" id="gy_guide_index_xzk_mleft_yi">4-6个月</li>
                        <li class="gy_guide_index_xzk_mleft_div" id="gy_guide_index_xzk_mleft_yi">7-12个月</li>
                        <li class="gy_guide_index_xzk_mleft_div" id="gy_guide_index_xzk_mleft_yi">12个月以上</li>
                    </ul>
                </div><br/>
                <div class="fl gy_guide_index_xzk_main_leftcp"><ul class="gy_guide_index_xzk_mleft_two">
                        <span>借款利率：</span>
                        <li class="gy_guide_index_xzk_mleft_div" id="gy_guide_index_xzk_mleft_er" style="background: #29A7E1;color:#FFFFFF;">不限</li>
                        <li class="gy_guide_index_xzk_mleft_div" id="gy_guide_index_xzk_mleft_er">11%以下</li>
                        <li class="gy_guide_index_xzk_mleft_div" id="gy_guide_index_xzk_mleft_er">11%-18%</li>
                        <li class="gy_guide_index_xzk_mleft_div" id="gy_guide_index_xzk_mleft_er">18%以上</li>

                    </ul>
                </div>
                <br/>
                <div class="fl gy_guide_index_xzk_main_leftcp">
                    <ul class="gy_guide_index_xzk_mleft_three">
                        <span>项目进度：</span>
                        <li class="gy_guide_index_xzk_mleft_div" id="gy_guide_index_xzk_mleft_san" style="background:#29A7E1;color:#FFFFFF;">不限</li>
                        <li class="gy_guide_index_xzk_mleft_div" id="gy_guide_index_xzk_mleft_san">投资中</li>
                        <li class="gy_guide_index_xzk_mleft_div" id="gy_guide_index_xzk_mleft_san">履约中</li>
                        <li class="gy_guide_index_xzk_mleft_div" id="gy_guide_index_xzk_mleft_san">已还款</li>
                    </ul>
                </div>
                <br/>


                <div class="gy_guide_index_xzk_mleft_four fl">亘元投资建议：如果您有任何疑问请您与我们<a href="" style="color:#29A7E1;">在线客服</a>联系。</div>
            </div>
            <div class="gy_guide_index_xzk_main_right fl">
                <p style="font-size:16px;color:#29A7E1;">常见问题</p>
                <ul>
                    <li><span><img src="images/gy_guide_index_xzk_main_right_tu.png"></span><a href=""><span>如何投资？</span></a></li>
                    <li><span><img src="images/gy_guide_index_xzk_main_right_tu.png"></span><a href=""><span>如何收取还款？</span></a></li>
                    <li><span><img src="images/gy_guide_index_xzk_main_right_tu.png"></span><a href=""><span>如何了解到投资项目的进展情况？</span></a></li>
                    <li><span><img src="images/gy_guide_index_xzk_main_right_tu.png"></span><a href=""><span>投标前需要注意哪些事项？</span></a></li>
                </ul>
            </div>
        </div>


        <div id="gy_guide_index_xzk_bitou_main">
            <div class="gy_guide_index_xzk_bitou">
                <span id="gy_guide_index_xzk_bitou1">全部理财产品</span>
                <span id="gy_guide_index_xzk_bitou2">新手专享</span>
                <span id="gy_guide_index_xzk_bitou3">PPP信投</span>
                <span id="gy_guide_index_xzk_bitou4">政府债</span>
                <span id="gy_guide_index_xzk_bitou5">企业债</span>
            </div>

            <!--全部理财产品-->
            <div>
                <div class="gy_guide_index_xzk_bid_rit" id="gy_guide_index_xzk_bid_rit" style="display:block;">
                    <div class="clearfix gy_guide_index_xzkbid_one">
						<span class="fl gy_guide_index_xzkbi1" id="gy_guide_index_xzkbi5">
							<p>
                                <span style="font-size:14px;color:#808080;">融资租赁债权转让项目第349期A</span>
                                <img src="images/gy_guide_index_xzk_bid_ritre.png">
                            </p>
							<p>担保公司：浙江中新力合担保服务有限公司</p>
						</span>
						<span class="fl gy_guide_index_xzkbi2" id="gy_guide_index_xzkbi5">
							<p><span style="font-size:25px;color:#FC8026;">18.20</span><span style="font-size:18px;color:#FC8026;">%</span></p>
							<p>预期年化收益率</p>
						</span>
						<span class="fl gy_guide_index_xzkbi3" id="gy_guide_index_xzkbi5">
							<p><span style="font-size:25px;color:#FC8026;">4-360</span><span style="font-size:18px;color:#FC8026;">天</span></p>
							<p>投资期限</p>
						</span>
						<span class="fl gy_guide_index_xzkbi4" id="gy_guide_index_xzkbi5" style="text-align:center;">
							<p>还款方式：到期还本付息</p>
							<div class="gy_treasur_bg1">
                                <div class="gy_treasur_bg2" style="width:70%;">
                                </div>
                            </div>
							<p><span style="color:#000;">214,000.00 /</span>  70 万</p>
						</span>
						<span class="fl gy_guide_index_xzkbi5" id="gy_guide_index_xzkbi5">
							<p><a style="font-size:18px;color:#fff;" href="{{url('invest/detail')}}">立即投标</a></p>
						</span>
                    </div>
                    <div class="clearfix gy_guide_index_xzkbid_two">
						<span class="fl gy_guide_index_xzkbi1" id="gy_guide_index_xzkbi5">
							<p>
                                <span style="font-size:14px;color:#808080;">融资租赁债权转让项目第349期A</span>
                                <img src="images/gy_guide_index_xzk_bid_ritre.png">
                            </p>
							<p>担保公司：浙江中新力合担保服务有限公司</p>
						</span>
						<span class="fl gy_guide_index_xzkbi2" id="gy_guide_index_xzkbi5">
							<p><span style="font-size:25px;color:#FC8026;">18.20</span><span style="font-size:18px;color:#FC8026;">%</span></p>
							<p>预期年化收益率</p>
						</span>
						<span class="fl gy_guide_index_xzkbi3" id="gy_guide_index_xzkbi5">
							<p><span style="font-size:25px;color:#FC8026;">4-360</span><span style="font-size:18px;color:#FC8026;">天</span></p>
							<p>投资期限</p>
						</span>
						<span class="fl gy_guide_index_xzkbi4" id="gy_guide_index_xzkbi5" style="text-align:center;">
							<p>还款方式：到期还本付息</p>
							<div class="gy_treasur_bg1">
                                <div class="gy_treasur_bg2" style="width:70%;">
                                </div>
                            </div>
							<p><span style="color:#000;">214,000.00 /</span>  70 万</p>
						</span>
						<span class="fl gy_guide_index_xzkbi5" id="gy_guide_index_xzkbi5">
							<p><a style="font-size:18px;color:#fff;" href="{{url('invest/detail')}}">立即投标</a></p>
						</span>
                    </div>
                    <div class="clearfix gy_guide_index_xzkbid_three">
						<span class="fl gy_guide_index_xzkbi1" id="gy_guide_index_xzkbi5">
							<p>
                                <span style="font-size:14px;color:#808080;">融资租赁债权转让项目第349期A</span>
                                <img src="images/gy_guide_index_xzk_bid_ritre.png">
                            </p>
							<p>担保公司：浙江中新力合担保服务有限公司</p>
						</span>
						<span class="fl gy_guide_index_xzkbi2" id="gy_guide_index_xzkbi5">
							<p><span style="font-size:25px;color:#FC8026;">18.20</span><span style="font-size:18px;color:#FC8026;">%</span></p>
							<p>预期年化收益率</p>
						</span>
						<span class="fl gy_guide_index_xzkbi3" id="gy_guide_index_xzkbi5">
							<p><span style="font-size:25px;color:#FC8026;">4-360</span><span style="font-size:18px;color:#FC8026;">天</span></p>
							<p>投资期限</p>
						</span>
						<span class="fl gy_guide_index_xzkbi4" id="gy_guide_index_xzkbi5" style="text-align:center;">
							<p>还款方式：到期还本付息</p>
							<div class="gy_treasur_bg1">
                                <div class="gy_treasur_bg2" style="width:70%;">
                                </div>
                            </div>
							<p><span style="color:#000;">214,000.00 /</span>  70 万</p>
						</span>
						<span class="fl gy_guide_index_xzkbi5" id="gy_guide_index_xzkbi5">
							<p><a style="font-size:18px;color:#fff;" href="{{url('invest/detail')}}">立即投标</a></p>
						</span>
                    </div>
                    <div class="clearfix gy_guide_index_xzkbid_four">
						<span class="fl gy_guide_index_xzkbi1" id="gy_guide_index_xzkbi5">
							<p>
                                <span style="font-size:14px;color:#808080;">融资租赁债权转让项目第349期A</span>
                                <img src="images/gy_guide_index_xzk_bid_ritre.png">
                            </p>
							<p>担保公司：浙江中新力合担保服务有限公司</p>
						</span>
						<span class="fl gy_guide_index_xzkbi2" id="gy_guide_index_xzkbi5">
							<p><span style="font-size:25px;color:#FC8026;">18.20</span><span style="font-size:18px;color:#FC8026;">%</span></p>
							<p>预期年化收益率</p>
						</span>
						<span class="fl gy_guide_index_xzkbi3" id="gy_guide_index_xzkbi5">
							<p><span style="font-size:25px;color:#FC8026;">4-360</span><span style="font-size:18px;color:#FC8026;">天</span></p>
							<p>投资期限</p>
						</span>
						<span class="fl gy_guide_index_xzkbi4" id="gy_guide_index_xzkbi5" style="text-align:center;">
							<p>还款方式：到期还本付息</p>
							<div class="gy_treasur_bg1">
                                <div class="gy_treasur_bg2" style="width:70%;">
                                </div>
                            </div>
							<p><span style="color:#000;">214,000.00 /</span>  70 万</p>
						</span>
						<span class="fl gy_guide_index_xzkbi5" id="gy_guide_index_xzkbi5">
							<p><a style="font-size:18px;color:#fff;" href="{{url('invest/detail')}}">立即投标</a></p>
						</span>
                    </div>
                    <div class="clearfix gy_guide_index_xzkbid_five">
						<span class="fl gy_guide_index_xzkbi1" id="gy_guide_index_xzkbi5">
							<p>
                                <span style="font-size:14px;color:#808080;">融资租赁债权转让项目第349期A</span>
                                <img src="images/gy_guide_index_xzk_bid_ritre.png">
                            </p>
							<p>担保公司：浙江中新力合担保服务有限公司</p>
						</span>
						<span class="fl gy_guide_index_xzkbi2" id="gy_guide_index_xzkbi5">
							<p><span style="font-size:25px;color:#FC8026;">18.20</span><span style="font-size:18px;color:#FC8026;">%</span></p>
							<p>预期年化收益率</p>
						</span>
						<span class="fl gy_guide_index_xzkbi3" id="gy_guide_index_xzkbi5">
							<p><span style="font-size:25px;color:#FC8026;">4-360</span><span style="font-size:18px;color:#FC8026;">天</span></p>
							<p>投资期限</p>
						</span>
						<span class="fl gy_guide_index_xzkbi4" id="gy_guide_index_xzkbi5" style="text-align:center;">
							<p>还款方式：到期还本付息</p>
							<div class="gy_treasur_bg1">
                                <div class="gy_treasur_bg2" style="width:70%;">
                                </div>
                            </div>
							<p><span style="color:#000;">214,000.00 /</span>  70 万</p>
						</span>
						<span class="fl gy_guide_index_xzkbi5" id="gy_guide_index_xzkbi5">
							<p><a style="font-size:18px;color:#fff;" href="">立即投标</a></p>
						</span>
                    </div>
                    <div class="clearfix gy_guide_index_xzkbid_six">
						<span class="fl gy_guide_index_xzkbi1" id="gy_guide_index_xzkbi5">
							<p>
                                <span style="font-size:14px;color:#808080;">融资租赁债权转让项目第349期A</span>
                                <img src="images/gy_guide_index_xzk_bid_ritre.png">
                            </p>
							<p>担保公司：浙江中新力合担保服务有限公司</p>
						</span>
						<span class="fl gy_guide_index_xzkbi2" id="gy_guide_index_xzkbi5">
							<p><span style="font-size:25px;color:#FC8026;">18.20</span><span style="font-size:18px;color:#FC8026;">%</span></p>
							<p>预期年化收益率</p>
						</span>
						<span class="fl gy_guide_index_xzkbi3" id="gy_guide_index_xzkbi5">
							<p><span style="font-size:25px;color:#FC8026;">4-360</span><span style="font-size:18px;color:#FC8026;">天</span></p>
							<p>投资期限</p>
						</span>
						<span class="fl gy_guide_index_xzkbi4" id="gy_guide_index_xzkbi5" style="text-align:center;">
							<p>还款方式：到期还本付息</p>
							<div class="gy_treasur_bg1">
                                <div class="gy_treasur_bg2" style="width:70%;">
                                </div>
                            </div>
							<p><span style="color:#000;">214,000.00 /</span>  70 万</p>
						</span>
						<span class="fl gy_guide_index_xzkbi5" id="gy_guide_index_xzkbi5">
							<p><a style="font-size:18px;color:#fff;" href="">立即投标</a></p>
						</span>
                    </div>
                </div>

                <div class="gy_guide_index_xzk_bid_rit" id="gy_guide_index_xzk_bid_xszz" style="display:none;">新手专享</div>
                <div class="gy_guide_index_xzk_bid_rit" id="gy_guide_index_xzk_bid_pppxt" style="display:none;">PPP信投</div>
                <div class="gy_guide_index_xzk_bid_rit" id="gy_guide_index_xzk_bid_zfz" style="display:none;">政府债</div>
                <div class="gy_guide_index_xzk_bid_rit" id="gy_guide_index_xzk_bid_qyz" style="display:none;">企业债</div>


            </div>
            <div class="gy_guide_index_xzkbid_paging">
                共8页
                <span class="gy_guide_paging"><a href="">首页</a></span>
                <span class="gy_guide_paging"><a href="">&#60;</a></span>
					<span class="gy_guide_paging" style="background:#29A7E1;">
					<a href="">1</a></span>
                <span class="gy_guide_paging"><a href="">2</a></span>
                <span class="gy_guide_paging"><a href="">3</a></span>
                <span class="gy_guide_paging"><a href="">4</a></span>
                <span class="gy_guide_paging"><a href="">5</a></span>
                <span class="gy_guide_paging"><a href="">&#62;</a></span>
                <span class="gy_guide_paging"><a href="">尾页</a></span>
            </div>
        </div>
    </div>


    <!-- <div id="gy_guide_end_main">
        <div class="px1000 gy_guide_end_main_cp">
            <a href=""><img src="images/gy_guide_end_main_cp1.png"></a>
            <a href=""><img src="images/gy_guide_end_main_cp2.png"></a>
            <a href=""><img src="images/gy_guide_end_main_cp3.png"></a>
            <a href=""><img src="images/gy_guide_end_main_cp4.png"></a>
            <a href=""><img src="images/gy_guide_end_main_cp5.png"></a>
        </div>
    </div> -->
    <div id="gy_treasure_kind">
        <div class="gy_treasure_kind_main1 px1000 clearfix">
            <div class="gy_treasure_kind_pic">
                <div class="fl gy_treasure_kind_div" id="gy_treasure_kinds_o1"><a href="">
                        <div class="gy_treasure_kind_bgpic"></div>
                        <p class="gy_treasure_kind_bigfont" id="gy_treasure_kind_bigfont1">政府支持</p>
                        <p>成为理财人，通过主动投标</p></a>
                </div>
                <div class="fl gy_treasure_kind_div" id="gy_treasure_kinds_o2"><a href="">
                        <div class="gy_treasure_kind_bgpic2"></div>
                        <p class="gy_treasure_kind_bigfont" id="gy_treasure_kind_bigfont2">实力担保</p>
                        <p>成为理财人，通过主动投标</p></a>
                </div>
                <div class="fl gy_treasure_kind_div" id="gy_treasure_kinds_o3"><a href="">
                        <div class="gy_treasure_kind_bgpic3"></div>
                        <p class="gy_treasure_kind_bigfont" id="gy_treasure_kind_bigfont3">本息保障</p>
                        <p>成为理财人，通过主动投标</p></a>
                </div>
                <div class="fl gy_treasure_kind_div" id="gy_treasure_kinds_o4"><a href="">
                        <div class="gy_treasure_kind_bgpic4"></div>
                        <p class="gy_treasure_kind_bigfont" id="gy_treasure_kind_bigfont4">期限灵活</p>
                        <p>成为理财人，通过主动投标</p></a>
                </div>
                <div class="fl gy_treasure_kind_div" id="gy_treasure_kinds_o5"><a href="">
                        <div class="gy_treasure_kind_bgpic5"></div>
                        <p class="gy_treasure_kind_bigfont" id="gy_treasure_kind_bigfont5">资金托管</p>
                        <p>成为理财人，通过主动投标</p></a>
                </div>
            </div>
        </div>
    </div>
@stop