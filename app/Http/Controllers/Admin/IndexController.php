<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
/*
 * @Class_name ：后台首页
 * @Use ： 后台首页界面展示
 * @Author：Way
 * @Time ： 2017-06-12
 * **/
class IndexController extends CommonController
{
    /*
     * @action_name：初始化
     * @author：Way
     * @Time：2017-06-14**/
    public function __construct ( ) {
        parent::__construct();

    }


    /*
     * @Action_name : 首页展示
     * @Author ：Way
     * @Time ：2017-06-12
     * **/
    public function index(){
        return view('admin.index');
    }

    /******************以下是接口类代码******************/
    /*
     * @Action_name ：后台首页左侧导航栏
     * @params ：
     * @return ： array
     * @Author ： Way
     * @Time ： 2017-06-12
     * **/
    public function adminNav ( ) {
        $sysInfo = $this->objToArray(DB::select('select * from zd_system where sys_type = "1" and sys_status = "1"'));
        $sysInfo = $this->dataBack($sysInfo,'sys_id','sys_desc');
        return $this->success($sysInfo);
    }

    /*
     * @Action_name ：后台首页左侧导航栏
     * @params ：
     * @return ： array
     * @Author ： Way
     * @Time ： 2017-06-12
     * **/
    public function admin ( ) {

    }

}
