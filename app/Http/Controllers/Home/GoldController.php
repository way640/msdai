<?php

namespace App\Http\Controllers\Home;

use App\Http\home;
use DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

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
		//传过去的网页直接掉接口 返回数据

		return view('home/gold/gold',['info'=>$info]);
		
		//传过去的页面ajax请求本地 本地调用接口缓冲 在返回数据
		//return view('home/gold/golda',['info'=>$info]);

	}
	//  调用本地页面的时候
	public function getlist(){
		$fund_no = $_GET['fund_no']; 
		//到public目录
		//public_path('')
		$goods_statis_file = public_path('file')."\\goods_file_".$fund_no.".html";
		//对应静态页文件
		$expr = 60*60; //静态文件有效期，秒
		if(file_exists($goods_statis_file)){  
			$file_ctime = filectime($goods_statis_file);//文件创建时间  
			if($file_ctime+$expr > time()){//如果没过期    
				echo file_get_contents($goods_statis_file);//输出静态文件内容    
				exit;  
			}else{//如果已过期    
				set_time_limit(0); 
	 			$url = "http://api.k780.com/?app=finance.shgold&goldid=".$fund_no."&version=2&appkey=23464&sign=c649cb4d82839e08bf3b5f917e8cc9df&format=json";
				$data = file_get_contents($url);
				$arr = json_decode($data,true);
	 			ob_start();  
	 			echo $data;
				//从数据库读取数据，并赋值给相关变量
				$content = ob_get_contents();//把详情页内容赋值给$content变量
				file_put_contents($goods_statis_file, $content);//写入内容到对应静态文件中
				ob_end_flush();//发送内部缓冲区的内容到浏览器，删除缓冲区的内容，关闭缓冲区。
			}
		}else{ 
			//查库
			set_time_limit(0); 
 			$url = "http://api.k780.com/?app=finance.shgold&goldid=".$fund_no."&version=2&appkey=23464&sign=c649cb4d82839e08bf3b5f917e8cc9df&format=json";
			$data = file_get_contents($url);
 			ob_start();  
 			echo $data;
			//从数据库读取数据，并赋值给相关变量
			$content = ob_get_contents();//把详情页内容赋值给$content变量
			file_put_contents($goods_statis_file, $content);//写入内容到对应静态文件中
			ob_end_flush();//发送内部缓冲区的内容到浏览器，删除缓冲区的内容，关闭缓冲区。
		}
	}

	public function getgo(){
		// $code = $_GET['code'];
		// $callback = $_GET['callback'];
		$foud_no_list = [
				1051,1052,1053,1054
		];
		$goods_statis_file = public_path('file\goods_file.html');
		//echo $goods_statis_file;die;
		//对应静态页文件
		$expr = 60*60; //静态文件有效期，秒
		if(file_exists($goods_statis_file)){  
			 $file_ctime = filectime($goods_statis_file);//文件创建时间  
			if($file_ctime+$expr < time()){//如果没过期    
				echo file_get_contents($goods_statis_file);//输出静态文件内容      
			}else{//如果已过期    
				set_time_limit(0); 
				foreach ($foud_no_list as $key => $fund_no) {
		 			$url = "http://api.k780.com/?app=finance.shgold&goldid=".$fund_no."&version=2&appkey=23464&sign=c649cb4d82839e08bf3b5f917e8cc9df&format=json";
					$data = file_get_contents($url);
					$arr[$key] = json_decode($data,true)['result'];
				}
	 			ob_start();  
	 			echo "$callback(".json_encode($arr).")";
	 			// echo $data;
				$content = ob_get_contents();//把详情页内容赋值给$content变量
				file_put_contents($goods_statis_file, $content);//写入内容到对应静态文件中
				ob_end_flush();//发送内部缓冲区的内容到浏览器，删除缓冲区的内容，关闭缓冲区。
			}
		}else{ 
			set_time_limit(0); 
			foreach ($foud_no_list as $key => $fund_no) {
	 			$url = "http://api.k780.com/?app=finance.shgold&goldid=".$fund_no."&version=2&appkey=23464&sign=c649cb4d82839e08bf3b5f917e8cc9df&format=json";
				$data = file_get_contents($url);
				$arr[$key] = json_decode($data,true)['result'];
			}
 			ob_start();  
 			echo  "$callback(".json_encode($arr).")";
 			// echo $data;
			$content = ob_get_contents();//把详情页内容赋值给$content变量
			file_put_contents($goods_statis_file, $content);//写入内容到对应静态文件中
			ob_end_flush();//发送内部缓冲区的内容到浏览器，删除缓冲区的内容，关闭缓冲区。
		}
	}
	//基金接口
	public function fund(){
		 // $url = 'http://apis.haoservice.com/lifeservice/fund/page/?pageindex=1&pagesize=50&key=dfdac25eb4174fbeb9d3caacf95e2ab1';
		 // $data  = file_get_contents($url);
		$code = $_GET['code'];
		$callback = $_GET['callback'];
		$fund = public_path('file\fund.html');
		echo "$callback(".file_get_contents($fund).")";
		// "symbol": "660001", //基金代码
		// "name": "农银行业成长股票",	//基金全称
		// "CompanyName": "农银汇理",	//基金简称
		// "SubjectName": "创业板",	基金类型
		// "clrq": "2008-08-04 00:00:00", 成立日期
		// "dwjz": 2.2396,		单位净值 元
		// "ljjz": 2.8396,		累计净值
		// "jjgm": 22.01, 		基金规模
		// "trend": 47, 		基金近1月涨幅超过同类平均47.09%
	}
}