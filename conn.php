<?php 
//连接MySQL数据库
mysql_connect("localhost","root","admin") or die("mysql数据库连接失败!");
//连接项目数据库
mysql_select_db("yibei") or die("数据库未连接成功");
//指定数据库字符集utf8（防止出现中文乱码）
mysql_query("set names utf8");
//设置时区为中国时区，默认是伦敦时区，差8小时
date_default_timezone_set("PRC");
//设置错误报告提示，取消警告提示(变量未定义时，不会出现警告提示，影响布局)
error_reporting("E_ALL" & ~E_NOTICE);  
//指定页面输出格式utf-8
header("Content-type:text/html;charset=utf-8");

 ?>