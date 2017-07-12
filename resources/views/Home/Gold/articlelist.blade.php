@extends('Home.title')
@section('content')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
<link href="{{ asset('css/base.css') }}" rel="stylesheet">
<link href="{{ asset('css/index.css') }}" rel="stylesheet">
<!-- 返回顶部调用 begin -->
<div id="mainbody">
  <div class="blogs">
    <div id="index_view">
	  <div class="tuijian">
	        
		<h2 class="title_tj">
			<p>文章<span>展示</span></p>
		</h2>
		  <div class="bloglist left">
	  		<!-- <h3>程序员请放下你的技术情节，与你的同伴一起进步</h3> -->
	  		<h3>程序员请放下你的节操，与你的老司机一起开车</h3>
		    <figure><img src="{{ asset('userImage/1.jpeg') }}"></figure>
		    <ul>
		      <p>如果说掌握一门赖以生计的技术是技术人员要学会的第一课的话， 那么我觉得技术人员要真正学会的第二课，不是技术，而是业务、交流与协作，学会关心其他工作伙伴的工作情况和进展...</p>
		      <a title="/" href="/" target="_blank" class="readmore">阅读全文>></a>
		    </ul>
		    <p class="dateview"><span>2066-06-06</span><span>作者：紫灵</span><span>个人博客：www.zdmoney.com</span></p>
		    @foreach ($data as $va)
			    <h3>{{$va->article_title}}</h3>
			    <figure><img src="{{ asset('userImage/1.jpeg') }}"></figure>
			    <ul>
			      <p >
						@if(mb_strlen($va->article_content) > 70) 
			      			{{mb_substr( $va->article_content, 0, 70 )}}....
			      		@else
			      			{{$va->article_content}}
			      		@endif
			      </p>
			      <a title="/" href="{{url('')}}/index/silk_list?id={{$va->article_id}}" target="_blank" class="readmore">阅读全文>></a>
			    </ul>
			    <p class="dateview"><span><?php echo date('Y-m-d H:i:s',$va->article_add_time)?></span><span>作者：{{$va->article_author}}</span><span>个人博客：[<a href="/news/life/">程序人生</a>]</span></p>
			@endforeach
			
	  </div>
    </div>
<center>
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
</center>
	</div>
  </div>
</div>
</center>
@stop