<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Support\Facades\DB;
/*
 * @Class_name ：权限委派
 * @Use ： 权限的临时委派
 * @Author：Way
 * @Time ： 2017-06-29
 * **/
class AppoController extends CommonController
{
    /**************以下是展示页面***************/
    /*
     * @action_name：权限委派页面
     * @author：Way
     * @Time：2017-06-29**/
    public function index(){
        return view('admin.appo');
    }

    /*
     * @action_name：新增委派页面
     * @author：Way
     * @Time：2017-06-29**/
    public function appoAdd(){

    }

    /**************以下是业务接口***************/


    /*
     * @action_name：委派信息
     * @author：Way
     * @Time：2017-06-29**/
    public function appoInfo(){
        $appoInfo = DB::select('select * from zd_appointment where app_from = '.session('admin')['admin_id']);
        $this->success($appoInfo);

    }

    /*
     * @action_name：委派增加
     * @author：Way
     * @Time：2017-06-29**/
    public function appoInsert(){

    }

    /*
     * @action_name：委派解除
     * @author：Way
     * @Time：2017-06-29**/
    public function appoDel(){

    }

}