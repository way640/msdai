<?php

namespace App\Http\Controllers\Home;

use App\Http\home;
use DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use App\Libraries\AlipayCore;
use App\Libraries\AlipayMD5;
use App\Libraries\AlipayNotify;
use App\Libraries\AlipayPay;
use App\Libraries\AlipaySubmit;
/*
*@Class_name : 贵金属详情
*@Use : 用户对贵金属的购入等操作
*@Author : (姬国荣)
*@Time : (完成时间)
*/
class GoldController extends CommonController
{
	/*
	*@Use : 贵金属默认首页
	*/
	public function index()
	{
		$info = DB::table('fund')->get();
		$arr = json_decode($info,true);
		// echo '<pre>';
		// print_r($arr);
		//传过去的网页直接掉接口 返回数据
		//return view('home/gold/gold',['info'=>$info]);

		//传过去的页面ajax请求本地 本地调用接口缓冲 在返回数据
		return view('home/gold/golda',['info'=>$info]);
	}
	//  调用本地页面的时候
	public function getlist()
	{
		//接受要查询的贵金属id
		$fund_no = $_GET['fund_no']; 

		//到public目录		public_path('')
		$goods_statis_file = public_path('file')."\\goods_file_".$fund_no.".html";
		//对应静态页文件
		$expr = 60*60; 												//静态文件有效期1小时

		if(file_exists($goods_statis_file))
		{  

			$file_ctime = filectime($goods_statis_file);			//文件创建时间  

			if($file_ctime+$expr > time())
			{
				//如果没过期    输出静态文件内容
				echo file_get_contents($goods_statis_file);
			}
			else
			{
				//如果已过期    
				unlink($goods_statis_file);							//删除过期的静态页文件 
				//调接口
				set_time_limit(0); 
	 			$url = "http://api.k780.com/?app=finance.shgold&goldid=".$fund_no."&version=2&appkey=22630&sign=d66f184f4d189e1981b1ed34fa98e622&format=json";
				$data = file_get_contents($url);
				if (json_decode($data,true)['success']==1) 
				{
					
				}
				else
				{
					$url = "http://api.k780.com/?app=finance.shgold&goldid=".$fund_no."&version=2&appkey=23464&sign=c649cb4d82839e08bf3b5f917e8cc9df&format=json";
					$data = file_get_contents($url);
				}	
	 			ob_start();  
	 			echo $data;
				$content = ob_get_contents();						//把详情页内容赋值给$content变量
				file_put_contents($goods_statis_file, $content);	//写入内容到对应静态文件中
				ob_end_flush();										// 冲刷出（送出）输出缓冲区内容并关闭缓冲
			}
		}
		else
		{ 
			//调接口
			set_time_limit(0); 
 			$url = "http://api.k780.com/?app=finance.shgold&goldid=".$fund_no."&version=2&appkey=22630&sign=d66f184f4d189e1981b1ed34fa98e622&format=json";
			$data = file_get_contents($url);
			if (json_decode($data,true)['success']==1) 
			{
				
			}
			else
			{
				$url = "http://api.k780.com/?app=finance.shgold&goldid=".$fund_no."&version=2&appkey=23464&sign=c649cb4d82839e08bf3b5f917e8cc9df&format=json";
				$data = file_get_contents($url);
			}	
 			ob_start();  
 			echo $data;
			$content = ob_get_contents();							//把详情页内容赋值给$content变量
			file_put_contents($goods_statis_file, $content);		//写入内容到对应静态文件中
			ob_end_flush();											// 冲刷出（送出）输出缓冲区内容并关闭缓冲
		}
	}

