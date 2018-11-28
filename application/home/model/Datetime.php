<?php
namespace app\home\model;
use think\Db;
use think\Model;

class Datetime extends Model
{
    //获取A1 对照观测点传感器型号
    public function metaid($stat)
    {
        $res=$this->table('wisdom_meta')->where('site_pid',$stat['stat'])->column('device_pid');
        //$res="sajkaa";
        return $res;
    }
    //通过传感器型号获取观测站信息
    public function meta($arr)
    {
        $num=count($arr);
        $res=array();
        for($i=0;$i<$num;$i++){
            $res[]=$this->table('wisdom_meta')->where('device_pid',$arr[$i])->select();
        }
        return $res;
    }
    //获取开A1 对照观测点数据
    public function A1data($arr)
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

    //获取所有空间站
    public function allmeta(){
       // $res=$this->table('wisdom_meta')->where('business_pid',82916887)->column('site_name');
       //$res="sajkaa";
        $res=$this->table('wisdom_meta')->distinct(true)->field('site_name')->where('business_pid',82916887)->select();
        //$res=$this->table('wisdom_meta')->group('site_name')->order('site_name desc')->select();
        return $res;
    }
}