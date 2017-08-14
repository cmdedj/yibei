<?php 
include('../conn.php') ;
$title=$_POST['title'];
$content=$_POST['content'];
$sql="insert into yb_call(title,content) values('$title','$content')";
$res=mysql_query($sql);
if($res){
  	echo "<script>location.href='call.php';</script>";
  }else{
    echo "<script> alert('添加失败');location.href='call_add.php';</script>";
  }
?>