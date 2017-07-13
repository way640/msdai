<?php
/*
*@Use : 首页我要投资页面
*/
//我要投资主页
Route::get('invest/index', 'Home\InvestController@index');
//我要投资详情
Route::get('invest/detail', 'Home\InvestController@detail');
