<?php 
include('../conn.php');

$id=$_GET['id'];
$sql="delete from yb_help where id='$id'";
$res=mysql_query($sql);
if($res){
  echo "<script> location.href='help.php';</script>";
}else{
  echo "<script> alert('删除失败');location.href='help.php';</script>";
}
 ?> 