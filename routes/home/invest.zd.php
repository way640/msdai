<?php
/*
*@Use : 轻松投产品列表页
*/
Route::get('invest/invest', 'Home\InvestController@index');
/*
*@Use : 轻松投产品详情页
*/
Route::get('invest/detail', 'Home\InvestController@detail');

