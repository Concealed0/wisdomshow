<?php
namespace app\home\controller;

use think\Controller;

class Pingdu extends Controller
{
    //打开A1 对照观测点页面
    public function pingdu()
    {
        return $this->fetch('A1fixed');
    }

    //打开A1 对照观测点页面
    public function scene()
    {
        return $this->fetch('A0scene');
    }
    //打开A2 地膜监测点页面
    public function monitor()
    {
        return $this->fetch('A2monitor');
    }
    //打开A3 地膜监测点页面
    public function monitora()
    {
        return $this->fetch('A3monitor');
    }

    //所有气象站 数据api
    public function alldata()
    {
        //$stat=input('post.stat/d');
        $stat['start']=input('post.start');
        $stat['end']=input('post.end');
        $stat['stat']=input('post.stat/d');
        $wisdom=model('PingduData');
        $metaid=$wisdom->metaid($stat); 
        //return json($data);
        $meta=$wisdom->meta($metaid);
        //dump($num);
    /*    $num = count($data); 
        for($i=0;$i<$num;$i++){
            echo $data[$i];
        }
        */        
        $data=$wisdom->A1data($metaid,$stat);
        $DATA['data']=$data;
        $DATA['meta']=$meta;
        return ajaxReturn($DATA);
    }

    //获取平度说有气象站
    public function allmeta(){

        $aaa=model('PingduData');
        $allmeta=$aaa->allmeta();

        $this->assign('allmeta',$allmeta);
        //return ajaxReturn($wisdom_data);
        return $this->fetch('a');
        //dump(allmeta);


        //return ajaxReturn($allmeta);
        //echo "dsafdf";
       // dump($allmeta);
    }
}