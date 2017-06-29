<?php
//权限委派

Route::get('admin/priv/appo','Admin\AppoController@index');
Route::get('admin/priv/appoadd','Admin\AppoController@appoAdd');


Route::get('admin/priv/appoInfo','Admin\AppoController@appoInfo');
Route::get('admin/priv/appoinsert','Admin\AppoController@appoInsert');
Route::get('admin/priv/appodel','Admin\AppoController@appoDelt');
Route::get('admin/priv/appodel','Admin\AppoController@appoDelt');


