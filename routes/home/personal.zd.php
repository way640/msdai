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

/*
*@Use : 执行密码修改
*/
Route::post('personal/setNew', 'Home\PersonalController@setNew');
/*
*@Use : 完善个人信息
*/
Route::any('personal/setNumber', 'Home\PersonalController@setNumber');
/*
*@Use : 发送短信验证码请求
*/
Route::any('personal/sendMessage', 'Home\PersonalController@sendMessage');
/*
*@Use : 验证手机验证码是否正确
*/
Route::any('personal/checkCaptcha', 'Home\PersonalController@checkCaptcha');
/*
*@Use : 用户绑定邮箱
*/
Route::any('personal/bindEmail', 'Home\PersonalController@bindEmail') ;

