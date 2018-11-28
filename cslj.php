<?php
header("content-type=text/html;charset=utf-8");
$mysqli = new mysqli('***','root','****','wisdom');
if($mysqli -> connect_errno){
	die("数据库连接失败".$mysqli -> connect_error);
}
echo '<h1 style="color:#f00">数据库连接成功</h1>';
?>
