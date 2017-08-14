<?php 
include('../conn.php');

$id=$_GET['id'];
$username=$_POST['username'];
$password=$_POST['password'];

$sql="update user set  username='$username',password='$password' where id='$id'";
$res=mysql_query($sql);
if($res){
  echo "<script> alert('修改成功');location.href='userinfo.php';</script>";
}else{
  echo "<script> alert('修改失败');location.href='user_modify.php';</script>";
}
 ?> 