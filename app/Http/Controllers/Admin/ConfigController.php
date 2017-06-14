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
        return $this->success($result);
    }
}