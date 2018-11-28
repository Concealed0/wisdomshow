<?php
namespace app\api\controller;

use think\Controller;

class Wisdom extends Controller
{
    //获取wisdom_data数据
    public function wisdomdata()
    {
   /*     $wisdom=model('WisdomType');
        $wisdom_data=$wisdom->wisdomdata();
        //$list=array_slice(array_reverse($wisdom_data),1,5);
        //$a=$this->assign('wisdom_data', $list);
        $this->assign('wisdom_data', $wisdom_data);
       // $a=$this->assign(['name'=>'朱老师','lesson'=>'php']);
        //dump($a);
        return $this->fetch('index');
*/

        try{
            $wisdom=model('WisdomType');
            $wisdom_data=$wisdom->wisdomdata();
        }catch(Exception $e){
            return ajaxReturn(array(
                'status'=>false,
                'err'=>$e,
            ),$msg='操作失败',$url='api/wisdom/wisdomdata');
        }
        return ajaxReturn(array(
            'status'=>true,
            'wisdomdata'=>$wisdom_data,
            'err'=>''
        ),$msg='操作成功',$url='api/wisdom/wisdomdata');
        
    }
//获取wisdom_meta中数据
    public function wisdommeta()
    {
     try{
        $wisdom=model('WisdomType');
        $wisdom_meta=$wisdom->wisdommeta();
      }catch(Exception $e){
        return ajaxReturn(array(
            'status'=>false,
            'err'=>$e,
        ),$msg='操作失败',$url='api/wisdom/wisdommeta');
      }
    return ajaxReturn(array(
        'status'=>true,
        'article_list'=>$wisdom_meta,
        'err'=>"",
    ),$msg='操作成功',$url='api/wisdom/wisdommeta');
    }
    
}