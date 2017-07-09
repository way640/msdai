<?php

/*
*@Use : 贵金属列表页
*/
Route::get('gold/gold', 'Home\GoldController@index');

Route::get('gold/getlist', 'Home\GoldController@getlist');
//主页贵金属展示页
Route::get('gold/getgo', 'Home\GoldController@getgo');
//fund
Route::get('gold/fund', 'Home\GoldController@fund');
//基金更多展示页面
Route::get('gold/fundlist', 'Home\FundController@fundlist');
//购买基金
Route::get('gold/addgold', 'Home\GoldController@addgold');

Route::post('gold/numprice', 'Home\GoldController@numprice');



