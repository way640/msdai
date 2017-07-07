<?php

namespace App\Http\Controllers\Home;


use App\Http\home;
use DB;
use App\Libraries\AlipayCore;
use App\Libraries\AlipayMD5;
use App\Libraries\AlipayNotify;
use App\Libraries\AlipayPay;
use App\Libraries\AlipaySubmit;

/*
*@Class_name : 支付
*@Use : 
*@Author : (666)
*@Time : (完成时间)
*/
class CzController extends CommonController
{

	public function index()
	{
		return view('home/cz/index');
	}
	//生成支付页面
	public function add()
	{
		$alipay = new AlipayPay();
		//print_r($new);
		//生成支付页面
		$subject = $_POST['name'];
		$total_fee = $_POST['price'];
		//$total_fee1 = $_POST['price'];
		$body = $_POST['desc'];
		$out_trade_no = date('YmdHis').rand(10000,99999);
		$alipay->requestPay($out_trade_no, $subject, $total_fee, $body, $show_url='');
	}
	//同步回调地址
	public function return_url($price)
	{
		//var_dump($_GET);
		//签名认证
		$alipay = new AlipayPay();
		if ($alipay->verifyReturn()) 
		{
			//echo '签名正确';
			if ($_GET['trade_status']=='TRADE_SUCCESS') 
			{
				$user_id = $_SESSION['user']['user_id'];
				//$user_id = 1;
				//查询原来的余额
				 $info = DB::table('user_info')->where('user_id',$user_id)->first();
				 if (empty($info)) 
				 {
				 	echo '请您完善信息';
					return view ( 'home/personal/config' ) ;
				 }else{
					//修改余额 = 原来的余额加上充值的金额
					DB::table('user_info')->where('user_id',$user_id)->update(['user_money'=> ($info->user_money+$price)]);
					//没值 新手 添加数据
					$data = [
							'user_id' => $user_id,
							'roll_money' => $price,
							'roll_type' => '1',
							'roll_time' => time(),
							'roll_in' => $price,
							'roll_account' => $_GET['buyer_email']
						];
					//处理逻辑
					$Q = DB::table('roll')->insert($data);
					//判断是否入库成功
					if($Q)
					{
						echo '钱没到账,又给那小子了';
						//个人中心账户页面
						return view('home/personal/personal');
					}else{
						//echo '充值失败';
						return view('home/cz/index');
					}
				}
			}
			else
			{
				return view('home/cz/index');
			}
		}
		else
		{
			//echo '签名失败';
			return view('home/cz/index');
		}
	}
}