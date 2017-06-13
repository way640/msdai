<?php

namespace App\Http\Controllers\Home;

use App\Http\home;

/*
*@Class_name : 贵金属详情
*@Use : 用户对贵金属的购入等操作
*@Author : (负责人)
*@Time : (完成时间)
*/
class GoldController extends CommonController
{
	/*
	*@Use : 贵金属默认首页
	*/
	public function index(){
		
		return view('home/gold/gold');
	}
}