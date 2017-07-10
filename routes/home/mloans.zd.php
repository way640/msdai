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
Route::get('mloans/approve','Home\CreditController@approve');
//申请借款
Route::get('molans/applyto','Home\CreditController@applyto');
//幸运大转盘
Route::get('molans/draw','Home\CreditController@draw');
//用户大转盘中奖信息
Route::get('molans/lucy','Home\CreditController@lucy');
//安全交易协议
Route::get('molans/agr','Home\CreditController@agr');
//用户还款页面
Route::get('molans/repay','Home\CreditController@repay');
//用户还款
Route::get('molans/withpay','Home\CreditController@withpay');

