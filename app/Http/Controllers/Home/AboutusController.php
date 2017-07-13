<?php

namespace App\Http\Controllers\Home;

use App\Http\home;
//use Germey\Geetest\GeetestCaptcha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


/*
*@Class_name : 安全保障
*@Use : 用户的注册登录等操作
*@Author : (负责人)
*@Time : (完成时间)
*/
class AboutusController extends CommonController
{
    //
    public function index()
    {
        return view('Home1/Aboutus/aboutus');
    }
}