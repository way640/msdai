<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Role;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class RoleController extends CommonController
{
    //get.admin/role/role  角色列表页面
    public function index()
    {
        return view('Admin/Role/index');
    }

    //get.admin/role/create   添加角色页面
    public function create()
    {
        return view('Admin/Role/add');
    }
}