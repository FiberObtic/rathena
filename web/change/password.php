<?php
	/* Web Design and Script By https://www.eddga-studio.com */
	/* ห้ามแก้ไขข้อมูลต่างๆ ถ้าไม่รู้ค่าของมันจริง */
	session_start();
	header("content-type: text/html; charset=UTF-8");
	include('../system/config_eddga_b3eo2c84w.php');
	include('../system/setting_dashboard.php');
	include('../system/mysql_crud.php');
	include('../system/member.class.php');
	include('../system/job_class.php');
	include('../system/api_date_timezone.php');
	$db = new Database($DBCONFIG);
	$db->connect();
	$member = new Member($db);
	$ip = $member->getIP();
	
	/* ห้ามแก้ไขข้อมูลต่างๆ ถ้าไม่รู้ค่าของมันจริง */
	/* Web Design and Script By https://www.eddga-studio.com */
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $title_home;?></title>
<!-- seo fb setting -- www.eddga-studio.com.com -->
<meta property="fb:app_id" content="<?php echo $app_id_facebook; ?>" />
<meta property="og:title" content="<?php echo $app_title_facebook; ?>">
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo $app_url_facebook; ?>" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="628" />
<meta property="og:site_name" content="<?php echo $app_site_name_facebook; ?>" />
<meta property="og:description" content="<?php echo $app_description_facebook; ?>"/> 
<meta property="og:image" content="<?php echo $app_image_facebook; ?>" />
<meta name="keywords" content="<?php echo $app_keywords ; ?>" />
<meta name="robots" content="index,follow">
<meta name="googlebots" content="index,follow" />
<!-- seo fb setting -- www.eddga-studio.com.com -->
<link rel="shortcut icon" href="../images/eddga_studio.ico" type="image/x-icon">
<link rel="stylesheet" href="../assets/css/semantic.min.css" />
<link rel="stylesheet" href="../assets/css/sweetalert2.min.css">
<link rel="stylesheet" type="text/css" href="../assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../assets/css/ionicons.min.css">
<link rel="stylesheet" type="text/css" href="../assets/css/aos.css">
<link rel="stylesheet" type="text/css" href="../assets/css/eddga-studio.css">
<link rel="stylesheet" type="text/css" href="../assets/css/eddga-studio_api.css">
<link rel="stylesheet" type="text/css" href="../assets/css/eddga-studio_pc.css">
</head>

<body>
<div class="navbar_menu">
		<div class="navbar_menu_bg">
			<div class="container">
				<div class="row">
					<nav>
						<ul>
						<li class="navbar_container" data-aos="fade-down"><a href="../">หน้าหลัก<span>Home</span></a></li>
						<li class="navbar_container" data-aos="fade-down"><a href="../create_account" target="_blank">สมัครสมาชิก<span>Register</span></a></li>
						<li class="navbar_container" data-aos="fade-down"><a>ดาวน์โหลดเกมส์<span class="arrow">Download Client</span></a>
						<ul class="dropdown_menu">
						<li><a href="../download" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i> Full Client</a></li>
						<li><a href="../download" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i> Mini Client</a></li>
						</ul>
						</li>
						<li class="navbar_container" data-aos="fade-down"><a>แนะนำผู้เล่นใหม่<span class="arrow">Guide Game</span></a>
						<ul class="dropdown_menu">
						<li><a href="../server_info" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i> ข้อมูลเซิร์ฟเวอร์</a></li>
						<li><a href="../woe_info" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i> ข้อมูลกิลด์วอร์</a></li>
						<li><a href="../boss_time" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i> ข้อมูลเวลาบอส</a></li>
						
						</ul>
						</li>
						<li class="navbar_container" data-aos="fade-down"><a href="../dashboard" target="_blank">ระบบสมาชิก<span>Dashboard</span></a></li>
						<li class="navbar_container" data-aos="fade-down"><a>รับไอเท็มฟรีทุกวัน<span class="arrow">Get Free Item</span></a>
						<ul class="dropdown_menu">
						<li><a href="../vote_server" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i> โหวตเซิร์ฟเวอร์</a></li>
						<li><a href="../share_facebook" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i> แชร์รับไอเท็มฟรี</a></li>
						</ul>
						</li>
						<li class="navbar_container" data-aos="fade-down"><a>เติมเงินเกมส์ที่นี้<span class="arrow">Refill Cash</span></a>
						<ul class="dropdown_menu">
						<li><a href="../refill" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i> True Money</a></li>
						<li><a href="../refill" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i> True Wallet</a></li>
						</ul>
						</li>
                        <li class="navbar_container" data-aos="fade-down"><a href="<? echo $link_group; ?>" target="_blank">กลุ่มซื้อ-ขาย<span>Social Group</span></a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