	public function getgo()
	{
		//jsonp接值
		$code = $_GET['code'];
		$callback = $_GET['callback'];

		$foud_no_list = [
				1051,1052,1056,1058
		];

		$goods_statis_file = public_path('file\goods_file.html');


		$expr = 60*60*5; 												//静态文件有效期5小时
		if(file_exists($goods_statis_file))
		{  
			$file_ctime = filectime($goods_statis_file);				//文件创建时间  

			if($file_ctime+$expr > time())
			{
				//如果没过期   输出静态文件内容
				echo file_get_contents($goods_statis_file);
			}
			else
			{
				//如果已过期   删除过期的静态页文件 
				unlink($goods_statis_file);
				set_time_limit(0); 
				foreach ($foud_no_list as $key => $fund_no) 
				{
					//接口1  超限换接口
		 			//$url = "http://api.k780.com/?app=finance.shgold&goldid=".$fund_no."&version=2&appkey=23464&sign=c649cb4d82839e08bf3b5f917e8cc9df&format=json";
		 			//接口2
		 			$url = "http://api.k780.com/?app=finance.shgold&goldid=".$fund_no."&version=2&appkey=22630&sign=d66f184f4d189e1981b1ed34fa98e622&format=json";
					$data = file_get_contents($url);
					//$info=json_decode($data,true);
					//print_r($info);die;
					//判断访问的接口是否超限
					if (json_decode($data,true)['success']==1) 
					{
						$arr[$key] = json_decode($data,true)['result'];
					}
					else
					{
						$url = "http://api.k780.com/?app=finance.shgold&goldid=".$fund_no."&version=2&appkey=23464&sign=c649cb4d82839e08bf3b5f917e8cc9df&format=json";
						$data = file_get_contents($url);
						$arr[$key] = json_decode($data,true)['result'];
					}
				}
	 			ob_start();  
	 			echo  "$callback(".json_encode($arr).")";
				$content = ob_get_contents();								//把详情页内容赋值给$content变量
				file_put_contents($goods_statis_file, $content);			//写入内容到对应静态文件中
				ob_end_flush();												// 冲刷出（送出）输出缓冲区内容并关闭缓冲
				}
		}
		else
		{ 
			set_time_limit(0); 
			foreach ($foud_no_list as $key => $fund_no) 
			{
				//接口1  超限换接口
	 			//$url = "http://api.k780.com/?app=finance.shgold&goldid=".$fund_no."&version=2&appkey=23464&sign=c649cb4d82839e08bf3b5f917e8cc9df&format=json";
	 			//接口2
	 			$url = "http://api.k780.com/?app=finance.shgold&goldid=".$fund_no."&version=2&appkey=22630&sign=d66f184f4d189e1981b1ed34fa98e622&format=json";
				$data = file_get_contents($url);
				//$info=json_decode($data,true);
				//print_r($data);die;
				//判断访问的接口是否超限
				if (json_decode($data,true)['success']==1) 
				{
					$arr[$key] = json_decode($data,true)['result'];
				}
				else
				{
					$url = "http://api.k780.com/?app=finance.shgold&goldid=".$fund_no."&version=2&appkey=23464&sign=c649cb4d82839e08bf3b5f917e8cc9df&format=json";
					$data = file_get_contents($url);
					//print_r($data);
					$arr[$key] = json_decode($data,true)['result'];
				}
			}
 			ob_start();  
 			echo  "$callback(".json_encode($arr).")";
			$content = ob_get_contents();								//把详情页内容赋值给$content变量
			file_put_contents($goods_statis_file, $content);			//写入内容到对应静态文件中
			ob_end_flush();												// 冲刷出（送出）输出缓冲区内容并关闭缓冲
		}
	}

	//基金接口
	public function fund()
	{
		//jsonp接值
		$code = $_GET['code'];
		$callback = $_GET['callback'];

		//静态页面
		$fund = public_path('file\fund.html');
		$expr = 60*60*24*7; 									//静态文件有效期7小时
		if(file_exists($fund))
		{  
			$file_ctime = filectime($fund);					//文件创建时间  

			if($file_ctime+$expr > time())
			{
				//如果没过期   输出静态文件内容 
				$data = file_get_contents($fund);
				echo  "$callback(".$data.")";
			}
			else
			{
				//如果已过期   删除过期的静态页文件 
				unlink($fund);

				set_time_limit(0); 
	 			$url = 'http://apis.haoservice.com/lifeservice/fund/page/?pageindex=1&pagesize=50&key=dfdac25eb4174fbeb9d3caacf95e2ab1';
		 		$data  = file_get_contents($url);

	 			ob_start();  
	 			echo  $data;									//输出静态文件的内容
				$content = ob_get_contents();					//把详情页内容赋值给$content变量
				file_put_contents($fund, $content);				//写入内容到对应静态文件中
				ob_end_clean();									//输出缓冲区的内容并关闭这个缓冲区
				echo  "$callback(".$data.")";
			}
		}
		else
		{ 

			set_time_limit(0); 
 			$url = 'http://apis.haoservice.com/lifeservice/fund/page/?pageindex=1&pagesize=50&key=dfdac25eb4174fbeb9d3caacf95e2ab1';
	 		$data  = file_get_contents($url);

 			ob_start();  
 			echo  $data;									//输出静态文件的内容
			$content = ob_get_contents();					//把详情页内容赋值给$content变量
			file_put_contents($fund, $content);				//写入内容到对应静态文件中
			ob_end_clean();									//输出缓冲区的内容并关闭这个缓冲区
			echo  "$callback(".$data.")";
		}
	}
	public function addgold()
	{
		//返回基金
		$goldid = $_GET['goldid'];
		$goods_statis_file = public_path('file')."\\goods_file_".$goldid.".html";
		$data = file_get_contents($goods_statis_file);
		$info = json_decode($data,true)['result'];
		return view('home/gold/addgold',['data'=>$info]);
	}
	//购买基金
	public function numprice()
	{
		if (@$_SESSION['user']) {
			$goldid = $_POST['id'];
			$goods_statis_file = public_path('file')."\\goods_file_".$goldid.".html";
			$data = file_get_contents($goods_statis_file);
			$info = json_decode($data,true)['result'];
			$price = $info['open_price'];
			$num = $_POST['num'];
			$alipay = new AlipayPay();
			//print_r($new);
			//生成支付页面
			$subject = $info['varietynm'];
			$total_fee = $price*$num;
			//echo $total_fee;die;
			$body = '购买贵金属';
			$out_trade_no = date('YmdHis').rand(10000,99999);
			$alipay->requestPay($out_trade_no, $subject, $total_fee, $body, $show_url='');
		}else{
			echo '<script>alert("请先登录")</script>';
			return view('home/user/login');
		}
		
	}
	
	
	
}