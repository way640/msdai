<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;


class LoginController extends CommonController
{
    /**
     * 后台登录
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function login()
    {
        if($input = Input::all())
        {
            $user = User::first();
            if($user->admin_account != $input['admin_account'] || Crypt::decrypt($user->admin_pwd)!= $input['admin_pwd']){
                return back()->with('msg','用户名或者密码错误！');
            }
            session(['user'=>$user]);
            return redirect('admin/index/index');
        }
        return view('admin.login');
    }
}