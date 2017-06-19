<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
/*
 * @Class_name ：前台配置管理
 * @Author：Way
 * @Time ： 2017-06-14
 * **/
class ConfigController extends CommonController
{
    /*
     * @action_name：配置列表展示页面
     * @author：Way
     * @Time：2017-06-14**/
    public function index ( ) {
        return view('admin.config');
    }
    /*
     * @action_name：配置列表添加页面
     * @author：Way
     * @Time：2017-06-14**/
    public function add ( ) {
        return view('admin.configAdd');
    }


    /*************以下是数据接口*************/
    /*
     * @action_name：配置列表数据接口
     * @author：Way
     * @Time：2017-06-14**/
    public function configList ( ) {
        $where = @$this->get['type'] ? "config_type = ". $this->get['type']:'1=1';
        $where = "config_type = 1";
        $result['confInfo'] = $this->objToArray(DB::select('select config_id,config_type,config_info,config_desc,config_link from zd_config where '.$where));
        $result['typeInfo'] = $this->twoFieldArr( $this->objToArray(DB::select('select * from zd_config_type where type_status = 1')) , 'type_id' ,'type_name' );
//        print_r($result);die;
        return $this->success($result);
    }
    /*
     * @action_name：配置类型数据接口
     * @author：Way
     * @Time：2017-06-15**/
    public function configTypeList ( ) {
        $typeInfo = $this->twoFieldArr( $this->objToArray(DB::select('select * from zd_config_type where type_status = 1')) , 'type_id' ,'type_name' );
        return $this->success($typeInfo);
    }
    /*
     * @action_name：配置添加接口
     * @author：Way
     * @Time：2017-06-15**/
    public function configInsert ( ) {
        $id=DB::table("config")->insertGetId($this->get);
        if($id){
            return $this->success();
        }else{
            return $this->error();
        }
    }

    /*
     * @action_name：配置删除接口
     * @author：Way
     * @Time：2017-06-15**/
    public function configDel ( ) {
        $checkDel=DB::table("config")->where('config_id',$this->get['configId'])->delete();
        if($checkDel){
            return $this->success();
        }else{
            return $this->error();
        }
    }
}