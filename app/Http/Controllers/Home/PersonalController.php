<?php

namespace App\Http\Controllers\Home;

use App\Http\home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail; 

/*
*@Class_name : 个人中心
*@Use : 用户个人中心页面展示及信息设置
*@Author : 宋子腾
*@Time : (完成时间)
*/
class PersonalController extends CommonController
{
	/*
	*@Action_name :用户个人中心构造方法
	*@Author : 宋子腾
	*@Time : 07-04
	*/
	public function __construct(){
		
		parent::__construct();
	}
	
	/*
	*@Action_name : 个人中心默认首页 
	*/
	public function index(){

	    $userId = @$_SESSION['user']['user_id'] ; 
		
		$userInfo = DB::select ( "select * from zd_user_info where user_id = $userId" ) ;
        $userInfo = $this -> objToArray ( $userInfo ) ; 		
		
		return view('home/personal/personal', [ 'userInfo' => $userInfo[0] ]);
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
			$new_file = "userImage/" . $userId . ".{$type}";

		    if( file_exists( $new_file ) ) {
			
                unlink ( $new_file ) ;
            }			
		
			$str = $_POST['img'] ;
			
            $url = explode(',', $str) ;
            $time = time() ;
			
			if ( file_put_contents ( $new_file, base64_decode( $url[1] ) ) ) { 
                
				$bloon = DB::select("select user_id from zd_user_info where user_id = " . $userId);
				
				if ( $bloon ) {
					
					$addImage = DB::update("update zd_user_info set user_head = '$new_file', user_add_time = $time where user_id = $userId");
				}

			    $arr = array("status"=>"1");					
                echo json_encode($arr);

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
		
		return view ( 'home/personal/bindemail' ) ; 
	}
	
	/*
	*@Action_name : 执行用户绑定操作
	*@Author : 宋子腾
	*@Time : 07-03
	*/
	public function doEmail(){
		
		$userId = $_SESSION['user']['user_id'] ; 
		$emailAddress = $_POST["email"];
     
	    $userInfo = DB::select ( "select * from zd_user where user_id = '$userId'" ) ; 
		$userInfo = $this -> objToArray ( $userInfo ) ;
	 
	    //对用户信息进行加密
		$userArr = $userInfo[0] ;
		$userArr['user_email'] = $emailAddress ; 
		
		$userData = base64_encode ( json_encode ( $userArr ) ) ; 
	 
      	$pattern = "/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+$/" ;
        if ( preg_match ( $pattern, $emailAddress ) ) {
            
			//邮件参数设置   用户名                          用户邮箱     内容标题      内容详情
		    $this -> smtp ( $userArr['user_account'], $emailAddress, '激活邮箱', '请在页面点击链接，激活您的邮箱http://www.zdmoney.com/personal/activate?mailbox='.$userData ) ;
		    
			return $this -> success (  ) ;
		}
	}
	
	/*
	*@Action_name : 用户激活邮箱
	*@Author : 宋子腾
	*@Time : 07-04
	*/
	public function activate(){
		
		$userInfo = isset ( $_GET['mailbox'] ) ? $_GET['mailbox'] : '' ; 
		
		if ( $userInfo ) {
			
	        //解密数据信息
		    $userInfo = json_decode ( base64_decode ( $userInfo ) ) ;
		    $userInfo = $this -> objToArray ( $userInfo ) ;	
			
			$userId = $userInfo['user_id'] ; 		
			$user_email = $userInfo['user_email'] ; 
			
            $bloon = DB::update ( "update zd_user set user_email = '$user_email' where user_id = $userId" ) ; 
			
			if ( $bloon ) {
				
				$status = 1 ; 
			} else {
				
				$status = 0 ;
			}
			
			return view ( 'home/personal/activEmail', [ 'status' => $status ]) ;
		}
	}
	
	/*
	*@Action_name : 用户填写地址
	*@Author ： 宋子腾
	*@Time : 07-04
	*/
	public function setAddress(){
		
		
        return view ( 'home/personal/setAddress' ) ;
	}
	
	/*
	*@Action_name : 添加地址
	*@Author : 宋子腾
	*@Time : 07-04
	*/
    public function addAddress(){
		
		$address = $_POST['address'] ; 
		$userId = $_SESSION['user']['user_id'] ; 
		$time = time() ;
		
		//$pattern = "#([0-9a-zA-Z-_x{4e00}-x{9fa5}]+)#iu" ;
		//if ( preg_match ( $pattern, $address ) ) {
            
            $bloon = DB::update ( "update zd_user_info set user_addr = '$address', user_add_time = '$time' where user_id = $userId" ) ;
		//}
			
			return $this -> success ( ) ; 
	}	
	
	/*
	*Action_name : 获取用户信息
	*/
	public function getUserInfo(){
		
		$userId = $_SESSION['user']['user_id'] ; 
		
		//获取用户个人信息
		$userMore = DB::select ( 'select * from zd_user where user_id = ' . $userId ) ;
        $userMore = $this -> objToArray ( $userMore ) ; 		
		
		//获取用户登录时间
		$userInfo = DB::select ( 'select user_login_time from zd_user_login where user_id = ' . $userId ) ;
        $userInfo = $this -> objToArray ( $userInfo ) ; 
		
		//获取用户账户金额，绑定地址
		$userArr = DB::select ( 'select * from zd_user_info where user_id = ' . $userId ) ; 
		$userArr = $this -> objToArray ( $userArr ) ; 
		
		//获取用户出账，入账信息
		$userData = DB::select ( 'select roll_money, roll_in, roll_out from zd_roll where user_id = ' . $userId ) ; 
		$userData = $this -> objToArray ( $userData ) ; 
		
		//统计累计充值金额
		$moneyIn  = '' ; 
		$moneyOut = '' ; 
		if ( count ( $userData ) > 1 ) {
			
			foreach ( $userData as $k => $v ) {
				
				$moneyIn  = $moneyIn  + $v['roll_in'] ; 
				$moneyOut = $moneyOut + $v['roll_out'] ; 
			}
		}
		
        if ( empty ( $moneyIn ) ) {

        	$moneyIn = 0 ; 
        }

        if ( empty ( $moneyOut ) ) {

            $moneyOut = 0 ;
        }

		$userAddr = $userArr[0]['user_addr'] ;
		
		if ( empty ( $userAddr ) ) {
			
			$userAddr = '您还未绑定地址';
		}
		
		if ( empty ( $userArr[0]['user_money'] ) ) {
			
			$userArr[0]['user_money'] = 0 ; 
		}
		
		$num = 5 ;
		
		foreach ( $userMore[0] as $userKey => $userVal ) {
			
			if ( $userMore[0][$userKey] == '' ) {
				
				$num = $num - 1 ;
			}
		}
		
		if ( $userArr[0]['user_head'] == ''  ) {
			
			$num = $num - 1 ;
		}
		
		if ( $userArr[0]['user_addr'] == '' ) {
			
			$num = $num - 1 ;
		}
	
	    $showData['more']            = $num * 20 . "%" ;
	    $showData['userAddr']        = $userAddr ; 
		$showData['moneyIn']         = number_format ( $moneyIn, 2 ) ;
		$showData['moneyOut']        = number_format ( $moneyOut, 2 ) ; 
		$showData['money']           = number_format ( $userArr[0]['user_money'], 2 ) ;
		$showData['user_login_time'] = date("Y-m-d H:i:s", $userInfo[0]['user_login_time']) ; 
	
		return $this -> success ( $showData );
	}

	/*
	*@Action_name : 验证身份证实名
	*@Author : szt
	*@Time : 07-08
	*/
    public function bindCard(){

    	return view( 'home/personal/bindCard' ) ; 
    }

	/*
	*@Action_name : 验证身份证是否正确
	*@Author : szt
	*@Time : 07-08
	*/
    public function doBindCard(){

        $userId = $_SESSION['user']['user_id'] ; 
    	$data = $this -> post ; 
        $name = $data['name'] ; 
    	$card = strtoupper($data['card']);

        $regx = "/(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/"; 

        if(!preg_match($regx, $card)) { 

            return $this -> error() ; 
        } 

        $url = "http://api.avatardata.cn/IdCardCertificate/Verify?key=fab6dbd889884619a21c1f6dee8e66cd&realname=$name&idcard=$card" ; 
   
        $content = file_get_contents( "$url" ) ; 

        $data = json_decode($content, true);

        if ( $data['error_code'] == 0 ) {

        	DB::update ( 'update set zd_user_info user_card = '.$card.', user_name = '.$name.', user_is_loan = 1 where user_id = '.$userId ) ; 
            $this -> success() ;
        } else {

        	$thie -> error() ; 
        }

/*        Array
(
    [result] => Array
        (
            [code] => 1001
            [message] => 不一致
        )

    [error_code] => 0
    [reason] => Succes
)*/
    }

}