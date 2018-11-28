<?php
namespace app\api\model;
use think\Db;
use think\Model;

class WisdomType extends Model
{
    public function wisdomdata()
    {
        $res=$this->table('wisdom_data')->where('device_pid',75761210)->where('property','土壤湿度')->where('timestamp', 'between', ['2018-11-10 00:02:45', '2018-11-10 00:53:00'])->select();
        return $res;
    }
    public function wisdommeta()
    {
       // $link = Db::connect();
        $res=$this->table('wisdom_meta')->select();
      //  $res=array('a'=>'fjaksjfalk','b'=>'daa');
        return $res;
    }
}