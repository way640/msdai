<?php
//权限委派

Route::get('admin/appo/index','Admin\AppoController@index');
Route::get('admin/appo/appoadd','Admin\AppoController@appoAdd');


Route::get('admin/appo/appoadmininfo','Admin\AppoController@appoAdminInfo');
Route::get('admin/appo/appoinfo','Admin\AppoController@appoInfo');
Route::get('admin/appo/appoinsert','Admin\AppoController@appoInsert');
Route::get('admin/appo/appodel','Admin\AppoController@appoDelt');
Route::get('admin/appo/privlist','Admin\AppoController@privList');


