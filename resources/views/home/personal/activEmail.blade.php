@extends('Home.title')
@section('content')
<center>
<meta http-equiv="refresh" content="3;url={{ url('') }}" />
<?php if ( $status == 0 ) { 

    echo "邮箱绑定失败，请重试，网页将于三秒后跳转首页" ;
} else {
	
	echo "邮箱绑定成功！网页将于三秒后跳转首页" ; 
}?>
</center>
@stop