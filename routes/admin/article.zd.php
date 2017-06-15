<?php
/**
 * 后台文章管理
 */

  Route::any('admin/article/article/','Admin\ArticleController@index');
  Route::any('admin/article/create','Admin\ArticleController@create');
  Route::any('admin/article/edit/{article_id}/edit','Admin\ArticleController@edit');
  Route::any('admin/article/update/{article_id}','Admin\ArticleController@update');
  Route::any('admin/article/destroy/{article_id}','Admin\ArticleController@destroy');