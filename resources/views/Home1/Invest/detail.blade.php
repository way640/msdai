@extends('Home1.header')
@section('content')

    <div id="gy_guide_particulars_xzk">
    <div class="px1000">
        <div class="gy_guide_index_xzk_header" style="margin:20px 0;font-size:14px;">
            <img src="images/gy_guide_index_xzk_picx.png"/>
            <span><a href="">首页</a></span>
            >
            <span><a href="">关于我们</a></span>
            >
            <span><a href="">项目详情</a></span>
        </div>
    </div>
    <div class="px1000">
        <div class="gy_guide_particulars_information">
            <p class="gy_guide_particulars_information_header">项目信息</p>
            <div class="gy_guide_particulars_information_main clearfix">
                <div class="particulars_information_l fl">
                    <div class="particulars_information_up">项目名称：
                        <input type="text" maxlength="">
                    </div>
                    <div class="particulars_information_down">项目所在地：
                        <input type="text" maxlength="">
                    </div>
                </div>
                <div class="particulars_information_r fl">
                    <div class="particulars_information_up">项目公司：
                        <input type="text" maxlength="">
                    </div>
                    <div class="particulars_information_down">项目描述：
                        <input type="text" maxlength="">
                    </div>
                </div>
                <div style="border-top:1px solid #E6E6E6;" class="fl particulars_information_footer">
                    <div>产品标准书：<span class="dianjicichu"><a href="">点击此处</a></span> 下载产品标准书资料</div>
                </div>
            </div>
        </div>

        <div class="gy_guide_particulars_information">
            <p class="gy_guide_particulars_information_header">融资信息</p>
            <div class="gy_guituide_particulars_information_main" style="color:#aaaaaa">
                <div class="particulars_information_hone clearfix">
                    <div style="width:685px;border-right:1px solid #E6E6E6;height: 105px;" class="fl">
                        <div class="gy_guide_pain_bign_font fl">
                            <p class="gy_guide_pain_big">10万</p>
                            <p class="gy_guide_pain_font">借款金额（元）</p>
                        </div>
                        <div class="gy_guide_pain_bign_font fl" style="border-right:2px solid #E6E6E6;border-left:2px solid #E6E6E6;">
                            <p class="gy_guide_pain_big">18.20%</p>
                            <p class="gy_guide_pain_font">年化收益率（百分比）</p>
                        </div>
                        <div class="gy_guide_pain_bign_font fl">
                            <p class="gy_guide_pain_big">4-360</p>
                            <p class="gy_guide_pain_font">融资期限（天）</p>
                        </div>
                    </div>
                    <div class="fl gy_guide_particulars_information_cp">
                        <div class="gy_treasur_bg1">
                            <div class="gy_treasur_bg2" style="width:70%;">
                            </div>
                        </div>
                        <p><span style="color:#000;">214,000.00 /</span>  70 万</p>
                    </div>
                </div>
                <div class="particulars_information_htwo">
                    <div style="width:685px;border-right:1px solid #E6E6E6;height: 150px;" class="fl">
                        <div class="particulars_information_htwos_gtar">
                            <p>起投资金：<span>个人：300元起投，机构：10万元起投</span></p>
                            <p style="color:#808080;">是否可转让：<span>是</span></p>
                        </div>
                        <div class="particulars_information_htwo_uhank">
                            <span>还款方式：按月付息，到期还本</span>
                            <span>发售时间：2015.07.24</span>
                            <span>担保方式：</span>
                        </div>
                    </div>
                    <div class="gy_particulars_information_htwoad" id="">
                        <div class="gy_particulars_information_htwoad_main" style="margin-top:20px;">
                            <input type="text" value="输入金额" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '输入金额';}"/>
                            <img src="images/gy_treasure_small_bgt.png">
                            <input type="text" value="预期收益" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '预期收益';}"/>
                            <div class="gy_particulars_information_htwoad_mainfont">
                                <a href="">
                                    <p class="gy_particulars_information_htwoadtb">
                                        立即投标
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="particulars_information_hthree">
                    <span >推荐理由：</span>
                </div>
            </div>
        </div>
    </div>


    <div class="px1000">
        <div class="gy_guide_index_xzk_bitou" style="padding-bottom:0px;height:35px;">
            <span id="gy_guide_index_xzk_bitou1">收益说明</span>
            <span id="gy_guide_index_xzk_bitou2">资金用途</span>
            <span id="gy_guide_index_xzk_bitou3">还款来源</span>
            <span id="gy_guide_index_xzk_bitou4">风控措施</span>
            <span id="gy_guide_index_xzk_bitou5">相关信息</span>
        </div>
        <div>
            <div class="gy_guide_index_xzk_bid_rit" id="gy_guide_index_xzk_bid_xszz" style="display:block;height:250px;">c</div>
            <div class="gy_guide_index_xzk_bid_rit" id="gy_guide_index_xzk_bid_xszz" style="display:none;">cc</div>
            <div class="gy_guide_index_xzk_bid_rit" id="gy_guide_index_xzk_bid_xszz" style="display:none;">ccc</div>
            <div class="gy_guide_index_xzk_bid_rit" id="gy_guide_index_xzk_bid_xszz" style="display:none;">cccc</div>
            <div class="gy_guide_index_xzk_bid_rit" id="gy_guide_index_xzk_bid_xszz" style="display:none;">cccc</div>
        </div>
    </div>
</div>
    @stop