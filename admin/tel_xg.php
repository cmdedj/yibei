<?php 
include('../conn.php');

$id=$_GET['id'];
$title=$_POST['title'];
$content=$_POST['content'];

$sql="update yb_tel set  title='$title',content='$content' where id='$id'";
$res=mysql_query($sql);
if($res){
  echo "<script> location.href='tel.php';</script>";
}else{
  echo "<script> alert('修改失败');location.href='tel_modify.php';</script>";
}
 ?> 
