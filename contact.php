<?php 
include("conn.php");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>亿贝通讯录</title>
<link rel="stylesheet" href="css/contact.css">
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
		<div class="main_wrap">
			<div class="main_top">
				<img src="images/top.gif" alt="">
				<img src="images/top_line.gif" alt="">
			</div>
			<div class="main_con">
				<div class="main_con_nav">
					<p>亿贝通讯录</p>
					<ul>
						<li>当前位置：</li>
						<li><a href="">首页></a></li>
						<li><a href="">亿贝通讯录</a></li>
					</ul>	
				</div>
				<div class="main_con_left">

						 <?php 
					      $sql="select id,title,content from yb_tel";
					      $res=mysql_query($sql);//执行sql语句
					      $row=mysql_fetch_array($res);//把执行的结果放到row数组中保存
					      do{
						  	if($row['id']==1){
						 ?>
					<div class="main_con_info1">
						<div class="info1_l"><a href=""><img src="images/contact1.gif" alt=""></a></div>
						<div class="info1_c">		    
							<p><?php echo $row['title'] ?><span>(版本1.23)</span></p>
							<p><?php echo $row['content'] ?></p>
						</div>
						<div class="info1_r"><a href=""><img src="images/download.gif" alt=""></a></div>
						<div class="clear"></div>
					</div>
					 <?php 
					 }
					  else{?> 
					<div class="main_con_info2">
						<div class="info2_l">
							<a href=""><img src="images/contact<?php echo $row['id'] ?>.gif" alt=""></a>
						</div>
						<div class="info2_r">
							<a href=""><?php echo $row['title'] ?></a>
							<p><?php echo $row['content'] ?></p>
						</div>
						<div class="clear"></div>
					</div>
					<?php 
					}}
					while($row=mysql_fetch_array($res));
					  ?>
				</div>
				<div class="main_con_right">
					<div class="right_top">
					<p>您可以随时充值、查询余额、查询话单、查询资费信息，让您明明白白消费。您可以随时充值、查询余额、查询话单、查询资费信息，让</p>
						<img src="images/light.gif" alt="">
						<img src="images/right_top.jpg" alt="">
					</div>
					<div class="right_bottom">
						<img src="images/right_bot.jpg" alt="">
						<h2>常见问题</h2>
						<ul>
						<?php 
								//循环输出，用php标签将语句分隔开
						    $sql2="select title from yb_question_count order by id desc limit 5;";
						    $res2=mysql_query($sql2);//执行sql语句
						    while($row2=mysql_fetch_array($res2)){
							 ?>	
							<li><a href=""><?php echo $row2['title'] ?></a></li>
						<?php 
						}
						 ?>
						</ul>
						<a class="more" href="">>>了解详情</a>
					</div>
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
	<div class="box"></div>
</body>
</html>