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
	<title>亿贝通讯录</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
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
					<a class="btn btn-success update-pro" href="../index.php" title="网站首页" target="_blank"><i class="fa fa-rocket"></i> <span>网站首页</span></a>
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
								<li><a href="useradd.php"><i class="lnr lnr-envelope"></i> <span>添加用户</span></a></li>
								<li><a href="login_out.php"><i class="lnr lnr-cog"></i> <span>退出</span></a></li>
							</ul>
						</li>
						
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
						<li><a href="tel.php" class="active"><i class="lnr lnr-cog"></i> <span>亿贝通讯录</span></a></li>
						<li><a href="news.php" class=""><i class="lnr lnr-alarm"></i> <span>最新动态</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>留言板</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="page-profile.php" class="">查看留言</a></li>
									<li><a href="page-login.php" class="">留言回复</a></li>
									<li><a href="page-lockscreen.php" class="">Lockscreen</a></li>
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
					<h3 class="page-title">帮助中心</h3>        
					<div class="row">
						<div class="col-md-6">
							<div class="panel">
								<div class="panel-heading">
								<?php 
							        $id=$_GET['id'];
									$sql="select * from yb_help where id='$id'";
									$res=mysql_query($sql);
									$row=mysql_fetch_array($res);
								 ?>
									<form action="help_xg.php?id=<?php echo $row['id']?>" method="post">

									<p>title：<input type="text" name="title" value="<?php echo $row['title']?>"></p>
									<p>content：<textarea row="3" cols="80" name="content" ><?php echo $row['content']?></textarea> </p>
									<p><input type="submit" value="确定" name=""></p>

									</form>
								</div>	
							
							</div>
						</div>
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
	<script src="assets/scripts/klorofil-common.js"></script>
</body>

</html>
