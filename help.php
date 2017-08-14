<?php 
//记载其他页面
include("conn.php");

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>帮助中心</title>
	<link rel="icon" href="images/icon.gif">
	<link rel="stylesheet" href="css/contact.css">
	<link rel="stylesheet" href="css/cmdedj_style.css">
	<script src="js/jquery-3.2.1.js"></script>
</head>
<body>
    <!--头部开始-->
	<div class="top_wrap">
		<div class="top">
			<div class="top_logo">
				<img src="images/top_logo.gif" alt="">
			</div>
			<div class="top_mobile">
				<p>手机访问WAP.INBAI.COM</p>
			</div>
		</div>		
	</div>
	<!--头部结束-->
	<div class="content">
		<!--导航条开始-->
		<div class="top_nav">
			<ul>
				<li><img src="images/top_bar.gif" alt=""><a href="index.html">亿贝首页</a></li>
				<li><img src="images/top_bar.gif" alt=""><a href="yibeicall.html">亿贝CALL</a></li>
				<li><img src="images/top_bar.gif" alt=""><a href="contact.html">亿贝通讯录</a></li>
				<li><img src="images/top_bar.gif" alt=""><a href="dynamic.html">最新动态</a></li>
				<li><img src="images/top_bar.gif" alt=""><a href="board.html">留言板</a></li>
				<li><img src="images/top_bar.gif" alt=""><a href="help.html">帮助中心</a></li>
			</ul>	
		</div>
		<!--导航条结束-->


		<div class="container">
			<div class="banner"></div>
			<div class="title">
				<b class="title_left">用户中心</b>
				<p class="title_right"><span>当前位置：</span><a href="">首页</a>><a href="">用户中心</a></p>
			</div>
			<div class="left">
				<div class="daohang">
				<div class="call">
					<ul>
						<li><b>亿贝CALL</b></li>
						<li><a href="">Symbian平台</a></li>
						<li><a href="">android平台</a></li>
						<li><a href="">通用J2me平台</a></li>
					</ul>
					<ul>
					<li><b>通信录</b></li>
					     <?php 
					      //查询数据库里的数据
					      $sql2="select class_title from yb_question_class ;";
					      $res2=mysql_query($sql2);//执行sql语句
					      while($row2=mysql_fetch_array($res2)){
					      ?>
						
						<li><a href=""><?php echo $row2['class_title'] ?></a></li>
						<?php 
						}
						 ?>
					</ul>
				</div>
				</div>
			</div>
			<div class="right">
				<script>
					$(document).ready(function () {
						$("dt").click(function () {
							if($(this).hasClass("open")){
								$(this).next().hide();
								$(this).attr("class", "close");
								return
							}
							$("dd").hide();
							$("dt").attr("class", "close");
							$(this).attr("class", "open");
							$(this).next().show();
						});
						
					});
				</script>
				<div class="three">
					<dl>
					    <?php 
							//循环输出，用php标签将语句分隔开
					    $sql="select title,content from yb_help;";
					    $res=mysql_query($sql);//执行sql语句
					    while($row=mysql_fetch_array($res)){
						 ?>	
						<dt class="close"><?php echo $row['title'] ?></dt>
						<dd><?php echo $row['content'] ?><a href="">立即查看</a></dd>
						<?php 
						}
						 ?>
					</dl>
				</div>
			</div>
		</div>

	 <!--尾部开始-->
	 <div class="foot_wrap">
	 	<div class="foot">
	 		<div class="foot_nav">
				<ul>
					<li><a href="">帮助中心</a><span>|</span></li>
					<li><a href="">隐私条款</a><span>|</span></li>
					<li><a href="">关于我们</a><span>|</span></li>
					<li><a href="">来源：源码之家</a></li>
				</ul>
	 		</div>
	 		<div class="foot_txt">©2009.INBAI Technology Co.Ltd粤ICP备09104593</div>
	 		<div class="foot_logo"></div>
	 	</div>
	 </div>
	 <!--尾部结束-->
	</div>
	
</body>
</html>