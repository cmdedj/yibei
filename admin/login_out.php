<?php 
session_start();
//删除所有session变量
unset($session);

echo "<script> location.href='login.php'; </script>";
 ?>