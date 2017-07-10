<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
/*
 * @Class_name ：后台配置管理
 * @Author：Way
 * @Time ： 2017-06-17
 * **/
class SystemController extends CommonController
{
    /*
     * @action_name：配置列表展示页面
     * @author：Way
     * @Time：2017-06-17**/
    public function index ( ) {
        return view('Admin/system');
    }
    /*
     * @action_name：配置列表添加页面
     * @author：Way
     * @Time：2017-06-17**/
    public function add ( ) {
        return view('Admin/systemAdd');
    }


    /*************以下是数据接口*************/
    /*
     * @action_name：配置列表数据接口
     * @author：Way
     * @Time：2017-06-17**/
    public function systemList ( ) {
        $where = @$this->get['type'] == 'all' ? '1=1' : 'sys_type='.$this->get['type'];
        $confInfo = $this->objToArray(DB::select('select co.sys_id,co.sys_type,co.sys_content,co.sys_desc,co.sys_link,co.sys_img,co.sys_status,ty.type_name from zd_system as co left join zd_system_type as ty on co.sys_type = ty.type_id where '.$where));
        $confInfo = $this->dataBack($confInfo,'sys_id','sys_desc');
        foreach($confInfo as $k=> $v){
            $confInfo[$k]['level_info'] = str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;',$v['level']-1);
        }
        return $this->success($confInfo);
    }
    /*
     * @action_name：配置类型数据接口
     * @author：Way
     * @Time：2017-06-15**/
    public function systemTypeList ( ) {
        if( @$_SESSION['admin']['super'] == '1' ){
            $where = '';
        }else{
            $where = 'where type_status = 1';
        }
        $typeInfo = $this->twoFieldArr( $this->objToArray(DB::select('select * from zd_system_type ')) , 'type_id' ,'type_name' );
        return $this->success($typeInfo);
    }
    /*
     * @action_name：配置添加接口
     * @author：Way
     * @Time：2017-06-15**/
    public function systemInsert ( ) {
        $id=DB::table("system")->insertGetId($this->get);
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
    public function systemDel ( ) {
        $checkDel=DB::delete('delete from zd_system where sys_id in ('.$this->get['configId'].')');
        if($checkDel){
            return $this->success();
        }else{
            return $this->error();
        }
    }
}