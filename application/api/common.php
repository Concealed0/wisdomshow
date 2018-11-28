<?php

//ajaxReturn返回json数据
function ajaxReturn($code,$msg='操作成功',$url='',$data=array(array('name'=>'lezhu','url'=>'hellolezhu.com')),$render=true){
    //  header('Content-Type:application/json; charset=utf-8');
      $tmp['status']=$code;
      $tmp['msg']=$msg;
      $tmp['url']=$url;
      $tmp['data']=$data;
      $tmp['render']=$render;
     // echo json_encode($tmp, JSON_UNESCAPED_UNICODE);
      return json($tmp);
  }
  