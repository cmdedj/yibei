<?php 
//记载其他页面
include("conn.php");
//用get方法接收数据
$id=$_GET['id'];
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
				<div class="ltitle">
				     <?php 
				      //查询数据库里的数据
				      $sql="select id,name,date,url,user,content from yb_news where id='$id' ";
				      $res=mysql_query($sql);//执行sql语句
				      $row=mysql_fetch_array($res);//把执行的结果放到row数组中保存
				      ?>
					<p class="ltitleb"><b><?php echo $row['name'] ?></b></p>
					<p class="ltitles"><?php echo $row['url'] ?>&nbsp;<?php echo $row['date'] ?>&nbsp;<?php echo $row['user'] ?></p>
				</div>
				<div class="lword">
					<p>
					<?php echo $row['content'] ?>
					</p>
				</div>
				<div class="lllpic">
					<a href=""><img src="images/downloadfree.gif" alt="downloadmiss">
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
					<li><a href="">以随时充值、查询余额、查询话单、查</a></li>
					<li><a href="">以随时充值、查询余额、查询话单、查</a></li>
					<li><a href="">以随时充值、查询余额、查询话单、查</a></li>
					<li><a href="">以随时充值、查询余额、查询话单、查</a></li>
					<li><a href="">以随时充值、查询余额、查询话单、查</a></li>
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