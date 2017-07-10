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
        return view('Admin/appo');
    }

    /*
     * @action_name：新增委派页面
     * @author：Way
     * @Time：2017-06-29**/
    public function appoAdd(){
        return view('Admin/appoAdd');
    }

    /**************以下是业务接口***************/


    /*
     * @action_name：委派信息
     * @author：Way
     * @Time：2017-06-29**/
    public function appoInfo(){
        $where = 'app_from='.$_SESSION['admin']['admin_id'];
        if(@$this->get['type'] != 'all' && @$this->get['type']){
            $where .= ' and ap.admin_id ='.$this->get['type'];
        }
        $appoInfo = DB::select('select admin_name,admin_account,ap.admin_id,app_from,app_desc,app_start_time,app_end_time,app_priv,app_id from zd_appointment as ap left join zd_admin as ad on ap.admin_id=ad.admin_id left join zd_admin_info as ai on ap.admin_id=ai.admin_id where '.$where);
        return $this->success($appoInfo);

    }
    /*
     * @action_name：委派人员统计
     * @author：Way
     * @Time：2017-06-29**/
    public function appoAdminInfo( ) {
        $appoAdminInfo = $this->twoFieldArr($this->objToArray(DB::table('appointment')->select('appointment.admin_id','admin_name')->leftJoin('admin_info','appointment.admin_id','=','admin_info.admin_id')->groupBy('appointment.admin_id')->get()),'admin_id','admin_name');
        return $this->success($appoAdminInfo);
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

    /*
     * @action_name：权限递归列表
     * @author：Way
     * @Time：2017-06-29**/
    public function privList(){
		
        $confInfo = $this->dataBack($this->objToArray(DB::select('select * from zd_privilege where priv_status = "1"')),'priv_id','priv_pid');
        foreach($confInfo as $k=> $v){
            $confInfo[$k]['level_info'] = str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;',$v['level']-1);
        }
        return $this->success($confInfo);
    }
	
	/*
	*@Action_name : 添加委任
	*@Author : szt 
	*@Time : 07-06
	*/
	public function doAppoAdd(){

		$appoData = $_POST ; 
        $appoAdmin   = $_SESSION['admin']['admin_id'] ; 
		
		$appoUser = $appoData['admin_account'] ; 
		
		$appoFrom  = DB::select ( 'select admin_id from zd_admin where admin_account = "' . $appoUser . '"' ) ; 
		$appoFrom  = $this -> objToArray ( $appoFrom ) ; 
		$appoId = $appoFrom[0]['admin_id'] ; 
		
		$start_time = strtotime ( $appoData['app_start_time'] ) ;
        $end_time   = strtotime ( $appoData['app_end_time'] ) ; 	
        $desc       = $appoData['app_desc'] ;	
		$status     = $appoData['app_status'] ; 
		$bloon = DB::insert ( 'insert into zd_appointment ( app_id, app_from, app_desc, app_start_time, app_end_time, app_priv, admin_id ) values ( "", ' . $appoAdmin . ', "' . $desc . '", "' . $start_time . '", "' . $end_time . '", "' . $status . '", "' . $appoId . '" ) ' );
        if ( $bloon ) {
			return $this -> success( ) ;
		} else {
			return $this -> error( ) ;
		}
	}
	
	

}