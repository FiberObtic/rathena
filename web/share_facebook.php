<?php
	/* Web Design and Script By https://www.eddga-studio.com */
	/* ห้ามแก้ไขข้อมูลต่างๆ ถ้าไม่รู้ค่าของมันจริง */
	session_start();
	header("content-type: text/html; charset=UTF-8");
	include('system/api_status.php');
	include('system/config_eddga_b3eo2c84w.php');
	include('system/setting_dashboard.php');
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
<link rel="shortcut icon" href="images/eddga_studio.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="assets/css/semantic.min.css" />
<link rel="stylesheet" type="text/css" href="assets/css/sweetalert2.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/ionicons.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/aos.css">
<link rel="stylesheet" type="text/css" href="assets/css/eddga-studio_api.css">
<style>
h4, .h4{margin-top: -5px;margin-bottom: 15px;}
h3, .h3{margin-top: 20px;margin-bottom: 15px;font-size: 18px}
.btn-share {color: #fff;background-color: #2e74f3;border-color: #2e74f3;-webkit-text-shadow: 0 1px 0 rgba(0, 0, 0, 0.25);text-shadow: 0 1px 0 rgba(0, 0, 0, 0.25);-webkit-transition: all .5s ease-in-out;-moz-transition: all .5s ease-in-out;-o-transition: all .5s ease-in-out;-ms-transition: all .5s ease-in-out;transition: all .5s ease-in-out;}
.btn-share:hover {color: #fff;background-color: #518fff;border-color: #518fff;-webkit-box-shadow: inset 0 -3px 0 rgba(0, 0, 0, 0.20);box-shadow: inset 0 -3px 0 rgba(0, 0, 0, 0.20);-webkit-transition: all .5s ease-in-out;-moz-transition: all .5s ease-in-out;-o-transition: all .5s ease-in-out;-ms-transition: all .5s ease-in-out;transition: all .5s ease-in-out;}
.btn-share:focus {color: #fff;background-color: #1f6eff;border-color: #1f6eff;-webkit-box-shadow: inset 0 0 15px rgba(255, 255, 255, 0.40);box-shadow: inset 0 0 15px rgba(255, 255, 255, 0.40);outline: 0 !important;}
.btn-share:active {color: #fff;background-color: #1f6eff;border-color: #1f6eff;-webkit-box-shadow: inset 0 0 15px rgba(255, 255, 255, 0.40);box-shadow: inset 0 0 15px rgba(255, 255, 255, 0.40);outline: 0 !important;}
</style>
</head>

<body>
<div class="navbar_menu">
		<div class="navbar_menu_bg">
			<div class="container">
				<div class="row">
					<nav>
						<ul>
						<li class="navbar_container" data-aos="fade-down"><a href="./">หน้าหลัก<span>Home</span></a></li>
						<li class="navbar_container" data-aos="fade-down"><a href="create_account" target="_blank">สมัครสมาชิก<span>Register</span></a></li>
						<li class="navbar_container" data-aos="fade-down"><a>ดาวน์โหลดเกมส์<span class="arrow">Download Client</span></a>
						<ul class="dropdown_menu">
						<li><a href="download" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i> Full Client</a></li>
						<li><a href="download" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i> Mini Client</a></li>
						</ul>
						</li>
						<li class="navbar_container" data-aos="fade-down"><a>แนะนำผู้เล่นใหม่<span class="arrow">Guide Game</span></a>
						<ul class="dropdown_menu">
						<li><a href="server_info" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i> ข้อมูลเซิร์ฟเวอร์</a></li>
						<li><a href="woe_info" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i> ข้อมูลกิลด์วอร์</a></li>
						<li><a href="boss_time" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i> ข้อมูลเวลาบอส</a></li>
						
						</ul>
						</li>
						<li class="navbar_container" data-aos="fade-down"><a href="dashboard" target="_blank">ระบบสมาชิก<span>Dashboard</span></a></li>
						<li class="navbar_container" data-aos="fade-down"><a>รับไอเท็มฟรีทุกวัน<span class="arrow">Get Free Item</span></a>
						<ul class="dropdown_menu">
						<li><a href="vote_server" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i> โหวตเซิร์ฟเวอร์</a></li>
						<li><a href="share_facebook" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i> แชร์รับไอเท็มฟรี</a></li>
						</ul>
						</li>
						<li class="navbar_container" data-aos="fade-down"><a>เติมเงินเกมส์ที่นี้<span class="arrow">Refill Cash</span></a>
						<ul class="dropdown_menu">
						<li><a href="refill" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i> True Money</a></li>
						<li><a href="refill" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i> True Wallet</a></li>
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
			  <a class="section">Home</a>
			  <div class="divider"> / </div>
			  <div class="active section"> Share & Like</div>
			</div>
			<div class="pull-right date-right"><i class="far fa-clock"></i> สร้างเมื่อ : <time class="timeago" datetime="2019-07-11 17:09:00" title="พฤหัส,11 กรกฏาคม 2562 17.09"></time> <a href="<? echo $link_fanpage; ?>" target="_blank"><i class="fab fa-facebook-square fa-lg" style="color:#5555ff;padding-left:1em"></i></a></div>
		  </div>
		  <div class="ui segment">
			<div class="main-header">
				<span>Event Share Facebook</span>
				<p style="font-size:12px;font-weight: normal;">กิจกรรมแชร์สะสมแต้ม แลกของรางวัลหลากหลาย</p>
			</div>
			<!-- Text Event -->
			<div class="box-sv box-green" style="margin-top:30px">
				<div class="box-sv-body">
					<div class="box-text-haeder"><i class="fas fa-eye fa-flip-horizontal fa-lg"></i> Description <small>รายละเอียดกิจกรรม</small></div>
					<div class="line-box"></div>
					<ul class="list-unstyled">
					<li class="list-text">เงื่อนไขการเข้าร่วมกิจกรรม</li>
					<li class="list-text">1. กดแชร์เซิร์ฟเวอร์ ได้ทุก 24 ชั่วโมง กดแชร์ 1 ครั้ง จะได้รับ 50 แต้ม กดสะสมแต้มแชร์ มาแลกของรางวัล</li>
					<li class="list-text">2. ตัดแต้มอันดับ แจกรางวัลทุก 2 อาทิตย์ แจกแคช 1,000 แคช ครั้งแรก <strong>15 มีนาคม 2562 เวลา 23:59 น.</strong></li>
					<li class="list-text">3. อันดับ 1. 500 แคช อันดับ 2. 300 แคช อันดับ 3. 200 แคช มาช่วยกันแชร์ ได้ทั้งของรางวัล ได้ทั้งแคช</li>
					</ul>
				</div>
			</div>
			<div class="box-sv box-green" style="margin-top:30px">
				<div class="box-sv-body">
					<div class="box-text-haeder"><i class="fas fa-gamepad fa-lg"></i> Duckapp <small>เข้าสู่ระบบ App Share Facebook</small></div>
					<div class="line-box"></div>
					<ul class="list-unstyled">
					<li><a href="https://www.duckapp.net" onClick="window.open(this.href, 'share-facebook','left=50,top=50,width=800,height=600,toolbar=1,resizable=0'); return false;" class="btn btn-share btn-lg btn-block"><i class="fas fa-link"></i> เข้าร่วมกิจกรรม Share Facebook ที่นี้</a></li>
					</ul>
				</div>
			</div>
			<div class="box-sv box-green" style="margin-top:30px">
				<div class="box-sv-body">
					<div class="box-text-haeder"><i class="fas fa-gift fa-lg"></i> Reward Share Facebook <small>ของรางวัลกิจกรรม</small></div>
					<div class="line-box"></div>
					<ul class="list-unstyled">
					<li class="list-text">แก้ไขรายละเอียดได้ที่ share_facebook.php</li>
					<li class="list-text">แก้ไขรายละเอียดได้ที่ share_facebook.php</li>
					<li class="list-text">แก้ไขรายละเอียดได้ที่ share_facebook.php</li>
					<li class="list-text">แก้ไขรายละเอียดได้ที่ share_facebook.php</li>
					</ul>
				</div>
			</div>
		  </div>
		  <div class="ui segment">
			<a class="ui tag label">กิจกรรม</a>
			<a class="ui tag label">แชร์</a>
			<a class="ui tag label">ไลท์</a>
			<a class="ui tag label">รับไอเท็ม</a>
			<a class="ui tag label">Event</a>
			<a class="ui tag label">Share</a>
			<a class="ui tag label">Facebook</a>
			<a class="ui tag label">Get Free Item</a>
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
			<span>© Copyright 2023,Volcano Ragnarok Online</span>
			<span>Designed By : <a style="color:#ffe000;" href="https://www.oliangstudio.com" target="_blank">OliangStudio.com</a> and Volcano-Ro All Rights Reserved</span>
		</div>
	</div>
</div>
<!-- ==================================================================== -->
<?php
	/* Script Js By Eddga-Studio.com -->*/
	/* ห้ามแก้ไขข้อมูลต่างๆ ถ้าไม่รู้ค่าของมันจริง */
?>
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.countup.js"></script>
<script type="text/javascript" src="assets/js/jquery.timeago.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.aos.js"></script>
<script type="text/javascript" src="assets/js/wow.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.queryloader2.min.js"></script>
<script type="text/javascript" src="assets/js/particles/particles.min.js"></script>
<script type="text/javascript" src="assets/js/particles/main.script.js"></script>
<script type="text/javascript" src="assets/js/semantic.min.js"></script>
<script type="text/javascript" src="assets/js/sweetalert2.min.js"></script>
<script type="text/javascript" src="assets/js/eggda-studio.min.js"></script>
<script>
$(document).ready(function() {
	$('.ui.checkbox').checkbox();
});
</script>
<?php
	/* Script Js By Eddga-Studio.com -->*/
	/* ห้ามแก้ไขข้อมูลต่างๆ ถ้าไม่รู้ค่าของมันจริง */
?>
</body>
</html>