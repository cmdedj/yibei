<?php 
//记载其他页面
include("conn.php");

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>new</title>
	<link rel="stylesheet" type="text/css" href="css/new.css">
	<link rel="stylesheet" type="text/css" href="css/contact.css">
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
	<div class="lbackground">
	<div class="lcontent">
	<div class="lphone"><img src="images/phone.jpg" alt="phone"></div>
		<div class="lnew">
		
			<span>最新动态</span>
			<span>当前位置&nbsp;:&nbsp;<a href="">首页></a><a href="">最新动态</a></span>
		</div>
		<div class="lpart">
			<div class="ltext1">
				<dl>
					<dt>
						<span>NO</span>
						<span>NAME</span>
						<span>DATE</span>
					</dt>
					<?php 
							//循环输出，用php标签将语句分隔开
					    $sql="select id,no,name,date from yb_news order by id desc limit 10;";
					    $res=mysql_query($sql);//执行sql语句
					    while($row=mysql_fetch_array($res)){
						 ?>	
					<dd>
						<span><?php echo $row['no'] ?></span>
						<span><a href="article1.php?id=<?php echo $row['id'] ?>"><?php echo $row['name'] ?></a></span>
						<span><?php echo substr($row['date'],0,10) ?></span>
					</dd>
					<?php 
					}
					 ?>
				</dl>
				<div class="lpnum">
					<a href=""><img src="images/lpn1.jpg" alt="1miss"></a>
					<a href=""><img src="images/lpn2.jpg" alt="2miss"></a>
					<a href="">1</a>
					<a href="">2</a>
					<a href="">3</a>
					<a href="">4</a>
					<a href=""><img src="images/lpn3.jpg" alt="3miss"></a>
					<a href=""><img src="images/lpn4.jpg" alt="4miss"></a>
				</div>
			</div>
			
		</div>
		<div class="lrpart">
			<div class="lup">
				<img src="images/light.jpg" alt="lightmiss" class="llight">
				<p>您可以随时充值、查询余额、查询话费单、查询资费信息，让您明明白白消费。您可以随时充值、查询余额、查询话费单、查询资费信息，让</p>
				<img src="images/T_num.jpg" alt="" class="T_num" class="T_num">
			</div>
			<div class="ldp">
				<img src="images/doubt.jpg" alt="doubt">
				<p>常见问题</p>
				<ul>
				<?php 
							//循环输出，用php标签将语句分隔开
					    $sql2="select title from yb_question_count;";
					    $res2=mysql_query($sql2);//执行sql语句
					    while($row2=mysql_fetch_array($res2)){
						 ?>	
					<li><a href=""><?php echo $row2['title'] ?></a></li>
					<?php 
					}
					 ?>
				</ul>
				<div class="lmore">>>了解详情</div>
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
</body>
</html>