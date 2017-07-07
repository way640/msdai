<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function makeLogs ( $curd , $table = '' , $msg = '' , $new = array()) {
    	$time = time();
    	$content = $_SESSION['admin']['admin_account'];
    	$table = $table ? '在'.$table.'表中 ' : '在数据库中 ' ;
    	switch ($curd) {
    		case 'C' ://create
    			$content .= '添加了 ';
    			break;
    		case 'U' ://update
    			$content .= '修改了 ';
    			break;
    		case 'R' ://read
    			$content .= '查看了 ';
    			break;
    		case 'D' ://delete
    			$content .= '删除了 ';
    			break;
    		case 'IN' ://sign in
    			$content .= '<font color="green">登录</font>了后台管理系统 ';
    			break;
    		case 'OUT'://sign out
    			$content .= '<font color="red">退出</font>了后台管理系统 ';
    			break;
    		default :
    			return false;
    	}
    	$contnet .= $msg.'。';
    	if($new){
    		$content .= '详细信息为：';
    		foreach ($new as $key => $value) {
    			$content .= $k.'--'.$v.';';
    		}
    	}


    }
}
