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
$urlArr = explode('/',$path);
if($urlArr[1] == 'admin'){
    Autoload(__DIR__.'\admin');
}else{
    Autoload(__DIR__.'\home');
}
//默认访问
Route::get('/', function () {
    return view('home.index');
});
Route::get('admin/{name}/{id}', function () {
    return view('admin.login');
});
//如果访问不存在的控制器和方法，跳转404
Route::get('{name}/{id}}', function ($name,$id) {
    return view('404');
});