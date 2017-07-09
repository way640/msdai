@extends('home.title')
@section('content')
	
	<link href="{{ asset('css/index_main.min.css') }}" rel="stylesheet">

	<link href="{{ asset('css/index-ef3dfa649d.css') }}" rel="stylesheet">

	<center>
	
        <div class="container">
            <div class="loan expwy-hot">
                <div>
                    <div class="pull-right prod-info">
                        <div class="prod-info-inner">
                            <div class="ck">

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="prods">
                <div class="prods-header">
                    <p class="title">
                        热门贵金属
                    </p>
                </div>
                <div class="prod-items">
                    

<div class="prod-item corp" id="TimesContent">
        <p class="prod-title">
            <span class="font-bold">贵金属种类：
            <select id="JJ_zl">
            <option value="">--选择--</option>
                @foreach ($info as $va)
                    <option value="{{$va->fund_no}}" class='J_zl' >{{$va->fund_name}}</option>
                @endforeach
        </select>
    </span>
        </p>
            <div id='vbox'>
                
            </div>
            
        </div>
        <div class="pull-right prod-info">     
			<p><a class="btn btn-primary btn-ps" href="javascript:void(0);">立即买入</a></p>
        </div>
</div>
</div>
            </div>
        </div>
</div>
</center>
<script>
$('#JJ_zl').change(function(){
    var fund_no = $(this).val();
    //alert(dian);
    $.ajax({
       type: "GET",
       url: "getlist",
       data: "fund_no="+fund_no,
       dataType:'json',
       success: function(msg){
        //alert(msg.success);
        var str = '';
            if(msg.success=='1'){
                    var v=msg.result;
                    //alert(v.uptime);
                    str +='<p class="prod-title"></span></p><div class="pull-left prod-intro">';
                    str +='<h2>'+v.uptime+'</h2><input type="hidden" id="didden" value='+v.goldid+'" >';
                    str +='<dl class="left"><dt>当前价格：</dt><dd><span class="digit">'+v.last_price+'元</span></dd></dl>';
                    str +='<dl class="right"><dt>买入价格：</dt><dd><span class="digit">'+v.buy_price+'元</span></dd></dl>';
                    str +='<dl class="left"><dt>卖出价格：</dt><dd><span class="digit">'+v.sell_price+'元</span></dd></dl>';
                    str +='<dl class="right"><dt>成交量：</dt><dd>'+v.volume+'</dd></dl>';
                    str +='<dl class="left"><dt>涨跌额：</dt><dd>'+v.change_price+'</dd>';
                    str +='</dl><dl class="right"><dt>涨跌幅：</dt><dd>'+v.change_margin+'</dd>';
                    str +='</dl><dl class="left"><dt>最高价：</dt><dd><span class="digit">'+v.high_price+'元</span></dd>';
                    str +='</dl><dl class="right"><dt>最低价：</dt><dd><span class="digit">'+v.low_price+'元</span></dd>';
                    str +='</dl><dl class="left"><dt>开盘价：</dt><dd><span class="digit">'+v.open_price+'元</span></dd>';
                    str +='</dl><dl><dt>昨收价：</dt><dd><span class="digit">'+v.yesy_price+'元</span></dd></dl>';
                    //alert(str);
                    $('#vbox').html(str);
                }else{
                    alert('你请求次数太多，请稍后再试');
                }
       }
    });
})
</script>
	
@stop
