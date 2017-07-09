<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Power extends Model
{
    protected $table = 'privilege';
    protected $primaryKey = 'priv_id';
    public $timestamps =false;
    protected $guarded = [];

    public  function tree()
    {
        $categorys =  $this->orderBy('priv_level','asc')->get();
        return $this->getTree($categorys,'priv_name','priv_id','priv_pid');
    }

    public function getTree($data,$priv_name,$priv_id='id',$priv_pid='pid',$pid='0')
    {
        static $arr = array();
        foreach($data as $k=>$v){
            if($v->$priv_pid==$pid){
                $data[$k]['_'.$priv_name] = $data[$k][$priv_name];
                $arr[] = $data[$k];
                foreach($data as $m=>$n){
                    if($n->$priv_pid == $v->$priv_id){
                        $data[$m]['_'.$priv_name] = '|-- '.$data[$m][$priv_name];
                        $arr[] = $data[$m];
                    }
                }
            }
        }
        return $arr;
    }
}


