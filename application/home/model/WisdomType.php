<?php
namespace app\home\model;
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
        $res=$this->table('wisdom_meta')->where('device_pid',75761210)->select(); 
        return $res;
    }
    public function wisdom()
    {
        $res=$this->table('wisdom_data')->where('device_pid',75761210)->where('timestamp', 'between', ['2018-11-10 00:02:45', '2018-11-10 00:53:00'])->select();
        return $res;
    }
}