@extends('Home.title')
@section('content')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
<!-- 返回顶部调用 begin -->
<div id="mainbody">
  <div class="blogs">
    <div id="index_view">
        <h1 class="c_titile">关于我们</h1>
    
<p class="t1">&nbsp;&nbsp;&nbsp;&nbsp;ZDmoney网站成立于1999年8月，是中国现代新型金融行业的成员之一，由上海宏烨ZDmoney工作室实际运营与管理，是目前中国领先的以证券交易为核心的互联网综合理财平台。ZDmoney网站在“让投资更简单”的使命驱动下，凭借庞大的用户群，及业界领先的服务团队，为中国日益庞大的投资者打造、并不断拓展和优化互联网综合理财平台。</p>
<p class="t1">&nbsp;&nbsp;&nbsp;&nbsp;通过对数据和资讯内容进行分层、挖掘和潜心研发，ZDmoney网站从2017年开始相继推出“盈利宝”、“爱投顾”等互联网金融服务平台。其中，爱投顾于2014年12月16日，在网站和移动端同时上线，成为中国最早的互联网证券投顾服务平台。爱投顾作为国内最早的普惠金融实践者，是ZDmoney上市十周年的战略转型之举。通过与国内多家优秀券商进行战略合作，爱投顾聚集了业内顶尖券商及投资咨询公司的投资顾问（简称投顾）资源，深入挖掘投顾专业价值，引导中小投资者理性投资。平台可为广大投资者提供集证券开户、股市直播、问股咨询、组合内参、个股交易等一站式证券投资服务。2015年，爱投顾更是以创新的互联网思维、资深的行业基础、专业的平台运营能力、先进的盈利模式获得了用户、券商机构及行业协会的认可，中国证券业协会将爱投顾作为典型案例引入最新发布的《中国证券业发展报告2017》。</p>

    </div>
  </div>
  <script type="text/javascript">
  	$(function(){
  		$('.t1').attr('style','padding-left:20px;line-height:30px');
  		$('.t2').attr('style','padding-left:40px');
  	});
  </script>
</div>
@stop