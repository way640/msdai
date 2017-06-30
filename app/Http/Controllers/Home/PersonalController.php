<?php

namespace App\Http\Controllers\Home;

use App\Http\home;

/*
*@Class_name : 个人中心
*@Use : 用户个人中心页面展示及信息设置
*@Author : (负责人)
*@Time : (完成时间)
*/
class PersonalController extends CommonController
{
	/*
	*@Action_name : 个人中心默认首页 
	*/
	public function index(){
		
		return view('home/personal/personal');
	}
	
	/*
	*@Action_name : 个人积分首页
	*/
	public function points(){
		
		return view('home/personal/points');
	}
	/*
	*@Action_name : 个人账号设置
	*/
	public function config(){
		

		return view('personal/config');

	}
}