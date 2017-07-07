@extends('Home.title')
@section('content')

<link href="{{asset('css/general-541378b38b.css')}}" rel="stylesheet">
<link href="{{asset('css/bindMobile-2cd06feba4.css')}}" rel="stylesheet">
<link href="https://www.jimu.com/favicon.ico?1498812558728" rel="shortcut icon" type="image/x-icon">
<link href="{{asset('css/index-ef3dfa649d.css')}}" rel="stylesheet">

<script src="{{asset('js/mv.js')}}" async="" type="text/javascript"></script>
<script src="{{asset('js/mba.js')}}" async="" type="text/javascript"></script>
<script src="{{asset('js/v.htm')}}" charset="utf-8"></script>
<script src="{{asset('js/header-init-8dc16d38ce.js')}}"></script>
<div class="register-main">
    <h4>购买基金</h4>
    <hr>
    <form action="numprice" method='post'>
        <div class="row-fluid">
            <div class="control-group">
                <input type="hidden" name="id" value="<?php echo $data['goldid']?>">
                <label class="control-label" for="oldLoginPass">基金名称:&nbsp&nbsp&nbsp<?php echo $data['varietynm']?></label>
                <div class="controls">
                    
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="newLoginPass">当前金额:&nbsp&nbsp&nbsp<?php echo $data['open_price']?></label>
                <div class="controls">
                    
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="newLoginPass">购买数量:&nbsp&nbsp&nbsp
                    <input type="text" name='num'>   </label>
                <div class="controls">
                    
                </div>
            </div>
            
            <hr>
            <button type="submit" class="btn btn-primary span12" style="margin-left: 0">确认</button>
        </div>
    </form>
</div>

<script src="{{asset('js/jquery-07fd0237c1.js')}}" type="text/javascript"></script>
<script src="{{asset('js/bootstrap-fb24c92ad4.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery-640f2d52cc.js')}}" type="text/javascript"></script>
<script src="{{asset('js/eden-20ce50b66d.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery-b23540f87a.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery-0abadbaab5.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery-db3fe95623.js')}}" type="text/javascript"></script>
<script src="{{asset('js/eden-e72ac904d3.js')}}" type="text/javascript"></script>
<script src="{{asset('js/font_hxuxey0tud81714i.js')}}" type="text/javascript"></script>
<script src="{{asset('js/font_2vki31oofhudte29.jsv')}}" type="text/javascript"></script>
<script src="{{asset('js/settings-88ea31cf32.js')}}" type="text/javascript"></script>
<script src="{{asset('js/init-fc412db349.js')}}" type="text/javascript"></script>
<script src="{{asset('js/hm.js')}}"></script>
<script src="{{asset('js/hm_002.js')}}"></script>


<script src="{{asset('js/dc.js')}}" async="" type="text/javascript"></script>
<script src="{{asset('js/agt.js')}}" async="" type="text/javascript"></script>
<script src="{{asset('js/conversion.js')}}" async="" type="text/javascript"></script>
<script src="{{asset('js/mvl.js')}}" async="" type="text/javascript">


@stop