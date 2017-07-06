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
                    
<div class="prod-item person" id="DaBaiContent">

    <div class="prod-content">

        <div class="pull-left prod-intro">

        </div>
        <div class="pull-right prod-info">
            <div class="prod-info-inner">
                <div class="ck">

                </div>
            </div>
        </div>
    </div>

</div>



<div class="prod-item corp" id="TimesContent">
        <p class="prod-title">
            <span class="font-bold">贵金属种类：
            <select >
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
$('.J_zl').on('click',function(){
    var dian = $(this).val();
    var urljs = 'http://api.k780.com/?app=finance.shgold&goldid='+dian+'&version=2&appkey=23464&sign=c649cb4d82839e08bf3b5f917e8cc9df&format=json&jsoncallback=?';
    var str = '';
    $.ajax({ 
            type :"GET",      
            url : urljs,        
            dataType : "jsonp",            
            success:function(data){
                if(data.success=='1'){
                    var v=data.result;
                    str +='<p class="prod-title"></span></p><div class="pull-left prod-intro">';
                    str +='<h2>'+v.uptime+'</h2>';
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
    }) 
})
</script>
	
@stop
