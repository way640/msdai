<?php
/**
 * 后台管理员.
 */

  Route::any('admin/admin/admin','Admin\AdminController@index');
  Route::any('admin/user/create','Admin\UserController@create');
  Route::any('admin/user/store','Admin\UserController@store');
  Route::any('admin/user/destroy/{admin_id}','Admin\UserController@destroy');