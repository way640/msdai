<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

/*
*@Class_name : 轻松投详情(基金详情)
*@Use : 用户对基金的购入等操作
*@Author : (负责人)
*@Time : (完成时间)
*/
class ActivityController extends CommonController
{
	/*
	*@Use : 轻松投默认首页
	*/
	public function index()
    {
		return view('Home/activity');
	}
}