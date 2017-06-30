<?php
/**
 * 后台管理
 */

  Route::any('admin/power/power','Admin\PowerController@index');

  Route::any('admin/power/create','Admin\PowerController@create');

  Route::any('admin/power/store','Admin\PowerController@store');

  Route::any('admin/power/edit/{priv_id}/edit','Admin\PowerController@edit');

  Route::any('admin/power/update/{priv_id}','Admin\PowerController@update');

  Route::any('admin/power/destroy/{priv_id}','Admin\PowerController@destroy');
