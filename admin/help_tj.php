<?php 
include('../conn.php');

$title=$_POST['title'];
$content=$_POST['content'];

$sql="insert into yb_help(title,content) values('$title','$content')";
$res=mysql_query($sql);
if($res){
  echo "<script> location.href='help.php';</script>";
}else{
  echo "<script> alert('添加失败');location.href='helpadd.php';</script>";
}
 ?> 