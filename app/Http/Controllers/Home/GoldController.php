<?php

namespace App\Http\Controllers\Home;

use App\Http\home;
use DB;
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
		$info = DB::table('fund')->get();
		$arr = json_decode($info,true);
		// echo '<pre>';
		// print_r($arr);
		return view('home/gold/gold',['info'=>$info]);
	}

	public function getlist(){
		
	}
	
}