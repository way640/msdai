<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Email;
/*
 * @Class_name : 后台公共控制器
 * @author ： 程晔
 * @time ： 2017-06-12
 * **/
class CommonController extends Controller
{
    protected $get = '';
    protected $post = '';
    public $emailAddr = '';
    public $emailTitle = '';


    /*
     * @action_name ： 公共构造方法
     * @param：
     * @return ：json
     * @author ：Way**/
    public function __construct() {
        $this->get = $_GET;
        $this->post = $_POST;
    //  session(['admin'=>['admin_id'=>'1','admin_name'=>'name']]);//方便测试跳过登录检测
        $checkUserInfo = $this->checkUserInfo($_SESSION['admin']['admin_id']);
		
        if ( !$checkUserInfo ) {
            echo self::gogo('admin/login/login','您好像还没有登录！！');
            die();
        }
    }

    /*
     * @action_name ： 成功返回数据
     * @param：需返回的数据 array  成功信息 msg
     * @return ：json
     * @author ：Way**/
    protected function success ( $data = array() , $msg = '请求成功' , $desc = '') {
        $result = array(
            'status' => 1,
            'msg' => is_array($data)?$msg:$data,
            'data' => is_array($data)?$data:array(),
            'data_desc' => $desc,
        );
        return json_encode($result);
    }

    /*
     * @action_name ： 失败返回数据
     * @param：失败信息 string  失败数据 array
     * @return ：json
     * @author ：Way**/
    protected function error ( $msg = '请求失败' , $data = array() , $desc = '') {
        $result = array(
            'status' => 0,
            'msg' => $msg,
            'data' => $data,
            'data_desc' => $desc,
        );
        return json_encode($result);
    }

    /*
     * @action_name ： 递归层级列表
     * @param：需排序的数组 array  排序字段 string  父级字段 string  父级层级 int  排序起始层级 int
     * @return ：array
     * @author ：Way**/
    protected function dataBack ( $data , $field , $p_field , $p_id = 0 , $level = 1) {
        static $result = array();
        foreach ( $data as $key => $val) {
            if($val[$p_field] == $p_id){
                $val['level'] = $level;
                $result[] = $val;
                $this->dataBack( $data , $field , $p_field , $val[$field] , $level+1);
            }
        }
        return $result;
    }
    /*
     * @action_name ： 检测登录状态
     * @param：用户ID int (选填项，当该参数生效时，返回用户信息)
     * @return ：array  OR  bool
     * @author ：Way**/
    protected function checkUserInfo ( $userId = null ) {
        if( @$userId || @$_SESSION['admin']['admin_id']){
            return true;
        }
        return false;
    }


    /*
     * @action_name ： 检测用户权限
     * @param：用户ID int
     * @return ：bool
     * @author ：Way**/
    protected function checkUserPriv( $userId = '' ){
        //权限控制未编写 程晔 2017-06-12 @todo 06-25 程晔 以完善
        $userId = $userId == ''?$_SESSION['admin']['admin_id']:$userId;
        if( @$userId){
            //获取当前控制器和方法
            $path = @$_SERVER['PATH_INFO']?$_SERVER['PATH_INFO']:$_SERVER['REQUEST_URI'];
            $reqArr = @explode('?', $request);
            $reqArr = @explode('/', $reqArr[0]);
            $action = @array_pop($reqArr);
            $controller = @array_pop($reqArr);
            $namespace = @array_pop($reqArr);
            $requestUrl = $namespace.'/'.$controller.'/'.$action;
            //设置公共访问目录和超级管理员
            $publicController = ['index'];
            $publicAction = ['index'];
            if(in_array($controller,$publicController) && in_array($action,$publicAction)){
                return true;
            }

            //某个功能开放权限
            $publicConfig = [
                    'admin/config/index',
                    ];
            if(in_array($requestUrl,$publicConfig)){
                return true;
            }

            //权限委派
			$adminId = $_SESSION['admin']['admin_id'] ; 
			$userData = DB::select ( 'select app_priv from zd_appointment where admin_id = "' . $adminId . '"' ) ;
			$userData = $this -> objToArray ( $userData ) ; 
			
			$appoPriv = DB::select ( 'select priv_controller, priv_action from zd_privilege where priv_id in ("' . $userData[0]['app_priv'] . '")' ) ;  
			$appoPriv = $this -> objToArray ( $appopriv ) ;
			
            //$appoPriv = $this->objToArray(DB::select('select * from zd_appointment where admin_id='.$userId));
            foreach($privInfo as $val){
                $controllerInfo[] = $val['priv_controller'];
                $actionInfo[] = $val['priv_action'];
            }
            if(in_array($controller,$controllerInfo) && in_array($action,$actionInfo)){
                return true;
            }
        

            //权限控制
            $privInfo = DB::select("select priv_controller,priv_action from zd_admin_role as ar LEFT JOIN zd_role_priv as rp on ar.role_id=rp.role_id LEFT JOIN zd_privilege as pr on rp.priv_id=pr.priv_id where ar.admin_id = '$userId' AND pr.priv_status = '1'");
//            self::twoFieldArr($privInfo,);
            foreach($privInfo as $val){
                $controllerInfo[] = $val['priv_controller'];
                $actionInfo[] = $val['priv_action'];
            }
            if(in_array($controller,$controllerInfo) && in_array($action,$actionInfo)){
                return true;
            }
        }

        return false;
    }

    /*
     * @action_name ： 发送验证邮件
     * @params：邮箱地址 string  发送信息
     * @return ：bool
     * @author ：Way**/
    protected function smtp($name, $email , $title , $msg ){
        $this->emailAddr = $email;
        $this->emailTitle = $title;
        $flag = Mail::send('admin.email',['name'=>$name,'msg'=>$msg],function($message){
            $to = $this->emailAddr;
            $message ->to($to)->subject($this->emailTitle);
        });
        if($flag){
            return true;
        }else{
            return false;
        }
    }

    /*
     * @action_name ： 生成PageToken
     * @params：
     * @return ：string
     * @author ：Way**/
    public function makeToken(){
        $token = md5(time().rand(10000,99999));
        session('userToken',$token);
        echo session('userToken');
        die;
        $this->success(['token'=>$token]);
    }

    /*
     * @action_name：对象数据转换为数组数据
     * @params：需转换的对象数据 OBJ
     * @return 转换完成的数组 array
     * @author：Way**/
    public function objToArray ( $obj ) {
        if($obj){
            return json_decode(json_encode($obj),TRUE);
        }
        return false;
    }

    /*
     * @action_name：取出两个字段组成新的数组
     * @params：数组 arary  作为key的字段名 string  作为值的字段名 string
     * @return 转换完成的数组 array
     * @author：Way**/
    public function twoFieldArr ( $arr , $keys , $vals ) {
        foreach ( $arr as $key => $val ) {
            $result[$val[$keys]] = $val[$vals];
        }
        return $result;
    }

    /*
     * @action_name：报错跳转
     * @params：需要跳转的地址   错误信息   跳转方式（未实现）
     * @author：Way**/
    public function gogo($url,$msg = '',$way = ''){
        $errorMsg = $msg ? $msg : '好像出错了呢' ;
        return view('error',['errorMsg'=>$errorMsg,'locationUrl'=>$url]);
    }
	
	
}