<?php

namespace App\Http\Controllers\Home;

use App\Http\home;

use DB;
/*
*@Class_name : 借款详情
*@Use : 用户借款信息详情展示
*@Author : (负责人)
*@Time : (完成时间)
*/
class LengingController extends CommonController
{
	/*
	*@Action_name : 借款默认首页
	*/
    public function index()
    {
        //借款首页分页
        $data = DB::table('lenging')->paginate(3);     //每页显示3条
        $data->setPath('lenging');                      //v层中的借款前台页面
        $num=$data->lastPage();
        $nextpage=$num-$data->currentPage() ==0 ? $num : $data->currentPage()+1 ;
        $lastpage=$data->currentPage()-1 <0 ? 1 : $data->currentPage()-1 ;
        $data->next=$nextpage;
        $data->last=$lastpage;
        return view('home/leng/leng',['data'=>$data]);

    }
}