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
    /*
     * @action_name：配置类型展示页面
     * @author：Way
     * @Time：2017-06-14**/
    public function typeIndex ( ) {
        return view('admin.configType');
    }
    /*
     * @action_name：配置类型添加页面
     * @author：Way
     * @Time：2017-06-14**/
    public function typeAdd ( ) {
        return view('admin.configTypeAdd');
    }

    /*************以下是数据接口*************/
    /*
     * @action_name：配置列表数据接口
     * @author：Way
     * @Time：2017-06-14**/
    public function configList ( ) {
        $where = @$this->get['type'] != 'all' ? "config_type = ". $this->get['type']:'1=1';
        $confInfo = $this->objToArray(DB::select('select co.config_id,co.config_type,co.config_info,co.config_desc,co.config_link,ty.type_name from zd_config as co left join zd_config_type as ty on co.config_type = ty.type_id where '.$where));
        return $this->success($confInfo);
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