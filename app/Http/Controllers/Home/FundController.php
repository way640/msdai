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

	$info = file_get_contents($fund);

	$data = json_decode($info,true)['result'];
	//获取当前的分页数，就是第6这样的
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
        $nextpage=$data->currentPage()+1 >$num ? $num : $data->currentPage()+1 ;
        $lastpage=$data->currentPage()-1 <0 ? 1 : $data->currentPage()-1 ;
        $data->next=$nextpage;
        $data->last=$lastpage;

        return view('home/gold/fund',['data'=>$data]);
	}
}