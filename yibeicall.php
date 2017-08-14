<?php 
  include("conn.php")
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/yibeicall.css">
	<link rel="stylesheet" href="css/contact.css">
</head>
<body>
	<!-- <div class="top">
	<img src="images/toplogo.gif" id="logo" alt="">
	</div> -->
      <!--头部开始-->
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



	<div class="midbox">
		<div class="midtop">
		<img src="images/fb.gif" id="fb" alt="">
		<img src="images/undery.gif" id="undery" alt="">
		</div>

		<div class="midmid">
			<div class ="pos">
				<p>亿贝CALL<p></div>
			<div class="posr">
				<p><span>当前位置:</span>首页>亿贝CALL</p>
            </div>
        </div>

		<div class="main">
		<div class="midmain1">
		<div class="img">
		    <img src="images/ic1.gif" id="pig" alt="">
		    </div>

		    <div class="word0"> 
			<?php 
            //查询数据库里的数据
            $sql="select title,content from yb_call where id=1;";//写查询sql语句
            $res=mysql_query($sql);      //执行sql语句
            $row=mysql_fetch_array($res);//把执行的结果以数组的形式保存
            ?>
            <h2><a href="#"><?php echo $row['title'] ?></a></h2>
        
            <p><?php echo $row['content'] ?> </p>
       
			</div>
		    <a href=""> <img src="images/download.gif" id="download" alt=""></a>  
		</div>
		 <div style="width:620px;height:1px;margin:0px auto;padding:0px;background-color:#D5D5D5;overflow:hidden;"></div>
		 <div class="midmain2">
		    <img src="images/ic2.gif" id="cs" alt="">
		    <div class="word2">
		    <?php 
            //查询数据库里的数据
            $sql1="select title,content from yb_call where id=2;";//写查询sql语句
            $res1=mysql_query($sql1);      //执行sql语句
            $row1=mysql_fetch_array($res1);//把执行的结果以数组的形式保存
            ?> 
			<h2><a href="#"><?php echo $row1['title'] ?></a></h2>
			<p><?php echo $row1['content'] ?> </p></div>
		</div>
		 <div style="width:620px;height:1px;margin:0px auto;padding:0px;background-color:#D5D5D5;overflow:hidden;"></div>
	
	 <div class="midmain3">
		    <img src="images/ic3.gif" id="sy" alt="">
		    <div class="word3">
		     <?php 
            //查询数据库里的数据
            $sql2="select title,content from yb_call where id=3;";//写查询sql语句
            $res2=mysql_query($sql2);      //执行sql语句
            $row2=mysql_fetch_array($res2);//把执行的结果以数组的形式保存
            ?>  	
			<h2><a href="#"><?php echo $row2['title'] ?></a></h2>
			<p><?php echo $row2['content'] ?> </p></div>
		</div>
		 <div style="width:620px;height:1px;margin:0px auto;padding:0px;background-color:#D5D5D5;overflow:hidden;"></div>
		  <div class="midmain4">
		    <img src="images/ic4.gif" id="yy" alt="">
		    <div class="word4"	>
		    <?php 
            //查询数据库里的数据
            $sql3="select title,content from yb_call where id=4;";//写查询sql语句
            $res3=mysql_query($sql3);      //执行sql语句
            $row3=mysql_fetch_array($res3);//把执行的结果以数组的形式保存
            ?>  	
			<h2><a href="#"><?php echo $row3['title'] ?></a></h2>
			<p><?php echo $row3['content'] ?> </p> </div>	
		</div>
		 <div style="width:620px;height:1px;margin:0px auto;padding:0px;background-color:#D5D5D5;overflow:hidden;"></div>
		  <div class="midmain5">
		    <img src="images/ic5.gif" id="th" alt="">
		    <div class="word5"> 	
			 <?php 
            //查询数据库里的数据
            $sql4="select title,content from yb_call where id=5;";//写查询sql语句
            $res4=mysql_query($sql4);      //执行sql语句
            $row4=mysql_fetch_array($res4);//把执行的结果以数组的形式保存
            ?>  	
			<h2><a href="#"><?php echo $row4['title'] ?></a></h2>
			<p><?php echo $row4['content'] ?> </p> </div>	
		</div>
		 <div style="width:620px;height:1px;margin:0px auto;padding:0px;background-color:#D5D5D5;overflow:hidden;"></div>

	</div>
	<div class="mainr">
		<div class="rtop">
			<div class="light">
			<img src="images/lights.gif" alt=""></div>
			<div class="word1">
			<p>您可以随时充值、查询余额、查询话</p>
			<p>单、查询资费信息，让您明明白白消</p>
			<p>费。您可以随时充值、查询余额、查询
			话单、查询资费信息，让</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>全国拨打只收市话费</p>
			<p>400-716-2277</p>
			<p>我们的邮箱:</p>
			<p>support@inbai.com</p>
			</div>

			
		</div>
		<div class="rbot">
		  <div class="why"><img src="images/why.gif" alt=""></div>
		  <div class="wt"><p>常见问题</p></div>
		  <div class="word2">
			<p><img src="images/icon7.jpg" alt=""><span>以随时充值、查询余额、查询话单、查</span></p>
			<p><img src="images/icon7.jpg" alt=""><span>以随时充值、查询余额、查询话单、查</span></p>
			<p><img src="images/icon7.jpg" alt=""><span>以随时充值、查询余额、查询话单、查</span></p>
			<p><img src="images/icon7.jpg" alt=""><span>以随时充值、查询余额、查询话单、查</span></p>
			<p><img src="images/icon7.jpg" alt=""><span>以随时充值、查询余额、查询话单、查</span></p>
			<p>&nbsp;</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><<了解详情</a></p>


		</div>

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