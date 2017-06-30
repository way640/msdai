<?php
/**
 * 后台登陆.
 */


    Route::any('admin/login/login','Admin\LoginController@login');

//Route::group(['middleware' => ['web','admin.login'],'prefix'=>'admin','namespace'=>'Admin'], function (){
//
//    Route::get('index/index','IndexController@Index');
//    Route::get('index/adminnav','IndexController@adminNav');
//
//});



