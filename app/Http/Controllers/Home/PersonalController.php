<?php

namespace App\Http\Controllers\Home;

use App\Http\home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
/*
*@Class_name : 个人中心
*@Use : 用户个人中心页面展示及信息设置
*@Author : 宋子腾
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
	*@Author : 宋子腾
	*@Time : 06-27
	*/
	public function config(){
		
		$userId = $_SESSION['user']['user_id'] ;
		
		$arr = DB::select("select * from zd_user_info where user_id = $userId") ;
		$arr = $this -> objToArray ( $arr ) ;
		
		$data = DB::select("select * from zd_user where user_id = $userId") ;
		$data = $this -> objToArray ( $data ) ;
		
		return view( 'home/personal/config', [ 'data' => $arr[0], 'arr' => $data[0] ] );
	}
	
	/*
	*@Action_name : 用户添加头像
	*@Author : 宋子腾
	*@Time : 06-28
	*/
	public function image(){
	
		return view('home/personal/image');
	}
	
	/*
	*@Action_name : 用户修改密码
	*@Author : 宋子腾
	*@Time : 06-28
	*/
	public function changePwd(){
		
		return view('home/personal/changePwd');
	}
	
    /*
	*@Action_name : 执行头像添加
    *@Author : 宋子腾
	*@Time : 06-29
	*/
	public function addImage(){
		
		if ( $_SESSION['user']['user_id'] ) {
			
			$userId = $_SESSION['user']['user_id'] ;
		}
		
		if ( preg_match( '/^(data:\s*image\/(\w+);base64,)/', $_POST['img'], $result ) ) { 
		
			$type = $result[2]; 
			$new_file = "./userImage/" . $userId . ".{$type}"; 	

		    if( file_exists( $new_file ) ) {
			
                unlink ( $new_file ) ;
            }			
		
			$str = $_POST['img'] ;
			
            $url = explode(',', $str);

			if ( file_put_contents ( $new_file, base64_decode( $url[1] ) ) ) { 
                
				$bloon = DB::select("select user_id from zd_user_info where user_id = " . $userId);
				
				if ( $bloon ) {
					
					$addImage = DB::update("update zd_user_info set user_head = '$new_file' where user_id = $userId");
				} else {
									
					$addImage = DB::insert("insert into zd_user_info( user_id, user_head ) values( $userId,'$new_file')");
				} 
				
				if ( $addImage ) {
					
					$arr = array("status"=>"1");					
                    echo json_encode($arr);
				}
			}
		}	
	}
	
	/*
	*@Action_name : 修改密码
	*@Author : 宋子腾
	*@Time : 06-29
	*/
	public function setNew(){
		
		$arr = $_POST;
		
		$userId = $_SESSION['user']['user_id'] ;
		$pwdInfo = DB::select('select user_pwd from zd_user where user_id = ' . $userId) ;
		$pwdInfo = $this -> objToArray($pwdInfo) ;
 		
		$oldpwd = md5 ( $arr['oldpwd'] ) ;
		if ( $oldpwd != $pwdInfo[0]['user_pwd'] ){
			
			return $this -> error ( $msg = '原密码填写错误' ) ;
		}
		
	    if ( $arr['newpwd'] != $arr['checkpwd'] ) {
			
			return $this -> error ( $msg = '确认密码不正确' ) ;
		} else {
			
			$pwd = md5 ( $arr['newpwd'] ) ;
			$bloon = DB::update("update zd_user set user_pwd = '$pwd' where user_id = $userId") ;
			
			if ( $bloon ) {
				
				unset ( $_SESSION['user'] ) ;
				return $this -> success (  ) ;
			}
		}
	}
	
	/*
	*@Action_name : 绑定个人手机号
	*@Author : 宋子腾
	*@Time : 06-30
	*/
	public function setNumber(){
		
		return view('home/personal/setNumber') ;
	}
	
	/*
	*@Action_name : 发送短信接口请求
	*@Author : 宋子腾
	*@Time : 06-30
	*/
	public function sendMessage(){
		
		$number = $_POST['number'];
		$random = rand ( 100000, 999999 ) ;
		
		$_SESSION[ "captcha" ] = $random;
		
		//短信接口清请求地址
		$href = "http://sms.106jiekou.com/utf8/sms.aspx?account=jazz2312&password=song123123&mobile=".$number."&content=您的订单编码：".$random."。如需帮助请联系客服。" ;
	
		$content = file_get_contents ( $href ) ; 
		
		if ( $content == 100 ) {
			
			return 1 ;
		} 
	}
	
	/*
	*@Action_name : 检测验证码是否正确
	*@Author : 宋子腾
	*@Time : 06-30
	*/
	public function checkCaptcha(){
	
        $userId = $_SESSION['user']['user_id'] ;
	
		$captcha = $_POST['captcha'] ;
		$tel     = $_POST['number'] ;
		
		$checkCaptcha = $_SESSION['captcha'] ;
	
		if ( $captcha == $checkCaptcha ) {
			
			$telInfo = DB::select('select user_tel from zd_user where user_id = ' . $userId) ;
			$telInfo = $this -> objToArray($telInfo) ;
				
			$bloon = DB::update("update zd_user set user_tel = '$tel' where user_id = $userId") ;
			
			if ( $bloon ) {
				
				return $this -> success(  );
			} else {
				
				return $this -> error( $msg = '绑定手机号失败，请重新尝试' );
			}
		}
	}
	
	/*
	*@Action_name : 用户绑定个人邮箱
	*@Author : 宋子腾
	*@Time : 06-30
	*/
	public function bindEmail(){
		
		echo "暂无数据" ;
	}
}