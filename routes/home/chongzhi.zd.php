<?php

/*
*@Use : 充值路由
*/
Route::get('cz/index', 'Home\CzController@index');
Route::post('cz/add', 'Home\CzController@add');
Route::get('cz/hd', 'Home\CzController@hd');
Route::post('cz/yb', 'Home\CzController@notify');

