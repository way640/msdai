<?php

namespace App\Http\Controllers\Home;

use App\Http\home;

/*
*@Class_name : 借款详情
*@Use : 用户借款信息详情展示
*@Author : (负责人)
*@Time : (完成时间)
*/
class LengingController extends CommonController
{
	/*
	*@Action_name : 借款默认首页
	*/
	public function index(){
		
		return view('home/leng/leng');
	}
}