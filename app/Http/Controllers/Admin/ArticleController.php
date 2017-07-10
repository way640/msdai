<?php

namespace App\Http\Controllers\Admin;


use App\Http\Model\Article;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;


class ArticleController extends CommonController
{
    //get.admin/article/article/  全部文章列表
    public function index()
    {
//        $data = Article::orderBy('article_id','desc')->paginate(5);
        $data = Article::orderBy('article_id','asc')->get();
        return view('Admin/Article/index',compact('data'));
    }

    //get.admin/article/create   添加文章
    public function create()
    {
        return view('Admin/Article/add');
    }
    //post.admin/article/store 添加文章提交
    public function store()
    {
        $input=Input::except('_token');
        $input['article_add_time'] = time();
        $rules = [
            'article_title'=>'required',
            'article_author'=>'required',
        ];
        $message = [
            'article_title.required'=>'文章标题不能为空！',
            'article_author.required'=>'文章作者不能为空！',
        ];
        $validator = Validator::make($input,$rules,$message);

        if($validator->passes()){
            $res =Article::create($input);
            if($res){
                return redirect('admin/article/article/');
            }else{
                return back()->with('errors','数据填充失败，请稍后重试！');
            }
        }else{
            return back()->withErrors($validator);
        }
    }

    //get.admin/article/article/article_id/edit  编辑文章
    public function edit($article_id)
    {
        $field = Article::find($article_id);
        return view('Admin/Article/edit',compact('field'));
    }

   //put.article/article/{article/article/}    更新文章
    public function update($article_id)
    {
        $input = Input::except('_token','_method');

        $re = Article::where('article_id',$article_id)->update($input);
        if($re){
            return redirect('admin/article/article/');
        }else{

            return back()->with('errors','文章信息更新失败，请稍后重试！');
        }
    }

    //delete.article/article/{article/article/}   删除单个文章
    public function destroy($article_id)
    {
        $re = Article::where('article_id',$article_id)->delete();
        if($re){
            $data = [
                'status' => 0,
                'msg' => '文章删除成功！',
            ];
        }else{
            $data = [
                'status' => 1,
                'msg' => '文章删除失败，请稍后重试！',
            ];
        }
        return $data;
    }
}

