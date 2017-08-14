<?php 
include('../conn.php') ;
$no=$_POST['no'];
$name=$_POST['name'];
$date=$_POST['date'];
$url=$_POST['url'];
$user=$_POST['user'];
$content=$_POST['content'];
$sql="insert into yb_news(no,name,date,url,user,content) values('$no','$name','$date','$url','$user','$content')";
$res=mysql_query($sql);
if($res){
  	echo "<script>location.href='news.php';</script>";
  }else{
    echo "<script> alert('添加失败');location.href='news_add.php';</script>";
  }
?>