<?php



/*
*@Use : 用户登录验证页面
*/
Route::post('user/doLogin', 'Home\UserController@doLogin');

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

Route::post('user/doRegist', 'Home\UserController@doRegist');
/*
*@Use : 用户帐号找回密码
*/
Route::get('user/forget', 'Home\UserController@forget');
/*
*@Use : 引用登录页面框架级
*/
Route::get('resources/views/user/loginForm', 'Home\UserController@showLogin');
/*
*@Use : 用户退出
*/

Route::get('user/logout', 'Home\UserController@logout');

