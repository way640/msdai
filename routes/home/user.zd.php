<?php



//用户登录验证页面
Route::post('user/add', 'Home\UserController@login');
/*
*@Use : 用户登录页面
*/
Route::get('user/login', 'Home\UserController@index');
/*
*@Use : 用户注册默认页面
*/
Route::get('user/regist', 'Home\UserController@regist');
/*
*@Use : 用户注册账户
*/
Route::get('user/doRegist', 'Home\UserController@doRegist');
/*
*@Use : 用户帐号找回密码
*/
Route::get('user/forget', 'Home\UserController@forget');