<?php
namespace app\home\controller;

use think\Controller;

class Weihai extends Controller
{
    //打开A1 监测点页面
    public function weihai()
    {
        return $this->fetch('A1monitor');
    }
    //打开A0气象站页面
    public function scence()
    {
        return $this->fetch('A0scene');
    }

    
    public function bb()
    {
        return $this->fetch('b');
    }
    
    //所有数据api
    public function alldata()
    {
        //$stat=input('post.stat/d');
        $stat['start']=input('post.start');
        $stat['end']=input('post.end');
        $stat['stat']=input('post.stat/d');
        $wisdom=model('WeihaiData');
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
     //获取平度所有气象站
     public function allmeta(){

        $aaa=model('WeihaiData');
        $allmeta=$aaa->allmeta();

        $this->assign('allmeta',$allmeta);
        //return ajaxReturn($wisdom_data);
        return $this->fetch('a');
    }
}