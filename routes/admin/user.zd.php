<?php
/**
 * 后台管理员.
 */

  Route::get('admin/user/user','Admin\UserController@index');

  Route::any('admin/user/create','Admin\UserController@create');

  Route::any('admin/user/store','Admin\UserController@store');

  Route::any('admin/user/destroy/{admin_id}','Admin\UserController@destroy');