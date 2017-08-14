<?php 
 include('../conn.php');
 $id=$_GET['id'];
 $title=$_POST['title'];
 $content=$_POST['content'];
 $sql="update yb_call set title='$title',content='$content' where id='$id'";
 $res=mysql_query($sql);
 if($res){
  	echo "<script> alert('修改成功');location.href='call.php';</script>";
  }else{
    echo "<script> alert('修改失败');location.href='call_modify.php';</script>";
  }
 ?>