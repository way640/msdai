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
    //get.admin/user/user  全部管理员列表
    public function index()
    {
       $data = User::orderBy('admin_id','asc')->get();
       return view('Admin/lists',compact('data'));
    }

    //get.admin/user/create   添加管理员
    public function create()
    {
        return view('Admin/add');
    }
    //post.admin/user/store   添加管理员提交
    public function store()
    {
        $admin_account = Input::get('admin_account');

        $admin_pwd = md5(Input::get('admin_pwd'));

            $bool=DB::insert("insert into zd_admin(admin_account,admin_pwd) values ('$admin_account','$admin_pwd')");

            if($bool){
                return redirect('admin/user/user');
            }else {
                return back()->with('errors', '管理员添加失败，请稍后重试！');
            }
    }
    //delete.admin/user/user{links}   删除单个管理员
    public function destroy($admin_id)
    {
        $re = User::where('admin_id',$admin_id)->delete();
        if($re){
            $data = [
                'status' => 0,
                'msg' => '管理员删除成功！',
            ];
        }else{
            $data = [
                'status' => 1,
                'msg' => '管理员删除失败，请稍后重试！',
            ];
        }
        return $data;
    }
}