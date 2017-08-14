<?php 
session_start();
//开启session会话方法
//链接数据库
include("../conn.php");

//接受login.php的用户名和密码
   //trim():去掉多余的空格
   //字符串函数，数据库  文件处理 类

$username=trim($_POST['username']);
$password=$_POST['password'];


$_SESSION['username']=trim($_POST['username']);
$_SESSION['password']=$_POST['password'];



//验证数据
 $sql="select * from user where username='$username' and password='$password'"; //把接受的值作为条件进行查询
 $res=mysql_query($sql); //执行sql语句
 $row=mysql_fetch_array($res);//将结果以数组的形式存到row的变量里


 //条件判断，正确进入首页错误返回登录页
 if($row){
 	echo "<script> alert('登录成功')</script>";//弹出对话框提示
 	echo "<script> location.href='index.php'</script>";//JS跳转页面
 }else{
 	echo "<script> alert('登录失败')</script>";
 	echo "<script>history.go(-1);</script>" ;//js返回上一页
 }

 ?>

 <meta charset="utf-8">