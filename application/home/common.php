<?php
//ajaxReturn返回json数据
function ajaxReturn($code){
     // header('Content-Type:application/json; charset=utf-8');
    //  $tmp=array($code);
      //echo json_encode($code, JSON_UNESCAPED_UNICODE);
      return json($code);
  }
  function object_to_array($obj) {
    $obj = (array)$obj;
    foreach ($obj as $k => $v) {
        if (gettype($v) == 'resource') {
            return;
        }
        if (gettype($v) == 'object' || gettype($v) == 'array') {
            $obj[$k] = (array)object_to_array($v);
        }
    }
 
    return json($obj);
  }