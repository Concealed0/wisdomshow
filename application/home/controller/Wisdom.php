<?php
namespace app\home\controller;

use think\Controller;

class Wisdom extends Controller
{
    public function index()
    {
        return $this->fetch('e');
    }
    public function weihai()
    {
        return $this->fetch('A1station');
    }
    //获取wisdom_data数据
    public function wisdomdata()
    {
        $wisdom=model('WisdomType');
        $wisdom_data=$wisdom->wisdomdata();
        $this->assign('wisdomdata',$wisdom_data);
        return $this->fetch('a');
    }
    //
    public function data()
    {
        $Mdata=model('WisdomType');
        $data=$Mdata->wisdom();  
        return ajaxReturn($data);
    }
    public function ccc()
    {
        $wisdom=model('WisdomType');
        $data=$wisdom->wisdom(); 
        //$wisdom=model('WisdomMeta');
        $meta=$wisdom->wisdommeta();
        $DATA['data']=$data;
        $DATA['meta']=$meta;
        //$DATA = array(a,b);
        return ajaxReturn($DATA);
    }
    public function ceshi()
    {
        $wisdom=model('Aaa');
        $metaid=$wisdom->metaid(); 
        //return json($data);
        $meta=$wisdom->meta($metaid);
        //dump($num);
    /*    $num = count($data); 
        for($i=0;$i<$num;$i++){
            echo $data[$i];
        }
        */        
        $data=$wisdom->ceshi($metaid);
        $DATA['data']=$data;
        $DATA['meta']=$meta;
        return ajaxReturn($DATA);
    }
}