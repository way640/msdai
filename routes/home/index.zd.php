<?php

/*
*@Use : 首页
*/
//导航
Route::get('index/nav', 'Home\IndexController@index');
//锦囊
Route::get('index/silk', 'Home\IndexController@silk');
//友情链接
Route::get('index/link', 'Home\IndexController@link');

//文章展示列表
Route::get('index/silk_list', 'Home\IndexController@silkid');
//法律声明
Route::get('index/shengming', function(){
	return view('home.index.shengming');
});
//关于我们
Route::get('index/about', function(){
	return view('home.index.about');
});
Route::get('index/help', function(){
	return view('home.index.help');
});


