<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// 万能路由  暂不启用
/*
$request = @$_SERVER['REQUEST_URI']? $_SERVER['REQUEST_URI'] : $_SERVER['PATH_INFO'] ;

    $reqArr = @explode('?', $request);
    $reqArr = @explode('/', $reqArr[0]);
    $action = @array_pop($reqArr);
    $controller = @array_pop($reqArr);
    $namespace = @array_pop($reqArr);
if($namespace&&$controller&&$action){
    Route::get($namespace."/".$controller."/".$action,ucfirst($namespace).'\\'.ucfirst($controller).'Controller@'.$action);
}*/

function Autoload($path){
    $arr = opendir($path);
    while($info = readdir($arr)){
        if (is_dir($path.'\\'.$info) && $info != '.' && $info != '..') {
            Autoload($path.'\\'.$info);
        }
        if(substr($info,-6,-4) == 'zd'){
            include $path.'\\'.$info;
        }
    }
}
$path = @$_SERVER['PATH_INFO']?$_SERVER['PATH_INFO']:$_SERVER['REQUEST_URI'];

$urlArr = @explode('?',$path);
$urlArr = @explode('/',$urlArr['0']);
if(count($urlArr) > 5){
    echo "<script>location='".url('')."'</script>";
}
if($urlArr[1] == 'admin'){
    Autoload(__DIR__.'\admin');
}else{
    Autoload(__DIR__.'\home');
}

//默认访问首页
Route::get('/', function () {
    return view('home.index');
});
    


Route::get('admin/{name}/{id}', function () {
    return view('admin.login');
});

Route::get('{name}', function ($name) {
    return view('404');
});

//如果访问不存在的控制器和方法，跳转404
Route::get('{name}/{id}', function () {
    return view('404');
});

Route::get('{name}/{id}/{source}', function () {
    return view('404');
});

