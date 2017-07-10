<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Model\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class LoginController extends Controller
{
    public function objToArray ( $obj ) {
        if($obj){
            return json_decode(json_encode($obj),TRUE);
        }
        return false;
    }
	
    /**
     * 后台登录
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function login()
    {

        if($input = Input::all())
        {
        //$admin = User::first();
		
		    $admin_account = $input['admin_account'] ;
            $admin_pwd     = md5 ( $input['admin_pwd'] ) ; 			
		
		    $adminInfo = DB::select ( 'select admin_id from zd_admin where admin_account = "' . $admin_account . '"') ;
            $adminInfo = $this -> objToArray ( $adminInfo ) ; 
		
    		if ( empty ( $adminInfo[0]['admin_id'] ) ) {
				
				echo "<script>alert('账号不存在');</script>" ; 
			} else {
				
				$adminPwd = DB::select ( 'select admin_id, admin_account from zd_admin where admin_pwd = "' . $admin_pwd . '" and admin_account = "' . $admin_account . '" ') ; 
	            $adminPwd = $this -> objToArray ( $adminPwd ) ; 
	
	            if ( empty ( $adminPwd[0] ) ) {
					
					echo "<script>alert('密码不正确')</script>" ;
				} else {
				
		            $_SESSION['admin'] = $adminPwd[0] ; 
					$this->makeLogs($_SESSION['admin']['admin_id'],'IN');
					return redirect('admin/index/index');
				}
          	}
			
			
			
			
       // if($admin->admin_account != $input['admin_account'] || ($admin->admin_pwd)!= md5($input['admin_pwd'])){
       //     return back()->with('msg','用户名或者密码错误！');
        }
		
		//$arr = [];
		
		//session_start() ;
		//$_SESSION['admin']
		
      //  return redirect('admin/index/index');
    
      return view('Admin/login');
    }
}