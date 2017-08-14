<meta charset="UTF-8">
<?php 

include("conn.php");


$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];
$code=$_POST['code'];
$id=$_GET['id'];

if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/",$email)
) {
	echo "<script>alert('email格式不符合要求');location.href='board.php';</script>";
}
else{
	$sql="insert into yb_message (email,iphone,message,code) values('$email','$phone','$message','$code');";
	$res=mysql_query($sql);

	if ($res) {
		echo "<script>alert('添加留言成功');location.href='board.php';</script>";
	}else{
		echo "<script>alert('添加留言失败');location.href='board.php';</script>";
	}

}

 ?>