@extends('Home.title')
@section('content')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
<!-- 返回顶部调用 begin -->
<div id="mainbody">
  <div class="blogs">
    <div id="index_view">
      <h1 class="c_titile">{{$info->article_title}}</h1>
      <p class="box"><?php echo date('Y-m-d H:i:s',$info->article_add_time)?><span>编辑：{{$info->article_author}}</span></p>
      <ul>
        <p>{{$info->article_content}}</p>
      </ul>
    </div>
  </div>
</div>
@stop