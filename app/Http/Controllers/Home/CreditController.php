<?php
namespace App\Http\Controllers\Home;

use App\Http\home;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use DB;

class CreditController extends Controller
{
    public function loan()
    {
        //轻松投放款
       $user_id=$_SESSION['user']['user_id'];
       $lenging_no=time().rand(1000,9999);
        $input = Input::all();
        unset($input['_token']);
        $input['user_id']=$user_id;
        $input['lenging_no']=$lenging_no;
        $input['lenging_start_time']=strtotime($input['lenging_start_time']);
        $input['lenging_end_time']=strtotime($input['lenging_end_time']);
        $input['lenging_total']=$input['lenging_money']+$input['lenging_money']*($input['lenging_interest']/100);

        $yu=$input['user_money']-$input['lenging_money'];
        $input['lenging_interest']=$input['lenging_interest'].'%';
        unset($input['user_money']);


        $res=DB::table('lenging')->insert(
            $input
        );
        if($res){
            if($yu<0){
                echo "<script>alert('您的余额不足');location.href='/invest/invest'</script>";
            }else{
                $update=DB::table('user_info')
                    ->where('user_id', $user_id)
                    ->update(['user_money' =>$yu ]);
            }
            if($update){
                echo "<script>alert('放款成功，正在返回放款页面......');location.href='/invest/invest'</script>";
            }
            }
    }


    //轻松投计算用户最终收益
    public function dal()
    {
        $uid=Input::get('uid');
        $num = Input::get('num');
        $inter = Input::get('inter');
        $mon['interest']=$num+$num*($inter/100);
        $res=DB::table('user_info')->where('user_id','=',$uid)->get();
        foreach ($res as $k=>$v){
            $mon['quota']=$v->user_money;
        }
        return $mon;
    }


    //展示借款详情页面
    public function lengpart($id)
    {
        $data=DB::table('lenging')->leftjoin('user_info','lenging.user_id','=','user_info.user_id')->where('lenging_id','=',$id)->get();
        $read=DB::table('config')->where('config_type',1)->get();;
        return view('Home/Leng/lengpart',['data'=>$data,'read'=>$read]);
    }


    //验证用户是否实名制认证
    public function approve($id)
    {
        $res=DB::table('user_info')->where('user_id','=',$id)->get();
        $data=json_decode($res,true);
        $re=$data[0]['user_is_loan'];
        return $re;
    }



    //用户申请借款
    public function applyto()
    {
        $data=Input::all();
        $data['loan_time']=time();
        $data['user_id']=$_SESSION['user']['user_id'];
        $data['loan_money']= $data['loan_money']*10000;
        if($data['loan_is_instal']==0){
            $data['loan_long']=1;
        }

        //还款结束时间
        $data['loan_end_time']=strtotime('+'.$data['loan_long'].'Month',$data['loan_time']);

        $res=DB::table('loan')->insertGetId(
            $data
        );

        //还款表
        $back['user_id']=$_SESSION['user']['user_id'];
        $back['loan_id']= $res;

        //还款总金额
        $back['amount_money']=$data['loan_money']*($data['loan_interset']/100)+$data['loan_money'];

        //剩余还款金额
        $back['surplus_money']=$back['amount_money'];

        $re=DB::table('back')->insert(
            $back
        );
        if($re){
            echo "<script>alert('您以成功借款');location.href='http://www.zdmoney.com/'</script>";
        }
    }


    //用户借款交易安全协议
    public function agr()
    {
        return view('Home\Transaction security\Agreement');
    }

    //用户还款页面
    public function repay()
    {
        $user_id=$_SESSION['user']['user_id'];

        $repay = DB::table('loan')
            ->leftJoin('lenging', 'loan.lenging_id', '=', 'lenging.lenging_id')
            ->where('loan.user_id',$user_id)
            ->get();
        return view('Home\Repay\repayment',['repay'=>$repay]);
    }


    //用户还款
    public function withpay()
    {
        $user_id=$_SESSION['user']['user_id'];
        $num = Input::get('month_total');
        $num=str_replace(",","",$num);
        $user = DB::table('user_info')
            ->where('user_id','=',$user_id)
            ->get();
       foreach($user as $k=>$v){
           $usermoney=$v->user_money;
       }
       if( $usermoney< $num){
           return 0;
       }else{
           $res=DB::table('back')->where('user_id','=',$user_id)->get();

           foreach($res as $k=>$v){
               $money=$v->pay_money;
               $amount_money=$v->amount_money;
           }

           $pall=$money+$num;
           $surmoney=$amount_money-$pall;
           $update=DB::table('back')
               ->where('user_id', $user_id)
               ->update(['pay_money'=>$pall,'surplus_money'=>$surmoney]);
           if($update){
               $re=DB::table('user_info')->where('user_id','=',$user_id)->get();
               foreach($re as $k=>$v){
                   $user_money=$v->user_money;
               }
               $nm=$user_money-$pall;
               if($nm<$num){
                   return 0;
               }else{
                   $up=DB::table('user_info')
                       ->where('user_id', $user_id)
                       ->update(['user_money'=>$nm]);
                   if($up){
                       return 1;
                   }
               }
           }
       }
    }
}


