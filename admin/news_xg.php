<?php 
 include('../conn.php');
 $id=$_GET['id'];
 $no=$_POST['no'];
 $name=$_POST['name'];
 $date=$_POST['date'];
 $url=$_POST['url'];
 $user=$_POST['user'];
 $content=$_POST['content'];
 $sql="update yb_news set no='$no',name='$name',date='$date',url='$url',user='$user',content='$content' where id='$id'";
 $res=mysql_query($sql);
 if($res){
  	echo "<script> alert('修改成功');location.href='news.php';</script>";
  }else{
    echo "<script> alert('修改失败');location.href='news_modify.php';</script>";
  }
 ?>