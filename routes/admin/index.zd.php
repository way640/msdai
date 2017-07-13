<?php
/**
 * 后台首页.
 */

Route::get('admin/index/index','Admin\IndexController@Index');



Route::get('admin/index/adminnav','Admin\IndexController@adminNav');

Route::get('admin/index/indexdata','Admin\IndexController@indexData');
Route::get('admin/index/checkstatus','Admin\IndexController@checkStatus');
Route::get('admin/index/welcome','Admin\IndexController@welcome');


