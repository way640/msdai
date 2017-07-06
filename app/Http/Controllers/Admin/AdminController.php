<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Support\Facades\DB;
/*
 * @Class_name ：权限管理
 * @Use ： 权限管理
 * @Author：szt
 * @Time ： 2017-07-05
 * **/
class AdminController extends CommonController
{
	/*
	*@Action_name : 角色赋权页面
	*@Author : szt
	*@Time : 2017-07-05
	*/
	public function emPower(){
		
		return view('admin/admin');
	}
	
	/*
	*@Action_name : 获取角色列表
	*@Author : szt
	*@Time : 2017-07-05
	*/
	public function roleList(){
		
        $roleInfo = DB::select ( 'select * from zd_role' ) ;
        $roleInfo = $this -> objToArray ( $roleInfo ) ; 	
		
		return $this -> success ( $roleInfo ) ;
	}
	
	/*
	*@Action_name : 获取权限列表
	*@Author : szt
	*@Time : 2017-07-05
	*/
	public function privList(){
		
		$privInfo = DB::select ( 'select * from zd_privilege' ) ;
		$privInfo = $this -> objToArray ( $privInfo ) ;

		$privList = DB::select ( 'select priv_level from zd_privilege group by priv_level' ) ; 
		
		
		for ( $i = 0 ; $i <= count ( $privList ) - 1 ; $i ++ ) {
			
			$privInfo['arr'][$i] = str_repeat ( "<br>", $i + 1 ) ;  
			
			$privInfo['arr1'][$i] = str_repeat ( '&nbsp;&nbsp;&nbsp;&nbsp;', $i + 1 ) ;  
		}
		
		return $this -> success ( $privInfo ) ; 
	}
	
}