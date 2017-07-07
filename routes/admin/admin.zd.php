<?php

/*
*@Use : 角色赋权
*/
Route::any('admin/admin/emPower', 'Admin\AdminController@emPower') ;

/*
*@Use : 获取角色列表
*/
Route::any('admin/admin/roleList', 'Admin\AdminController@roleList') ; 

/*
*@Use : 获取权限列表
*/
Route::any('admin/admin/privList', 'Admin\AdminController@privList') ;

/*
*@Use : 添加角色赋权
*/
Route::any('admin/admin/addRole', 'Admin\AdminController@addRole') ; 

/*
*@Use : 添加管理员赋予角色
*/
Route::any('admin/admin/adminRole', 'Admin\AdminController@adminRole') ; 

/*
*@Use : 获取管理员列表
*/
Route::any('admin/admin/getAdmin', 'Admin\AdminController@getAdmin') ; 

/*
*@Use : 获取角色列表
*/
Route::any('admin/amin/roleList', 'Admin\AdminController@roleList') ; 

/*
*@Use : 添加管理员赋予角色
*/
Route::any('admin/admin/addAdminRole', 'Admin\AdminController@addAdminRole') ; 