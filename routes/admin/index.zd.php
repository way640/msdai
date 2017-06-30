<?php
/**
 * 后台首页.
 */

Route::get('admin/index/index','Admin\IndexController@Index');
Route::get('admin/index/adminnav','Admin\IndexController@adminNav');


