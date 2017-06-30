<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class UserController extends CommonController
{
    //get.admin/user/user  全部管理员列表
    public function index()
    {
//        $data = User::orderBy('admin_id','asc')->get();
//        return view('admin.lists',compact('data'));
    }

    //get.admin/user/create   添加管理员
    public function create()
    {
        return view('admin.add');
    }
    //post.admin/user/store   添加管理员提交
    public function store()
    {
        $input = Input::except('_token');
        $pwd = Input::md5('admin_pwd');
        dd($pwd);die;
        $rules = [
            'admin_account'=>'required',
            'admin_pwd'=>'required',
        ];
        $message = [
            'admin_account.required'=>'管理员名称不能为空！',
            'admin_pwd.required'=>'管理员密码不能为空！',
        ];
        $validator = Validator::make($input,$rules,$message);

        if($validator->passes()){
            $re = User::create($input);
            if($re){
                return redirect('admin/user/user');
            }else{
                return back()->with('errors','管理员添加失败，请稍后重试！');
            }
        }else{
            return back()->withErrors($validator);
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