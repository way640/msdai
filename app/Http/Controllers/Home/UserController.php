<?php

namespace App\Http\Controllers\Home;

use App\Http\home;
//use Germey\Geetest\GeetestCaptcha;
use Illuminate\Http\Request;

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
//	use GeetestCaptcha;
	
	public function regist(){
		
		return view ( 'home/user/regist' );
	}
	
	/*
	*@Action_name : 新用户注册页面
	*@param : $username 用户名
	*@param : $userpwd  用户密码
	*/
	public function doRegist ( $username = '', $userpwd = '' ) {
		
		//无法使用post请求报错405，暂用get方式传值   宋子腾  6.13  @todo 待修改
		
		/**
		 * 输出二次验证结果,本文件示例只是简单的输出 Yes or No
		 */
		// error_reporting(0);

		/*require_once dirname( dirname(__FILE__) ) . '/lib/class.geetestlib.php';
		require_once dirname( dirname(__FILE__) ) . '/config/config.php';
		session_start();
		$GtSdk = new GeetestLib( CAPTCHA_ID, PRIVATE_KEY );

		if ( $_SESSION['gtserver'] == 1 ) {   //服务器正常
			
			$result = $GtSdk->success_validate ( $_POST['geetest_challenge'], $_POST['geetest_validate'], $_POST['geetest_seccode'], $data);
			if ($result) {

				echo '{"status":"success"}';
			} else{

				echo '{"status":"fail"}';
			}
		}else{  //服务器宕机,走failback模式
			if ( $GtSdk->fail_validate ( $_POST['geetest_challenge'], $_POST['geetest_validate'], $_POST['geetest_seccode'] ) ) {

				echo '{"status":"success"}';
			}else{

				echo '{"status":"fail"}';
			}
		}*/
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

		return view('/home/web/StartCaptchaServlet');
	}

	/*
	*@Action_name : 用户登录验证页面
	*/
	public function login(){
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