</div>
<div id="preloader"></div>
<div id="particles-js"></div>
<div class="wrapper">
	<div class="change"></div>
</div>
<div class="header_table">
	<div class="header_img">
		<div class="header_logo"></div>
	</div>
</div>
<div class="header_main">
	<div class="container">
<!----------------------------------------------------------------- Start Text -------------------------------------------------------------> 
		<div class="ui tall stacked segments">
		  <div class="ui segment">
			<div class="ui big breadcrumb">
			  <a href="./" class="section">Home</a>
			  <div class="divider"> / </div>
			  <div class="active section">Dashboard Member</div>
			</div>
			<div class="pull-right date-right">
				<i class="far fa-clock"></i> สร้างเมื่อ : <time class="timeago" datetime="2019-10-17 17:09:00" title="พฤหัส,17 ตุลาคม 2562 17.09"></time> 
				<a href="<? echo $link_fanpage; ?>" target="_blank"><i class="fab fa-facebook-square fa-lg" style="color:#5555ff;padding-left:1em"></i></a>
			</div>
		  </div>
		  <div class="ui segment">
			<div class="main-header">
				<span>Dashboard Member</span>
				<p style="font-size:12px;font-weight: normal;">เข้าสู่ระบบสมาชิก</p>
			</div>
<?php
if( ( $_SESSION['user'] != null || $_SESSION['pass'] != null ) && ($member->checklogin($_SESSION['user'],$_SESSION['pass'])) ){
				echo '<div class="ui menu">
							<a href="../dashboard" class="item">
								<i class="folder open icon"></i>Dashboard
							</a>
							<a href="password" class="active item">
								<i class="gamepad icon"></i>Change Password
							</a>
							<a href="email" class="item">
								<i class="envelope icon"></i>Change Email
							</a>
							<div class="right menu">
							<a href="../logout" class="item">
								<i class="sign out alternate icon"></i>Logout
							</a>
							</div>
						</div>';	
									
				echo '<div class="ui stacked segments">
							  <div class="ui segment">
								<h2 class="ui header">
								  <i class="pencil alternate icon"></i>
								  <div class="content">
									Change Password
									<div class="sub header">เปลี่ยนรหัสผ่าน User ID : <span style="color:red;text-transform: uppercase;">',$_SESSION['user'],'</span></div>
								  </div>
								</h2>
							  </div>';
if($_POST['submit_pass']){
		$ok = $member->changepass($member->aidonweb($_SESSION['user']),$_POST['passold'],$_POST['passnew1'],$_POST['passnew2'],$_POST['passold1']);
			if($ok){
				echo ''.$ok.'';
			}
	}							  
							 echo '<form class="ui form segment" method="post">
								  <div class="field">
									<label>Username / ID</label>
									<div class="ui disabled input">
										<input type="text" value="',$_SESSION['user'],'">
									</div>
								  </div>
								  <div class="two fields">
									<div class="field">
									  <label>Current Password</label>
									  <input type="password" name="passold" placeholder="รหัสผ่านปัจจุบัน">
									</div>
									<div class="field">
									  <label>Current Password Confirm</label>
									  <input type="password" name="passold1" placeholder="ยืนยันรหัสผ่านปัจจุบัน">
									</div>
								  </div>
								  <div class="two fields">
									<div class="field">
									  <label>New Password</label>
									  <input type="password" name="passnew1" placeholder="รหัสผ่านใหม่">
									</div>
									<div class="field">
									  <label>New Password Confirm</label>
									  <input type="password" name="passnew2" placeholder="ยืนยันรหัสผ่านใหม่">
									</div>
								  </div>
								  <button value="submit_pass" name="submit_pass" class="ui green button" type="submit">Save</button>
								</form>
							  <div class="ui segment">
								<p style="font-size:12px;color:gray"><i class="question icon"></i> พบปัญหาการใช้งาน โปรดติดต่อแจ้งทีมงาน <span style="color:red">Live Chat หรือ Facebook Fanpage</span> ได้ตลอด 24 ชั่วโมง</p>
							  </div>
							</div>
				';
	}
	else
	{	
		if($_POST['login']){
				if( !empty($_POST['user']) && !empty($_POST['pass']) ){
					$ok = $member->mem_login($_POST['user'],$_POST['pass']);
						if($ok){
							echo '<script type="text/javascript">';
							echo 'setTimeout(function () {';
							echo 'swal("การเข้าสู่ระบบสำเร็จ","ยินดีต้อนรับเข้าสู่ระบบสมาชิก","success").then( function(val) {';
							echo 'if (val == true) window.location.href = \'../dashboard\';';
							echo '});';
							echo '}, 200);  </script>';
						}else{
							echo '<script type="text/javascript">';
							echo 'setTimeout(function () {';
							echo 'swal("การเข้าสู่ระบบไม่สำเร็จ","Username / Passowrd ของคุณอาจไม่ถูกต้อง","error").then( function(val) {';
							echo 'if (val == true) window.location.href = \'../dashboard\';';
							echo '});';
							echo '}, 200);</script>';
						}
						}else{
							echo '<script type="text/javascript">';
							echo 'setTimeout(function () {';
							echo 'swal("การเข้าสู่ระบบไม่สำเร็จ","กรุณาระบุข้อมูลให้ชัดเจนมากกว่านี้ !","error").then( function(val) {';
							echo 'if (val == true) window.location.href = \'../dashboard\';';
							echo '});';
							echo '}, 200);</script>';
						}
			}
				echo '<div class="ui attached  tiny message">
							  <div class="header">
								Member Login
							  </div>
							  <p>เข้าสู่ระบบสมาชิก</p>
							</div>
							<form class="ui form attached fluid segment" method="post">
							  <div class="field">
								<label>Username / ID</label>
								<input type="text" name="user" placeholder="ไอดีเกมส์ของคุณ" style="letter-spacing:0.1em" autofocus required>
							  </div>
							  <div class="field">
								<label>Password</label>
								<input type="password" placeholder="รหัสผ่านของคุณ" name="pass" style="letter-spacing:0.1em" autofocus required>
							  </div>
							  <button class="ui green submit button" type="submit" value="submit" name="login"><i class="sign in alternate icon"></i> เข้าสู่ระบบ</button>
							  <button class="ui button" type="reset"><i class="eraser icon"></i> ยกเลิก</button>
							</form>
				';			
}					
?>		
		  </div>
		</div>
