<?php
//配置首页展示
Route::get('admin/config/index','Admin\ConfigController@Index');
Route::get('admin/config/configlist','Admin\ConfigController@configList');