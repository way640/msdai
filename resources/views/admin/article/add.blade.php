@extends('admin.main')
@section('content')
    <div class="col-md-12" style=" width: 650px">
        <form action="{{url('admin/article/store')}}" method="post">
            <div class="form-group">
                @if(count($errors)>0)
                    <div class="mark">
                        @if(is_object($errors))
                            @foreach($errors->all() as $error)
                                <p>{{$error}}</p>
                            @endforeach
                        @else
                            <p>{{$errors}}</p>
                        @endif
                    </div>
                @endif
            <div class="form-group">
                <label class="col-sm-3 control-label">文章标题：</label>
                <div class="col-sm-9">
                    <input type="text" name="article_title" class="form-control" placeholder="请输入文本">

                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">	文章内容：</label>
                <div class="col-sm-9">
                    <p class="form-control-static"><textarea name="article_content" style="width: 435px; height: 50px"></textarea></p>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">文章作者：</label>
                <div class="col-sm-9">
                    <input type="text" name="article_author" class="form-control" placeholder="请输入文本">

                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-12 col-sm-offset-3">
                    <button class="btn btn-primary" type="submit">保存内容</button>
                    <button class="btn btn-white" type="submit">取消</button>
                </div>
            </div>
        </form>
    </div>
@stop