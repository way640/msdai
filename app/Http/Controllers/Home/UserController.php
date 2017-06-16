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

		$username = isset( $this->post['username'] ) ? $this->post['username'] : '';
		$userpwd  = isset( $this->post['userpwd'] )  ? $this->post['userpwd']  : '';

		$userpwd = md5($userpwd);
		
		$userExist = DB::select("select user_account from zd_user where user_account = '$username'");
		
		if ( $userExist ) {

			return $this->error ( '用户名已存在' );
		} else {
			
			$userAdd = DB::insert( "insert into zd_user ( user_account, user_pwd ) values ( '234567', '".md5('123456')."' )" );
			$id = DB::getPdo()->lastInsertId();
		}
		
		if ( $userAdd ) {
			
			session_start();
			$_SESSION[ "username" ] = $username;
			$_SESSION[ "user_id" ]  = $id;
			
			return $this->success (  );
		} else { 
			
			return $this->error ( '网络异常，请重新尝试' );
		}
		
	}
	
	/*
	*@Action_name : 用户找回密码
	*/
	public function forget(){

		return view('home/user/forget');
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
	public function doLlogin(){
		//接收用户账号密码
		$user_name = $_POST['username'];
		$user_pwd = $_POST['password'];
		// echo $user_name.$user_pwd;die;
		//判断账号是否在数据表中
		$handle = DB::table('user');
		$where = " user_account='$user_name' or user_tel='$user_name' or user_email='$user_name'";
		$res = $handle->whereRaw($where)->first();
		$r1 = json_encode($res);
		$res = json_decode($r1,true);
		// echo '<pre>';
		// var_dump($res);
		// die;
		if ($res) {
			if ($res['user_pwd']==$user_pwd) {
				//return view('home/user/login');
				$_SESSION['user_name']=$res['user_id'];
				redirect('user/login');
			}else{
				// echo "密码错误";
				redirect('user/regist');
			}
		}else{
			// echo "用户名错误";
			redirect('user/regist');
		}
	}
}