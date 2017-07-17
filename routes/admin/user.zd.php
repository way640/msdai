<?php
/**
 * 后台管理员.
 */

  Route::get('admin/user/user','Admin\UserController@index');
  Route::any('admin/user/create','Admin\UserController@create');

  Route::get('admin/user/indexlist','Admin\UserController@indexList');