<!----------------------------------------------------------------- End Text ------------------------------------------------------------->
	</div>
</div>
<div class="alice_box">
	<div class="alice_row">
		<a href="<? echo $link_fanpage; ?>" target="_blank" class="btn_body"></a>
		<a href="<? echo $link_fanpage; ?>" target="_blank" class="btn_contact"></a>
	</div>
</div>
<div class="page_footer">
	<div class="page_main_footer">
		<div class="footer_container">
			<span>© Copyright 2021,Volcano Ragnarok Online</span>
			<span>Designed By : <a style="color:#ffe000;" href="https://www.eddga-studio.com" target="_blank">Eggda-Studio.com</a> and Volcano-RO All Rights Reserved</span>
		</div>
	</div>
</div>
<!-- ==================================================================== -->
<?php
	/* Script Js By Eddga-Studio.com -->*/
	/* ห้ามแก้ไขข้อมูลต่างๆ ถ้าไม่รู้ค่าของมันจริง */
?>
<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
<script type="text/javascript" src="../assets/js/semantic.min.js"></script>
<script type="text/javascript" src="../assets/js/sweetalert2.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../assets/js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="../assets/js/jquery.countup.js"></script>
<script type="text/javascript" src="../assets/js/jquery.timeago.min.js"></script>
<script type="text/javascript" src="../assets/js/icheck.min.js"></script>
<script type="text/javascript" src="../assets/js/jquery.aos.js"></script>
<script type="text/javascript" src="../assets/js/wow.min.js"></script>
<script type="text/javascript" src="../assets/js/particles/particles.min.js"></script>
<script type="text/javascript" src="../assets/js/particles/page.script.js"></script>
<script type="text/javascript" src="../assets/js/eggda-studio.min.js"></script>
<?php
	/* ห้ามแก้ไขข้อมูลต่างๆ ถ้าไม่รู้ค่าของมันจริง */
	/* Script Js By Eddga-Studio.com -->*/
?>
</body>
</html>
