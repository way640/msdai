<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
/*
 * @Class_name ：公共加载类
 * @Author：Way
 * @Time ： 2017-06-25
 * **/
class PublicController extends CommonController
{
    public function leftNav ( ) {

        $navInfo = DB::select('SELECT sys_content,sys_link,sys_img FROM zd_system WHERE sys_type = 1 AND sys_status = 1');
        $this->success($navInfo);

    }
}