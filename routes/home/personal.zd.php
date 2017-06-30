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
/*
*@Use : 用户添加头像
*/
Route::get('personal/addImage', 'Home\PersonalController@image');
/*
*@Use : 执行添加图片
*/
Route::post('personal/image', 'Home\PersonalController@addImage');
/*
*@Use : 修改用户密码
*/
Route::get('personal/changePwd', 'Home\PersonalController@changePwd');

