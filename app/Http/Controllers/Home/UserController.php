<?php

namespace App\Http\Controllers\Home;

use App\Http\home;
//use Germey\Geetest\GeetestCaptcha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


/*
*@Class_name : 用户登录注册操作
*@Use : 用户的注册登录等操作
*@Author : (负责人)
*@Time : (完成时间)
*/
class UserController extends CommonController
{

	/*
	*@Action_name : 用户登录默认首页
	*/
	public function index(){
		
		return view('home/user/login');
	}
	
	/*
	*Action_name : 登录调用框架级
	*/
	public function showLogin(){
		
		return view('home/user/loginForm');
	}
	
	
	/*
	*@Action_name : 用户注册默认首页
	*/
	//use GeetestCaptcha;

	
	public function regist(){
		
		return view ( 'home/user/regist' );
	}
	
	/*
	*@Action_name : 新用户注册页面
	*/
	public function doRegist () {

		$userName = isset( $this->post['username'] ) ? $this->post['username'] : '';
		$userPwd  = isset( $this->post['userpwd'] )  ? $this->post['userpwd']  : '';

		$userPwd = md5($userPwd);
		
		$userExist = DB::select("select user_account from zd_user where user_account = '$userName'");
		
		if ( $userExist ) {

			return $this->error ( '用户名已存在' );
		} else {
			
			$regTime = time();
			$userAdd = DB::insert( "insert into zd_user ( user_account, user_pwd , user_reg_time ) values ( '$userName', '$userPwd' , '$regTime' )" );
			$id = DB::getPdo()->lastInsertId();
		}
		
		if ( $userAdd ) {
			
			//用户注册成功，添加用户，以及用户信息
		    uesDB::insert ( "insert into zd_user_login ( login_id, user_id, user_login_time ) val ( '', " . $_SESSION['user']['user_id'] . ", " . time() . " )" ) ; 
			
			$arr = [ 'username' => $userName, 'user_id' => $id ];
			
			$_SESSION[ "user" ] = $arr;
			$userId = $_SESSION['user']['user_id'] ; 
			
			$addImage = DB::insert("insert into zd_user_info( user_id, user_add_time ) values( $userId, $time)");
			
			return $this->success (  );
		} else { 
			
			return $this->error ( '网络异常，请重新尝试' );
		}
		

	}
	
	/*
	*@Action_name : 用户找回密码
	*/
	public function forget(){


	}

	/*
	*@Action_name : 设置验证码
	*/
	public function captcha(){
		return view('home/web/StartCaptchaServlet');
	}

	/*
	*@Action_name : 用户登录首页
	*/
	public function login(){
		
		return view('home/user/login');
	}
	
	/*
	*@Action_name : 用户登录验证页面
	*/
	public function doLogin(){

		$userName = isset( $this->post['username'] ) ? $this->post['username'] : '';
		$userPwd  = isset( $this->post['userpwd'] )  ? $this->post['userpwd']  : '';

		if ( empty ( $userPwd ) ) {
			
			return $this->error ( '账户密码未填写' );
		}
		
		if ( empty ( $userName )) {
			
			return $this->error ( '用户名未填写' );
		}

		$userPwd = md5($userPwd);
		
		$userExist = DB::select("select user_id, user_account from zd_user where user_account = '$userName' and user_pwd = '$userPwd'");	

		if ( !empty( $userExist ) ) {
			
			$userData = $this->objToArray ( $userExist );
		}

		if ( $userExist ) {
			
			$arr = [ 'username' => $userName, 'user_id' => $userData[0]['user_id'] ];
			$_SESSION[ "user" ] = $arr; 
			
			DB::update ( 'update zd_user_login set user_login_time = ' . time() . ' where user_id = ' . $_SESSION['user']['user_id'] ) ;
			
			return $this->success (  );
		}else{
			
			return $this->error ( '密码输入错误' );
		}
	}
	
	/*
	*@Action_name : 用户退出登录
	*/
	public function logout(){
		
		unset( $_SESSION['user'] );
		
		return $this->success(  );
	}

}