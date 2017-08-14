<?php 
include('../conn.php');

$username=$_POST['username'];
$password=$_POST['password'];

$sql="insert into user(username,password) values('$username','$password')";
$res=mysql_query($sql);

if($res){
  echo "<script> location.href='userinfo.php';</script>";
}else{
  echo "<script> alert('添加失败');location.href='useradd.php';</script>";
}
 ?> 