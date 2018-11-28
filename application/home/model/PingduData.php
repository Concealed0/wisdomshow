<?php
namespace app\home\model;
use think\Db;
use think\Model;

class PingduData extends Model
{
    
    //获取
    //$stat       前端获取的气象站型号
    public function metaid($stat)
    {
        $res=$this->table('wisdom_meta')->where('site_pid',$stat['stat'])->column('device_pid');
        //$res="sajkaa";
        return $res;
    }

    //通过传感器型号获取观测站信息
    //$arr    气象站ID
    public function meta($arr)
    {
        $num=count($arr);
        $res=array();
        for($i=0;$i<$num;$i++){
            $res[]=$this->table('wisdom_meta')->where('device_pid',$arr[$i])->select();
        }
        return $res;
    }

    /*获取观测点数据
    //$arr      传感器id
    //$stat     前端获取的start 和end时间
    */
    public function A1data($arr,$stat)
    {
        $num=count($arr);
        $res=array();
        for($i=0;$i<$num;$i++)
        {
            //$arr[$i];
            $res[]=$this->table('wisdom_data')->where('device_pid',$arr[$i])->where('timestamp', 'between', [$stat['start'], $stat['end']])->select(); 
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