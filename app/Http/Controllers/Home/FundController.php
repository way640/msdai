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
class FundController extends CommonController
{
	//基金更多展示页面
	public function fundlist(){

	$fund = public_path('file\fund.html');
        
    $expr = 60*60*24*7;                                                             //静态文件有效期7小时
    if(file_exists($fund))
    {  
        $file_ctime = filectime($fund);                                        //文件创建时间  

        if($file_ctime+$expr > time())
        {
            //如果没过期   输出静态文件内容 
            $info = file_get_contents($fund);
        }
        else
        {    
            unlink($fund);                                                                  //如果已过期   删除过期的静态页文件 
            set_time_limit(0); 
            $url = 'http://apis.haoservice.com/lifeservice/fund/page/?pageindex=1&pagesize=50&key=dfdac25eb4174fbeb9d3caacf95e2ab1';
            $info  = file_get_contents($url);

            ob_start();  
            echo  $info;                                                                    //输出静态文件的内容
            $content = ob_get_contents();                                                   //把详情页内容赋值给$content变量
            file_put_contents($fund, $content);                                             //写入内容到对应静态文件中
            ob_end_flush();                                                                 //输出缓冲区的内容并关闭这个缓冲区
        }
    }
    else
    { 
        set_time_limit(0); 
        $url = 'http://apis.haoservice.com/lifeservice/fund/page/?pageindex=1&pagesize=50&key=dfdac25eb4174fbeb9d3caacf95e2ab1';
        $info  = file_get_contents($url);

        ob_start();  
        echo  $info;                                                                    //输出静态文件的内容
        $content = ob_get_contents();                                                   //把详情页内容赋值给$content变量
        file_put_contents($fund, $content);                                             //写入内容到对应静态文件中
        ob_end_flush();  
    }

	$info = file_get_contents($fund);
        //print_r($info);
	$data = json_decode($info,true)['result'];
	//获取当前的分页数
    $currentPage = LengthAwarePaginator::resolveCurrentPage();
    //实例化collect方法
    $collection = new Collection($data);
    // print_r($collection);
    //定义一下每页显示多少个数据
    $perPage = 5;
    //获取当前需要显示的数据列表
    $currentPageSearchResults = $collection->slice(($currentPage-1) * $perPage, $perPage)->all();
    //print_r($currentPageSearchResults);
    //创建一个新的分页方法
    $data= new LengthAwarePaginator($currentPageSearchResults, count($collection), $perPage);
    $data->setPath('fundlist'); 
    $num = $data->lastpage();
    //上一页 下一页
    $nextpage=$data->currentPage()+1 > $num ? $num : $data->currentPage()+1 ;
    $lastpage=$data->currentPage()-1 <   0  ?   1  : $data->currentPage()-1 ;
    $data->next=$nextpage;
    $data->last=$lastpage;
    return view('Home/Gold/fund',['data'=>$data]);
	}
}