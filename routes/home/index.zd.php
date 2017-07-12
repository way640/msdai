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



