<?php

/*
*@Use : 充值路由
*/
//充值页面
Route::get('cz/index', 'Home\CzController@index');
//生成支付二维码页面
Route::post('cz/add', 'Home\CzController@add');
//同步回调
Route::get('cz/hd/{price}', 'Home\CzController@return_url');
