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