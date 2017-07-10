<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Power;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class  PowerController extends CommonController
{
    //get.admin/power/power  全部权限列表
    public function index()
    {
        $data = Power::orderBy('priv_id','asc')->get();
        return view('Admin/Power/index' ,compact('data'));
    }

    //get.admin/article/create   添加权限
    public function create()
    {
        $data = (new Power)->tree();
        return view('Admin/Power/add',compact('data'));
    }

    //post.admin/article/store 添加权限提交
    public function store()
    {
        $input=Input::except('_token');
        $rules = [
            'priv_name'=>'required',
            'priv_desc'=>'required',
        ];
        $message = [
            'priv_name.required'=>'权限名称不能为空！',
            'priv_desc.required'=>'权限描述不能为空！',
        ];
        $validator = Validator::make($input,$rules,$message);

        if($validator->passes()){
            $res =Power::create($input);
            if($res){
                return redirect('admin/power/power');
            }else{
                return back()->with('errors','数据填充失败，请稍后重试！');
            }
        }else{
            return back()->withErrors($validator);
        }
    }

    //get.admin/article/article/article_id/edit  编辑文章
    public function edit($priv_id)
    {
        $field = Power::find($priv_id);
        return view('Admin/Power/edit',compact('field'));
    }

    //put.article/article/{article/article/}    更新文章
    public function update($priv_id)
    {
        $input = Input::except('_token','_method');
        $re = Power::where('priv_id',$priv_id)->update($input);
        if($re){
            return redirect('admin/power/power');
        }else{
            return back()->with('errors','文章信息更新失败，请稍后重试！');
        }
    }

    //delete.article/article/{article/article/}   删除单个权限
    public function destroy($priv_id)
    {
        $re = Power::where('priv_id',$priv_id)->delete();
        if($re){
            $data = [
                'status' => 0,
                'msg' => '权限删除成功！',
            ];
        }else{
            $data = [
                'status' => 1,
                'msg' => '权限删除失败，请稍后重试！',
            ];
        }
        return $data;
    }
}