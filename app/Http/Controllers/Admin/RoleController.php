<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Role;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class RoleController extends CommonController
{
    //get.admin/role/role  全部角色列表
    public function index()
    {
        $data = Role::orderBy('role_id','asc')->get();
        return view('admin.role.index',compact('data'));
    }

    //get.admin/role/create   添加角色
    public function create()
    {
        return view('admin.role.add');
    }

    //post.admin/article/store 添加角色提交
    public function store()
    {
        $input=Input::except('_token');
        $rules = [
            'role_name'=>'required',
            'role_desc'=>'required',
        ];
        $message = [
            'role_name.required'=>'角色名不能为空！',
            'role_desc.required'=>'角色介绍不能为空！',
        ];
        $validator = Validator::make($input,$rules,$message);
        if($validator->passes()){
            $res =Role::create($input);
            if($res){
                return redirect('admin/role/role');
            }else{
                return back()->with('errors','数据填充失败，请稍后重试！');
            }
        }else{
            return back()->withErrors($validator);
        }
    }

    //get.admin/article/article/article_id/edit  角色文章
    public function edit($role_id)
    {
        $field = Role::find($role_id);
        return view('admin.role.edit',compact('field'));
    }

    //put.article/article/{article/article/}    更新角色
    public function update($role_id)
    {
        $input = Input::except('_token','_method');
        $re = Role::where('role_id',$role_id)->update($input);
        if($re){
            return redirect('admin/role/role');
        }else{
            return back()->with('errors','角色信息更新失败，请稍后重试！');
        }
    }

    //delete.article/article/{article/article/}   删除单个文章
    public function destroy($role_id)
    {
        $re = Role::where('role_id',$role_id)->delete();
        if($re){
            $data = [
                'status' => 0,
                'msg' => '角色删除成功！',
            ];
        }else{
            $data = [
                'status' => 1,
                'msg' => '角色删除失败，请稍后重试！',
            ];
        }
        return $data;
    }
}