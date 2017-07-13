<?php
/**
 * 后台登陆.
 */


    Route::any('admin/login/login','Admin\LoginController@login');
    Route::any('admin/login/index','Admin\LoginController@index');

