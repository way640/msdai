<?php

/*
*@Use : 首页
*/
//导航
Route::get('index/nav', 'Home\IndexController@index');
//锦囊
Route::get('index/silk', 'Home\IndexController@silk');