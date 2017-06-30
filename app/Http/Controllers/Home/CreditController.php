<?php
namespace App\Http\Controllers\Home;

use App\Http\home;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use DB;

class CreditController extends Controller
{
    public function loan(Request $request)
    {
        //轻松投放款
       $user_id=$request->session()->has('user_id');
       $lenging_no=rand(10000000,99999999);
        $input = Input::all();
        unset($input['_token']);
        //print_r($input);exit;
        $input['user_id']=$user_id;
        $input['lenging_no']=$lenging_no;
        $input['lenging_start_time']=strtotime($input['lenging_start_time']);
        $input['lenging_end_time']=strtotime($input['lenging_end_time']);
        $input['lenging_total']=$input['lenging_money']*($input['lenging_interest']/100);

        $res=DB::table('lenging')->insert(
            $input
        );
        if($res){
            echo "<script>alert('放款成功，正在返回放款页面......');location.href='/invest/invest'</script>";
        }
    }
    //轻松投计算用户最终收益
    public function dal()
    {
        $num = Input::get('num');
        $inter = Input::get('inter');
        $mon=$num*($inter/100);
        return $mon;
    }
    //展示借款详情页面
    public function lengpart($id)
    {
        //$id = Input::get('id');
        //print_r($id);exit;
        $data=DB::table('lenging')->where('lenging_id','=',$id)->get();

        return view('home/leng/lengpart',['data'=>$data]);
    }
    //验证用户是否实名制认证
    public function approve($id)
    {
//        print_r($id);
        $res=DB::table('user_info')->where('user_id','=',$id)->get();
        $data=json_decode($res,true);
        $re=$data[0]['user_is_loan'];
        return $re;
    }

    //用户申请借款
    public function applyto()
    {

    }
}