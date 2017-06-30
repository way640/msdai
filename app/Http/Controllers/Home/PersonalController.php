<?php

namespace App\Http\Controllers\Home;

use App\Http\home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
/*
*@Class_name : 个人中心
*@Use : 用户个人中心页面展示及信息设置
*@Author : (负责人)
*@Time : (完成时间)
*/
class PersonalController extends CommonController
{
	/*
	*@Action_name : 个人中心默认首页 
	*/
	public function index(){
		
		return view('home/personal/personal');
	}
	
	/*
	*@Action_name : 个人积分首页
	*/
	public function points(){
		
		return view('home/personal/points');
	}
	
	/*
	*@Action_name : 个人账号设置
	*/
	public function config(){
		
		$userId = $_SESSION['user']['user_id'] ;
		
		$arr = DB::select("select * from zd_user_info where user_id = $userId") ;
		$arr = $this->objToArray($arr);
		
		return view('home/personal/config', ['data' => $arr[0]]);
	}
	
	/*
	*@Action_name : 用户添加头像
	*/
	public function image(){
	
		return view('home/personal/image');
	}
	
	/*
	*@Action_name : 用户修改密码
	*/
	public function changePwd(){
		
		return view('home/personal/changePwd');
	}
	
    /*
	*@Action_name : 执行头像添加
	*/
	public function addImage(){
		
		if ( $_SESSION['user']['user_id'] ) {
			
			$userId = $_SESSION['user']['user_id'] ;
		}
		
		if ( preg_match( '/^(data:\s*image\/(\w+);base64,)/', $_POST['img'], $result ) ) { 
		
			$type = $result[2]; 
			$new_file = "./userImage/" . $userId . ".{$type}"; 	

		    if( file_exists( $new_file ) ) {
			
                unlink ( $new_file ) ;
            }			
		
			$str = $_POST['img'] ;
			
            $url = explode(',', $str);

			if ( file_put_contents ( $new_file, base64_decode( $url[1] ) ) ) { 
                
				$bloon = DB::select("select user_id from zd_user_info where user_id = " . $userId);
				
				if ( $bloon ) {
					
					$addImage = DB::update("update zd_user_info set user_head = '$new_file' where user_id = $userId");
				} else {
									
					$addImage = DB::insert("insert into zd_user_info( user_id, user_head ) values( $userId,'$new_file')");
				} 
				
				if ( $addImage ) {
					
					$arr = array("status"=>"1");					
                    echo json_encode($arr);
				}
			}
		}
		
	}
	
	
	
	
}