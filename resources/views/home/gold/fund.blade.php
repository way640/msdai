@extends('Home.title')
@section('content')
		<link href="{{ asset('css/index_lib.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index_main.min.css') }}" rel="stylesheet">

	<link href="{{ asset('css/index-ef3dfa649d.css') }}" rel="stylesheet">

	<center>
	
        <div class="container">

            <div class="prods">
                <div class="prods-header">
                    <p class="title">
                        基金列表
                    </p>
                </div>
                <div class="prod-items">

<?php foreach($data as $v){?>
<div class="prod-item person" id="DaBaiContent">

    <div class="pull-left prod-logo">
        <?php if ($v['jjgm']<5){ ?>
                <img src="{{ asset('image/dabai-logo.png') }}" alt="">
            <?php }else if ($v['jjgm']<60) {?>
                <img src="{{ asset('image/times.png') }}" alt="">
           <?php  }else{?>
                <img src="{{ asset('image/wzxy2.png') }}" alt="">
          <?php  } ?>

        <p class="logo-desc">Zdmoney<br>您要有个小目标，赚点小钱</p>
    </div>
    <div class="prod-content">
        <p class="prod-title">
            <span class="font-bold"><?php echo $v['name']?></span>
        </p>
        <div class="pull-left prod-intro">
            <h2>赚点小钱，为您服务，理智投资，成就人生，抓住机遇，走向巅峰</h2>
            <dl class="left">

                <dt>创建时间：</dt>
                    <dd><span class="digit"><?php echo $v['clrq']?></span></dd>
            </dl>
            <dl class="right">
                <dt>基金规模：</dt>
                <dd>
                    <span class="digit"><?php echo $v['jjgm']?>(亿元)</span>
                </dd>
            </dl>
            <dl class="left">
                <dt>单位净值：</dt>
                    <span class="digit"><?php echo $v['dwjz']?>元</span>
                <dd>
                   
            </dl>
            <dl class="right">
                <dt>累计净值：</dt>
                <dd><span class="digit"><?php echo $v['ljjz']?>元</span></dd>

            </dl>
            
        </div>
        <div class="pull-right prod-info">
            <div class="prod-info-inner">
                <div class="ck">
                    <p>
                        <span class="digit-strong f24" data-apply-type="301"></span>
                    </p>
                    <a class="btn btn-primary btn-ps" href="http://finance.sina.com.cn/fund/quotes/<?php echo $v['symbol']?>/bc.shtml">查看详情</a>

                </div>
            </div>
        </div>
    </div>

</div>

        <?php } ?>
    {{--{!! $data->render() !!}--}}
@if ($data->LastPage() > 1)

    <a href="{{ $data->Url(1) }}" class="item{{ ($data->CurrentPage() == 1) ? ' disabled' : '' }}">
        <i class="icon left arrow"></i>
        <input type="button" value="首页">
    </a>  <a href="{{ $data->Url($data->last) }}" class="item{{ ($data->CurrentPage() == 1) ? ' disabled' : '' }}">
        <i class="icon left arrow"></i>
                                <input type="button" value="上一页">
    </a>  <a href="{{ $data->Url($data->next) }}" class="item{{ ($data->CurrentPage() == 1) ? ' disabled' : '' }}">
        <i class="icon left arrow"></i>
                                <input type="button" value="下一页">
    </a>

   <a href="{{ $data->Url($data->LastPage()) }}" class="item{{ ($data->CurrentPage() == $data->LastPage()) ? ' disabled' : '' }}">
       <input type="button" value="尾页">
        <i class="icon right arrow"></i>
    </a>

@endif

</div></div>
            </div>

	</center>

@stop


