<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
/*
 * @Class_name : 后台公共控制器
 * @author ： 程晔
 * @time ： 2017-06-12
 * **/
class CommonController extends Controller
{
    protected $get = '';
    protected $post = '';

    /*
     * @action_name ： 公共构造方法
     * @param：
     * @return ：json
     * @author ：Way**/
    public function __construct() {
        $this->get = $_GET;
        $this->post = $_POST;

        $checkUserInfo = $this->checkUserInfo(session('userInfo')['user_id']);
//        if ( !$checkUserInfo ) {
//            redirect("admin/login/login");
//        }

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
        if( @$userId && typeOf($userId) == 'int'){

            return true;

        }else{
            return true;
        }
    }


    /*
     * @action_name ： 检测用户权限
     * @param：用户ID int
     * @return ：bool
     * @author ：Way**/
    protected function checkUserPriv( $userId ){
        //权限控制未编写 程晔 2017-06-12 @todo 未修改
        if( @$userId && typeOf($userId) == 'int'){
            return true;
        }else{
            return false;
        }
    }

    /*
     * @action_name ： 发送邮件
     * @params：邮箱地址 string  发送信息
     * @return ：bool
     * @author ：Way**/
    protected function smtp( $email , $msg ){

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

}