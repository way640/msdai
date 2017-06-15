<?php
//配置首页展示
Route::get('admin/config/index','Admin\ConfigController@Index');
Route::get('admin/config/add','Admin\ConfigController@Add');



Route::get('admin/config/configlist','Admin\ConfigController@configList');
Route::get('admin/config/configtypelist','Admin\ConfigController@configTypeList');
Route::get('admin/config/configinsert','Admin\ConfigController@configInsert');
Route::get('admin/config/configdel','Admin\ConfigController@configDel');