<?php
/**
 * 后台文章管理
 */

  Route::any('admin/role/role','Admin\RoleController@index');

  Route::any('admin/role/create','Admin\RoleController@create');

  Route::any('admin/role/store','Admin\RoleController@store');

  Route::any('admin/role/edit/{role_id}/edit','Admin\RoleController@edit');

  Route::any('admin/role/update/{role_id}','Admin\RoleController@update');

  Route::any('admin/role/destroy/{role_id}','Admin\RoleController@destroy');
