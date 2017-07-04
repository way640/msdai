<?php
//配置首页展示
Route::get('admin/system/index','Admin\SystemController@Index');
Route::get('admin/system/add','Admin\SystemController@Add');



Route::get('admin/system/systemlist','Admin\SystemController@systemList');
Route::get('admin/system/systemtypelist','Admin\SystemController@systemTypeList');
Route::get('admin/system/systeminsert','Admin\SystemController@systemInsert');
Route::get('admin/system/systemdel','Admin\SystemController@systemDel');