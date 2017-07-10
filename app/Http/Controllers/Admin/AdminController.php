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
		
		return view('Admin/admin');
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
	
	/*
	*@Action_name : 添加赋权角色
	*@Author : szt
	*@Time : 2017-07-06
	*/
	public function addRole(){
		
		$priv = $_POST['priv_list'] ;
		$privId = $_POST['role_id'] ; 
		$privList = explode ( ',', $priv ) ; 
		
		unset ( $privList[0] ) ; 
		
		for ( $i = 1 ; $i <= count ( $privList ) ; $i ++ ) {
			
			DB::insert ( 'insert into zd_role_prive ( role_id, priv_id ) values ( ' . $privId . ', ' . $privList[$i] . ' )' ) ;
		}
		
		return $this -> success ( ) ;
	}
	
	/*
	*@Action_name : 管理员赋角色页面
	*@Author : szt
	*@Time : 2017-07-06
	*/
	public function adminRole(){
		
		return view ( 'Admin/adminRole' ) ; 
	}
	
	/*
	*@Action_name : 获取管理员列表
	*@Author : szt
	*@Time : 2017-07-06
	*/
    public function getAdmin(){
		
		$adminInfo = DB::select ( 'select admin_id, admin_account from zd_admin' ) ; 
		$adminInfo = $this -> objToArray ( $adminInfo ) ;
			
		return $this -> success ( $adminInfo ) ;
	}
	
	/*
	*@Action_name : 添加管理员赋角色
	*@Author : szt 
	*@Time : 2017-07-06
	*/
	public function addAdminRole(){
		
        $roleList = $_POST['role_list'] ;
		$adminId  = $_POST['admin_id'] ; 
		
		$roleInfo = explode ( ',', $roleList ) ; 
		
		unset ( $roleInfo[0] ) ; 
		
		for ( $k = 1 ; $k <= count ( $roleInfo ) ; $k ++ ) {
			
			DB::insert ( 'insert into zd_admin_role ( admin_id, role_id ) values( ' . $adminId . ', ' . $roleInfo[$k] . ' )' ) ;
		}
		
		/*
		处理多个角色对应同个权限的问题
		
		for ( $i = 1 ; $i <= count ( $roleInfo ) ; $i ++ ) {
			
			$roleArr[] = DB::select ( 'select priv_id from zd_role_prive where role_id = ' . $roleInfo[$i] ) ; 
		} 
		
		$roleArr = $this -> objToArray ( $roleArr ) ; 
		
		$roleData = [] ; 
		foreach ( $roleArr as $k => $v ) {
			
			foreach ( $roleArr[$k] as $k1 => $v2 ) {
				
				if ( !in_array( $v2['priv_id'], $roleData ) ) {
					
					$roleData[] = $v2['priv_id'] ; 
				}
			}
		}*/
		
		return $this -> success (  ) ;
	}

	public function getLog(){

        //获取系统的日志信息
		$logInfo = DB::select ( 'select * from zd_log limit 10' ) ; 
        $logInfo = $this -> objToArray ( $logInfo ) ; 

        foreach($logInfo as $k => $v){

        	if($v['log_type'] == 1){

        		$logInfo[$k]['type_name'] = '添加' ;
        	}
        	if($v['log_type'] == 2){

        		$logInfo[$k]['type_name'] = '修改' ;
        	}
        	if($v['log_type'] == 3){

        		$logInfo[$k]['type_name'] = '查看' ;
        	}
        	if($v['log_type'] == 4){

        		$logInfo[$k]['type_name'] = '删除' ;
        	}
        	if($v['log_type'] == 5){

        		$logInfo[$k]['type_name'] = '登录' ;
        	}
        	if($v['log_type'] == 6){

        		$logInfo[$k]['type_name'] = '退出' ;
        	}

        	$logInfo[$k]['time'] = date('Y-m-d H:i:s', $logInfo[$k]['log_time']) ; 
        }

        return $this -> success ( $logInfo ) ; 

	}
	
}