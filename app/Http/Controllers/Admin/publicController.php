<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
/*
 * @Class_name ：公共加载类
 * @Author：Way
 * @Time ： 2017-06-25
 * **/
class PublicController extends CommonController
{
	/*
     * @Action_name : 后台左侧菜单
     * @Author ：Way
     * @Time ：2017-06-12
     * **/
    public function leftNav ( ) {

        $navInfo = DB::select('SELECT sys_content,sys_link,sys_img FROM zd_system WHERE sys_type = 1 AND sys_status = 1');
        return $this->success($navInfo);

    }

    /*
     * @Action_name : 检测管理员账户唯一性
     * @Author ：Way
     * @Time ：2017-06-12
     * **/
    public function checkAdminAccount()
    {
    	$account = @$this->get['admin_account'];
    	$check = DB::select("select * from zd_admin where admin_account='$account' limit 1");
        if(@$check[0]->admin_id){
            return $this->success();
        }
        return $this->error();
    }
	
	/*
	*@Action_name : 用户退出登录
	*@Author : szt
	*@Time : 2017-07-03	
	*/
	public function logout(){
		
	    unset( $_SESSION['admin'] );
		
		return $this->success(  );
	}
}