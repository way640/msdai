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
                        我要借款
                    </p>
                </div>
                <div class="prod-items">

                    <?php foreach($data as $v){?>
<div class="prod-item person" id="DaBaiContent">
    <div class="pull-left prod-logo">
        @if($v->user_head!='')
            <img src="{{ asset($v->user_head) }}" alt="">
        @else
            <img src="{{ asset('image/default-6e81850cf7.jpg') }}" alt="">
        @endif
    </div>
    <div class="prod-content">
        <p class="prod-title">

            <span class="font-bold">个人放款</span>

            <span class="i i-person">个人申请</span>
            <span class="i i-folder">无需抵押</span>
            <span class="i i-calendar">最快1天到账</span>
        </p>
        <div class="pull-left prod-intro">

            <h2>zdmoney衷心的提醒您,请根据您自己的实际情况酌情考虑您的借款金额，谢谢您的光临</h2>
            <dl class="left">

                <dt>放款金额：</dt>
                    <dd><span class="digit"><?php echo $v->lenging_money?></span></dd>
            </dl>
            <dl class="right">
                <dt>放款期限：</dt>
                <dd>
                    <span class="digit"><?php echo date('Y-m-d',$v->lenging_start_time)?></span>
                    -
                    <span class="digit"><?php echo date('Y-m-d',$v->lenging_end_time)?></span>
                </dd>
            </dl>
            <dl class="left">
                <dt>回款方式：</dt>
                <dd>
                    <?php if($v->lenging_type==1){?>
                        <span class="digit"><?php echo '本息回款'; }?></span></dd>
            </dl>
            <dl class="right">
                <dt>放款利率：</dt>
                <dd><span class="digit"><?php echo $v->lenging_interest ?></span></dd>

            </dl>
            <dl>
                <dd>开放城市：目前仅支持北京，上海，深圳，苏州，成都地区客户申请，其他城市陆续开放中，敬请期待！</dd>
            </dl>
        </div>
        <div class="pull-right prod-info">
            <div class="prod-info-inner">
                <div class="ck">
                    
                    <a class="btn btn-primary btn-ps" href="/mloans/lengpart/{{ $v->lenging_id }}">查看详情</a>

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
        @for ($i = 1; $i <= $data->LastPage(); $i++)
            <a href="{{ $data->Url($i) }}" class="item{{ ($data->CurrentPage() == $i) ? ' active' : '' }}">
                <input type="button" value="{{ $i }}">
            </a>
        @endfor
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


