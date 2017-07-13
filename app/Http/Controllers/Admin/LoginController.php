<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class LoginController extends Controller
{
    /**
     * 后台页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function login()
    {
        return view('Admin/login');
    }

    /**
     * 后台登陆
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\think\response\Redirect
     */
    public function index()
    {
        if($input = Input::all())
        {
            $admin_account = $input['admin_account'];
            $admin_pwd     = md5 ( $input['admin_pwd'] );
            $adminInfo = DB::select ( 'select * from zd_admin where admin_account = "' . $admin_account . '"') ;
            if (  @!$adminInfo[0]->admin_id  ) {
                echo "<script>alert('账号不存在')</script>
                       <script> window.location.href='login'</script>";
            } else {
                if ( @$adminInfo[0]->admin_pwd != $admin_pwd  ) {
                    echo "<script>alert('密码不正确')</script>
                           <script> window.location.href='login'</script>";
                } else {
                    echo "<script>alert('登陆成功')</script>";
                    return redirect('admin/index/index');
                }
            }
        }
    }
}