<?php 
include('../conn.php');

$id=$_GET['id'];
$sql="delete from yb_message where id='$id'";
$res=mysql_query($sql);
if($res){
  echo "<script> location.href='reply.php';</script>";
}else{
  echo "<script> alert('删除失败');location.href='reply.php';</script>";
}
 ?> 