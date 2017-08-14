<?php 
  include('../conn.php');
  $id=$_GET['id'];
  $sql="delete from yb_news where id='$id' ";
  $res=mysql_query($sql);
  if($res){
  	echo"<script> alert('删除成功');location.href='news.php';</script>";
  }else{
    echo"<script> alert('删除失败');location.href='news.php';</script>";
  }
 ?>