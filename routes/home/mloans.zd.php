<?php

/*
 *@Use : 放款
 */

//用户放款
Route::post('mloans/loan','Home\CreditController@loan');
//计算用户最终收益
Route::post('mloans/dal','Home\CreditController@dal');
//借款详情
Route::get('mloans/lengpart/{id}','Home\CreditController@lengpart');
//验证实名认证
Route::get('mloans/approve/{id}','Home\CreditController@approve');
//申请借款
Route::get('molans/applyto','Home\CreditController@applyto');
