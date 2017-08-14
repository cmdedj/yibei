<?php 
  include("conn.php")
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="css/contact.css">
	<link rel="stylesheet" href="css/lyb.css">
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

<div class="box">
	<div class="lyb">
	<div class="top-img">
			<img src="images/top.gif" id="top">
			<img src="images/top-line2.gif" id="top-line">
		</div>
		<div class="instruct">
			<div class="h1">最新动态</div>
			<div class="top-right">
				<div class="h2">当前位置：
					<div class="h3">首页>最新动态</div>
				</div>
			</div>
		</div>
		<hr style="height:1px;border:none;border-top:1px solid #CACACA;width: 1000px" />
		<div class="left-mid">
			<div class="ebay-des">
			<div class="h1">通过给EBAY留言，最快满足您的需求</div>
			<div class="h2">成功提交的留言将在12小时内给予回复，我们将把回复发送至您的邮箱，请务必填写正确的地址。</div>
			</div>
			<hr style="height:2px;border:none;border-top:2px dotted #CACACA;" />
			<div class="form-group">
				<form method="POST" action="submit.php?id=30" class="form-horizontal" role="form">
					<div class="option">
						<div class="h1">邮箱地址：</div><div class="h2"><input type="text" name="email" id="username" style="width:250px;height:20px; margin:0 auto;box-shadow:2px 2px 7px 0px #8a8a8a;"></div>
					</div>
					<div class="option">
						<div class="h1">手机号码：</div><div class="h2"><input type="text" name="phone" id="username" style="width:250px;height:20px; margin:0 auto;box-shadow:2px 2px 7px 0px #8a8a8a;"></div>
					</div>
					<div class="option" style="height:230px">
						<div class="h1">留言内容：</div><div class="h2"><textarea name="message" id="username" style="width:400px;height:200px; margin:0 auto;box-shadow:2px 2px 7px 0px #8a8a8a;"></textarea></div>
					</div>
					<div class="option">
						<div class="h1">验证码：</div><div class="h2"><input type="text" name="code" id="username" style="width:250px;height:20px; margin:0 auto;box-shadow:2px 2px 7px 0px #8a8a8a;"></div>
					</div>
					<div class="option">
						<div class="tijiao">
						<input class="tj" type="submit" value="提交留言" style="font-size:20px;text-indent:1em;color:#FFF;"></input>
						</div>
					</div>

				    
				</form>
   			</div>
		</div>


		<div class="right-mid">
			<div class="ys">
				<div class="ys-left">
					<img src="images/dp.gif">
				</div>
				<div class="ys-right">
					<div class="up">
						您可以随时充值、查询余额、查询话单、查询资费信息，让您明明白白消费。您可以随时充值、查询余额、查询话单、查询资费信息，让
					</div>
					<div class="down">
						<img src="images/mobile.jpg">
					</div>
				</div>
			</div>

			<div class="ys2">
			<div class="up">
				<div class="ys-left">
					<img src="images/help.gif">
				</div>
				<div class="ys-right">
					常见问题
				</div>
			</div>
			<div class="down">
				<div class="left">
					<img src="images/arrow.gif">
				</div>
				<div class="right">
					以随时充值、查询余额、查询话单、查
				</div>
				<div class="left">
					<img src="images/arrow.gif">
				</div>
				<div class="right">
					以随时充值、查询余额、查询话单、查
				</div>
				<div class="left">
					<img src="images/arrow.gif">
				</div>
				<div class="right">
					以随时充值、查询余额、查询话单、查
				</div>
				<div class="left">
					<img src="images/arrow.gif">
				</div>
				<div class="right">
					以随时充值、查询余额、查询话单、查
				</div>
			</div>	

				<div class="xiangqing">
				>>查看详情
			</div>
	
			

			</div>
			
			</div>


		
		<div class="instruct">
			<div class="h1">历史留言</div>		
		</div>
		<hr style="height:1px;border:none;border-top:1px solid #CACACA;width:620px;margin-left:46px;" />
		<div class="liuyan">
			<div class="yigeliuyan">
				<div class="question">
					<img src="images/q.gif">
					<div class="nr">
					<div class="nr-in">
					咨询内容：2011-05-25 11:21
为什么我在恢复通讯录完成之后提示‘我的通讯录已经是最新的了不的手机里却没有一个电话？
					</div>
					</div>
				</div>
				<div class="answer">
				<img src="images/a.gif">
					<div class="nr">
					<div class="nr-in">
					亿贝回复：2011-05-25 11:21
非常感谢您的建议，删除旧备份这个功能应该是可以的，只在在线编辑单条记录我们觉得会很容易导致和手机上的数据不一致，建议先在手机上改了，然后再备份到服务器。
					</div>
					</div>
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