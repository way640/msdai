<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function makeLogs ( $id , $curd , $table = '' , $msg = '' , $new = array()) {
    	$time = time();
    	$content = @$_SESSION['admin']['admin_account']?@$_SESSION['admin']['admin_account']:@$_SESSION['user']['user_account'];
        $dataInfo['log_object'] = $table;
        $table = $table ? '在'.$table.'表中 ' : '在系统中 ' ;
    	switch ($curd) {
    		case 'C' ://create
                $dataInfo['log_type'] = 1;
    			$content .= '添加了 ';
    			break;
    		case 'U' ://update
                $dataInfo['log_type'] = 2;
                $content .= '修改了 ';
                break;
            case 'R' ://read
                $dataInfo['log_type'] = 3;
                $content .= '查看了 ';
                break;
            case 'D' ://delete
                $dataInfo['log_type'] = 4;
                $content .= '删除了 ';
                break;
            case 'IN' ://sign in
                $dataInfo['log_type'] = 5;
                $content .= '<font color="green">登录</font>了后台管理 ';
                break;
            case 'OUT'://sign out
                $dataInfo['log_type'] = 6;
                $content .= '<font color="red">退出</font>了后台管理 ';
                break;
    		default :
    			return false;
    	}
    	$content .= $msg.'。';
        $dataInfo['log_operation']  = $content;
    	if($new){
    		$dataInfo['log_desc'] = '详细信息为：';
    		foreach ($new as $key => $value) {
    			$dataInfo['log_desc'] .= $k.'--'.$v.';';
    		}
           $content .=  $dataInfo['log_desc'];
    	}
        
        $dataInfo['log_time']       = $time;
        $dataInfo['admin_id']       = $id;
        DB::table('log')->insert($dataInfo);

    }
}
