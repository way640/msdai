<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Model\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
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
        if($user->admin_account != $input['admin_account'] || ($user->admin_pwd)!= md5($input['admin_pwd'])){
            return back()->with('msg','用户名或者密码错误！');
        }
        return redirect('admin/index/index');
    }
      return view('admin.login');
    }
}