<?php
namespace app\home\controller;
use think\Controller;

class Date extends Controller
{
    public function index()
    {
        return $this->fetch('c');
    }
    public function ff()
    {
        $stat['start']=input('post.start');
        $stat['end']=input('post.end');
        $stat['stat']=input('post.stat/d');
        return ajaxReturn($stat);
    }
    //所有气象站 数据api
    public function alldata()
    {
        $stat['user']=input('post.username');
        $stat['pw']=input('post.password');
        $stat['stat']=input('post.stat/d');
        
        $wisdom=model('Datetime');
        $metaid=$wisdom->metaid($stat); 
      //  return ajaxReturn($metaid);
        $meta=$wisdom->meta($metaid);   
        $data=$wisdom->A1data($metaid);
        $DATA['data']=$data;
        $DATA['meta']=$meta;
        return ajaxReturn($DATA);
        
    }

}
