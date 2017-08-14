<?php 
include('../conn.php');

$title=$_POST['title'];
$content=$_POST['content'];

$sql="insert into yb_tel(title,content) values('$title','$content')";
$res=mysql_query($sql);
if($res){
  echo "<script> location.href='tel.php';</script>";
}else{
  echo "<script> alert('添加失败');location.href='teladd.php';</script>";
}
 ?> 