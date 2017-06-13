<?php $__env->startSection('content'); ?>
	
	<link href="<?php echo e(asset('css/index_main.min.css')); ?>" rel="stylesheet">

	<link href="<?php echo e(asset('css/index-ef3dfa649d.css')); ?>" rel="stylesheet">

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
            <a href=""javascrip:void(0);><span class="font-bold">贵金属id：贵金属品种（goldid：variety）</a></span>
        </p>
        <div class="pull-left prod-intro">
            <h2>更新时间（uptime）</h2>
            <dl class="left">
                <dt>当前价格：</dt>
                <dd><span class="digit">（last_price）</span>元</dd>
            </dl>
            <dl class="right">
                <dt>买入价格：</dt>
                <dd><span class="digit">（buy_price）元</span></dd>
            </dl>
            <dl class="left">
                <dt>卖出价格：</dt>
                <dd><span class="digit">（sell_price）元</span></dd>
            </dl>
            <dl class="right">
                <dt>成交量：</dt>
                <dd>（volume）</dd>
            </dl>
			<dl class="left">
				<dt>涨跌额：</dt>
				<dd>（change_price）</dd>
			</dl>
			<dl class="right">
				<dt>涨跌幅：</dt>
				<dd>（change_margin）</dd>
			</dl>
			<dl class="left">
				<dt>最高价：</dt>
				<dd><span class="digit">（high_price）元</span></dd>
			</dl>
			<dl class="right">
				<dt>最低价：</dt>
				<dd><span class="digit">（low_price）元</span></dd>
			</dl>
            <dl class="left">
                <dt>开盘价：</dt>
                <dd><span class="digit">（open_price）元</span></dd>
            </dl>
            <dl>
				<dt>昨收价：</dt>
				<dd><span class="digit">（yesy_price）元</span></dd>
            </dl>
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
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.title', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>