<?php

/*
*@Use : 贵金属列表页
*/
Route::get('gold/gold', 'Home\GoldController@index');

Route::get('gold/getlist', 'Home\GoldController@getlist');
Route::get('gold/getgo', 'Home\GoldController@getgo');
