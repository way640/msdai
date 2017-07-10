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
        return view('Admin/index');
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
     * @Action_name ：后台首页信息
     * @params ：
     * @return ： json
     * @Author ： Way
     * @Time ： 2017-06-12
     * **/
    public function indexData ( ) {
        //用户注册数据
        $todayTime = intval(strtotime(date('Y-m-d', time())));
        $yesterdayTime = $todayTime-24*3600;
        $todayUser = DB::select('select count(user_id) as user_num from zd_user where user_reg_time >= '.$todayTime);
        $yesterday = DB::select('select count(user_id) as user_num from zd_user where user_reg_time >= '.$yesterdayTime.' and user_reg_time < '.$todayTime);

        //充值提现数据
        $todayRoll = DB::select('select roll_type,sum(roll_money) as user_money from zd_roll where roll_time < '.$todayTime.' group by roll_type');

        //服务器情况
        $status = is_file(config_path('').'\stop.lock') ? '0' : '1';
        //phpinfo(1);
        $result['dataInfo']['todayUser']    = ['data'=>$todayUser[0]->user_num,'info'=>'今日注册(人次)'];
        $result['dataInfo']['yesterday']    = ['data'=>$yesterday[0]->user_num,'info'=>'昨日注册(人次)'];
        $result['dataInfo']['roll_in']      = ['data'=>intval($todayRoll[1]->user_money/10000),'info'=>'累计充值(万元)'];
        $result['dataInfo']['roll_out']     = ['data'=>intval($todayRoll[0]->user_money/10000),'info'=>'累计提现(万元)'];
        $result['system']['system']         = ['info'=>'系统运行环境','data'=>php_uname()];
        $result['system']['laravel']        = ['info'=>'系统运行框架','data'=>'laravel-'.app()::VERSION];
        $result['system']['status']         = ['info'=>'系统开启状态','data'=>$status];
        $result['system']['start_time']     = ['info'=>'系统运行时间','data'=>strtotime('2017-07-01 12:00:00')];
        // var_dump(is_file(config_path('').'\stop.lock'));die;
        return $this->success($result);


    }


    /*
     * @Action_name ：前台入口管理
     * @params ：1  关闭，0  开启
     * @return ： 
     * @Author ： Way
     * @Time ： 2017-07-06
     * **/
    public function checkStatus($value='')
    {
        $status = $this->get['status'];
        if($this->get['superpwd'] === 'chengye147way'){
            $fileName = config_path('').'/stop.lock';
            if($status == '1'){
                $time = date('Y-m-d H:i:s',time());
                file_put_contents($fileName, $time);
                return $this->success();
            }else if($status == '0'){
                unlink($fileName);
                return $this->success();
            }
        }
        return $this->error();
    }

}
