<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\User;
use Illuminate\Http\Request;
use App\Http\Requests;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class UserController extends CommonController
{
    //get.admin/user/user  管理员列表展示页
    public function index()
    {
       return view('Admin/Admins/index');
    }

    //get.admin/user/create   添加管理员
    public function create()
    {
        return view('Admin/Admins/add');
    }

/**   - - - - - - -         以下是数据接口   - - - - - - - -        */
    /**
     *@action_name：管理员数据列表接口
     *@author：Zr
     *Time：2017-07-13
     */
    public function indexList()
    {
       $adminInfo = $this->objToArray(DB::select('select * from zd_admin'));
       return $this->success($adminInfo);
    }
}