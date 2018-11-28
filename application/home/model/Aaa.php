<?php
namespace app\home\model;
use think\Db;
use think\Model;

class Aaa extends Model
{
    
    public function metaid()
    {
        $res=$this->table('wisdom_meta')->where('site_pid',18031625)->column('device_pid');
        //$res="sajkaa";
        return $res;
    }
    public function meta($arr)
    {
        $num=count($arr);
        $res=array();
        for($i=0;$i<$num;$i++){
            $res[]=$this->table('wisdom_meta')->where('device_pid',$arr[$i])->select();
        }
        return $res;
    }
    public function ceshi($arr)
    {
        $num=count($arr);
        $res=array();
        for($i=0;$i<$num;$i++)
        {
            //$arr[$i];
            $res[]=$this->table('wisdom_data')->where('device_pid',$arr[$i])->where('timestamp', 'between', ['2018-11-10 00:02:45', '2018-11-10 01:53:00'])->select(); 
        }
       
        return $res;
    }
}