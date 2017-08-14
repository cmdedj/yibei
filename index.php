<?php 
//记载其他页面
include("conn.php");

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>home</title>
	<link rel="stylesheet" href="css/yibeifirst.css">
	<link rel="stylesheet" href="css/contact.css">
  <link rel="stylesheet" href="css/css.css">
  <script type="text/javascript" src="js/lrtk.js"></script>
</head>
<body>
 <script>
      function bd(){
        document.getElementById("l_one").style.background="#ee941e";
        document.getElementById("l_two").style.background="#bb5902";
       document.getElementById("two").style.display="none";
       document.getElementById("one").style.display="block";
      }
       function bd1(){
        document.getElementById("l_two").style.background="#ee941e";
        document.getElementById("l_one").style.background="#bb5902";
        document.getElementById("one").style.display="none";
        document.getElementById("two").style.display="block";

      }
  </script>  
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
	<div class="content">
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
		<div class="main_wrap">
			<div class="content">
	<div class="content_main">
        <div class="content_container">
        <!-- 焦点图 开始 -->
      <div id="playBox">
        <div class="pre"></div>
        <div class="next"></div>
        <div class="smalltitle">
          <ul>
            <li class="thistitle"></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div>
        <ul class="oUlplay">
           <li><a href="" target="_blank"><img src="images/banner1.jpg"></a></li>
           <li><a href="" target="_blank"><img src="images/banner2.jpg"></a></li>
           <li><a href="" target="_blank"><img src="images/banner1.jpg"></a></li>
           <li><a href="" target="_blank"><img src="images/banner2.jpg"></a></li>
            <li><a href="" target="_blank"><img src="images/banner1.jpg"></a></li>
           <li><a href="" target="_blank"><img src="images/banner2.jpg"></a></li>
        </ul>
      </div>
    <!-- 焦点图 结束 -->
        <div class="login">
           
            <div class="login_top">
           <div class="login_top1" id="l_one" onmouseover="bd()">
           	<a id="li1">
            亿贝CALL</a>
           	</div>
           <div class="login_top2" id="l_two" onmouseover="bd1()">
           	<a id="li2">亿贝通讯录</a>
           	</div>
           </div>
           <form action="" method="post">
           <div class="login_mid" id="one">
                <div class="name">
                    
                        <label for="for1">用户名</label>
                            <input type="text" name="" id="for1">
                  
                </div>
                <div class="passw">
                  
                        <label for="for2">密码</label>
                        <input type="password" name="" id="for2">
                    
                </div>
                <div class="lgn">
                    <input type="submit" value="登录">
                    <a href="">忘记密码</a>
                </div>
            </div>  
            </form action="" method="post">
            <form>
                  <div class="login_mid" id="two">
                <div class="name">
                    
                        <label for="for1">用户名1</label>
                            <input type="text" name="" id="for1">
                   
                </div>
                <div class="passw">
                    
                        <label for="for2">密码1</label>
                        <input type="password" name="" id="for2">
                    
                </div>
                <div class="lgn">
                    <input type="submit" value="登录">
                    <a href="">修改密码</a>
                </div>
            </div>
        </div> 
        </form>        
        </div>
    </div>
    <div class="max"><div class="content_mid">
     <div class="content_midl">
     <div class="content_midl1"><a href=""><img src="images/yibei_first_21.gif"></a></div>
     <div class="content_midladd">
     <?php 
      //查询数据库里的数据
      $sql="select title,content from yb_call where id=1;";
      $res=mysql_query($sql);//执行sql语句
      $row=mysql_fetch_array($res);//把执行的结果放到row数组中保存
      ?>
     <h2><a href=""><?php echo $row['title'] ?></a></h2>
     <div class="content_midl2">
     <p><?php echo $row['content'] ?></p>
     </div>
     <div class="content_midl3"><a href=""><img src="images/yibei_first_26.gif"></a><span><a href="">>&nbsp;>&nbsp;了解详情</a></span></div>
     </div>
     <div class="clear"></div>
     </div>
     <div class="content_midr">
     <div class="content_midr1"><a href=""><img src="images/yibei_first_23.gif"></a></div>
      <div class="content_midradd">
      <?php 
      //查询数据库里的数据
      $sql1="select title,content from yb_tel where id=1;";
      $res1=mysql_query($sql1);//执行sql语句
      $row1=mysql_fetch_array($res1);//把执行的结果放到row数组中保存
      ?>
      <h2><a href=""><?php echo $row1['title'] ?></a></h2>
     <div class="content_midr2"><p><?php echo $row1['content'] ?></p></div>
     <div class="content_midr3"><a href=""><img src="images/yibei_first_26.gif"></a><span><a href="">>&nbsp;>&nbsp;了解详情</a></span></div>
     </div>
    </div>
    </div>
    <div class="clear"></div>
    <div class="content_lastl">
    <h2 class="title">
    <img src="images/yibei_first_32.gif">
    <p>&nbsp;&nbsp;最新动态</p>
    </h2>                                                         
    <ul class="cla">
    <?php 
      //循环输出，用php标签将语句分隔开
      $sql2="select id,name,date from yb_news  order by id desc limit 4;";
      $res2=mysql_query($sql2);//执行sql语句
      while($row2=mysql_fetch_array($res2)){
    ?>
    <!--截取字符串函数substr(字符串，截取位置，截取个数)-->
    	<li><a href="article1.php?id=<?php echo $row2['id'] ?>"> <?php echo $row2['name'] ?></a><span><?php echo substr($row2['date'],0,10) ?> </span></li>
   <?php
    }
     ?>
     </ul>
    <div class="cla1">
    <a href="">>>了解详情</a>
    </div>
    </div>
    <div class="lastr">
     <div class="txt3">
      <h2 class="title2">
       <img src="images/yibei_first_35.gif">
       <p>&nbsp;&nbsp;客服中心</p>
      </h2>
      <img src="images/phone.gif" id="im">
     </div>
     <div class="img2">
     <a href=""><img src="images/yibei_first_38.gif"></a>
     </div>

    </div>
    <div class="clear"></div>
    </div>
		</div>

	
   

    </div>
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
</body>
</html>