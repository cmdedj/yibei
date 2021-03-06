<?php
session_start();
include('../conn.php');

$username=$_SESSION['username'];
$password=$_SESSION['password'];

if ($username=='' && $password=='') {
	echo "<script> location.href='login.php' ; </script>";
}

?>
<!doctype html>
<html lang="en">

<head>
	<title>最新动态</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/toastr/toastr.min.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/css.css">
	<!-- GOOGLE FONTS -->
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.html"><img src="assets/img/logo.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<form class="navbar-form navbar-left">
					<div class="input-group">
						<input type="text" value="" class="form-control" placeholder="Search dashboard...">
						<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
					</div>
				</form>
				<div class="navbar-btn navbar-btn-right">
					<a class="btn btn-success update-pro" href="../index.php" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>网站首页</span></a>
				</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
								<i class="lnr lnr-alarm"></i>
								<span class="badge bg-danger">5</span>
							</a>
							<ul class="dropdown-menu notifications">
								<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>System space is almost full</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-danger"></span>You have 9 unfinished tasks</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Monthly report is available</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Weekly meeting in 1 hour</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Your request has been approved</a></li>
								<li><a href="#" class="more">See all notifications</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#">Basic Use</a></li>
								<li><a href="#">Working With Data</a></li>
								<li><a href="#">Security</a></li>
								<li><a href="#">Troubleshooting</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/user.png" class="img-circle" alt="Avatar"> <span><?php echo $_SESSION['username']; ?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="userinfo.php"><i class="lnr lnr-user"></i> <span>我的用户</span></a></li>
								<li><a href="user_add.php"><i class="lnr lnr-envelope"></i> <span>添加用户</span></a></li>
								<li><a href="login_out.php"><i class="lnr lnr-cog"></i> <span>退出</span></a></li>
							</ul>
						</li>
						<!-- <li>
							<a class="update-pro" href="#downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
<nav>
					<ul class="nav">
						<li><a href="index.php" class=""><i class="lnr lnr-home"></i> <span>首页</span></a></li>
						
						<li><a href="call.php" class=""><i class="lnr lnr-chart-bars"></i> <span>亿贝CALL</span></a></li>
						<li><a href="tel.php" class=""><i class="lnr lnr-cog"></i> <span>亿贝通讯录</span></a></li>
						<li><a href="news.php" class="active"><i class="lnr lnr-alarm"></i> <span>最新动态</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>留言板</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="viewboard.php" class="">查看留言</a></li>
									<li><a href="reply.php" class="">留言回复</a></li>
								</ul>
							</div>
						</li>
						<li><a href="help.php" class=""><i class="lnr lnr-dice"></i> <span>帮助中心</span></a></li>
						<li><a href="exit.php" class=""><i class="lnr lnr-linearicons"></i> <span>退出</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					
					<!--END OVERVIEW-->
					<h2 class="panel-title" style="margin-bottom: 20px">最新动态</h2>
					<div><h4><a href="news_add.php?id=<?php echo $row['id']?>">添加</a></h4></div>
					
                     <?php 
					    $sql="select * from yb_news order by id asc";
					    $res=mysql_query($sql);
						while($row=mysql_fetch_array($res)){
						?>
					<div class="row">

						<div class="col-md-6">
							<div class="panel">

								<div class="panel-heading">
								    <span><?php echo $row['no']; ?></span>
									<span><?php echo $row['name']; ?></span>
									<span><?php echo $row['date']; ?></span>
									<span><?php echo $row['url']; ?></span>
									<span><?php echo $row['user']; ?></span>
									
									
								</div>
								<div class="panel-body">
									<span><?php echo $row['content']; ?></span>
									<span>
									    
									    <a href="news_modify.php?id=<?php echo $row['id']?>" style="float:right">修改</a>

									    <a href="news_del.php?id=<?php echo $row['id']?>" style="float:right">删除</a>

								     </span>
								</div>
							</div>
						</div>
						
					</div>
					 <?php
						  }
					   ?>
				</div>
			</div>
			
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">Copyright &copy; 2017.Company name All rights reserved.<a target="_blank" href="http://www.htmlsucai.com">&#72;&#84;&#77;&#76;&#32032;&#26448;&#32593;</a></p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/toastr/toastr.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
</body>

</html>
