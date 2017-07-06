<?php
//公共加载类路由


Route::get('admin/index/adminnav','Admin\IndexController@adminNav');
//检测管理员账户名唯一性
Route::get('admin/public/checkadminaccount','Admin\PublicController@checkAdminAccount');
/*
*@Use : 后台管理员退出登录
*/
Route::post('admin/public/doLogout', 'Admin\publicController@Logout') ; 
 