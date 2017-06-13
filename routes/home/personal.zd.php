<?php

/*
*@Use : 个人中心首页
*/
Route::get('personal/personal', 'Home\PersonalController@index');
/*
*@Use : 个人中心积分首页
*/
Route::get('personal/points', 'Home\PersonalController@points');
/*
*@Use : 个人中心账号设置
*/
Route::get('personal/config', 'Home\PersonalController@config');