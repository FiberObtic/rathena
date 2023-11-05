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
				  <div class="active section"> View Page</div>
				</div>
				<div class="pull-right date-right">
					<i class="far fa-clock"></i> สร้างเมื่อ : <time class="timeago" datetime="2019-10-17 17:09:00" title="พฤหัส,17 ตุลาคม 2562 17.09"></time> 
					<a href="<? echo $link_fanpage; ?>" target="_blank"><i class="fab fa-facebook-square fa-lg" style="color:#5555ff;padding-left:1em"></i></a>
				</div>
			  </div>
			  <div class="ui segment">
				<div class="main-header">
					<span>Premium Service (VIP)</span>
					<p style="font-size:12px;font-weight: normal;">รายละเอียดกิจกรรม</p>
				</div>
				<!-- Text Event -->
				
<p>Premium Service (VIP)</p>

<p>&nbsp;</p>

<p style="text-align:center"><a href="https://cdn.pic.in.th/file/picinth/BannerF15648bee137998ec17.jpeg"><img alt="" src="https://cdn.pic.in.th/file/picinth/BannerF15648bee137998ec17.jpeg" style="height:768px; width:1024px" /></a></p>

<p>&nbsp;</p>

<p>สำหรับสมาชิกที่เป็น Premium Service (VIP) จะได้รับ Exp , Job , Drop +20% และ ได้รับบัฟอาหารเสริม Str , Agi , Vit , Int , Dex , Luk เพิ่มเติมจากปกติ&nbsp;แถมสามารถใช้คลังเก็บของ Premium 300 ช่อง เพิ่มได้</p>

<p>โดยบัฟทั้งหมดจะเพิ่มระยะเวลาเป็นอยู่ได้ครั้งละ 30 นาที ในส่วนของบัฟ Poem of Bragi และ Service For You (SP) จะเพิ่มระยะเวลาอยู่ได้ครั้งละ 15 นาที&nbsp;</p>

<p>สำหรับดันเจี้ยนพิเศษ Endless Tower (100ชั้น) สมาชิกที่เป็น Premium Service (VIP) จะได้รับ ATK , MATK +20%&nbsp;มีผลเฉพาะในดันเจี้ยน Endless Tower (100ชั้น) เท่านั้น!!</p>

<p>&nbsp;</p>

<p style="text-align:center"><a href="https://cdn.pic.in.th/file/picinth/Screenshot-2023-10-20-012034.jpeg"><img alt="" src="https://cdn.pic.in.th/file/picinth/Screenshot-2023-10-20-012034.jpeg" /></a></p>

<p>&nbsp;</p>

<p>แถมสมาชิกที่เป็น Premium Service (VIP) ยังจะได้รับไอเทมพิเศษ Premium Service Staff เมื่อกดใช้งานจะพบ &quot;Npc Premi&quot; สามารถรับบริการบัฟพิเศษเพิ่มเติมได้โดยจะได้รับ Exp , Job , Drop +20% เพิ่มเติม และ ลดบทลงโทษเมื่อตาย สามารถอยู่ได้ครั้งละ 24 ชั่วโมง</p>

<p>&nbsp;</p>

<p style="text-align:center"><a href="https://cdn.pic.in.th/file/picinth/Screenshot-2023-09-18-024558.jpeg"><img alt="" src="https://cdn.pic.in.th/file/picinth/Screenshot-2023-09-18-024558.jpeg" /></a></p>

<p>&nbsp;</p>

<p>เงื่อนไขในการ รับบริการบัฟพิเศษของ&nbsp;Premium Service Staff จำเป็นจะต้องใช้ Cash Point ในการแลกรับ</p>

<p>&nbsp;</p>

<p style="text-align:center"><a href="https://cdn.pic.in.th/file/picinth/Screenshot-2023-09-18-024706.jpeg"><img alt="" src="https://cdn.pic.in.th/file/picinth/Screenshot-2023-09-18-024706.jpeg" /></a></p>

<p style="text-align:center">&nbsp;</p>

<p style="text-align:center"><a href="https://cdn.pic.in.th/file/picinth/Screenshot-2023-10-20-015434.jpeg"><img alt="" src="https://cdn.pic.in.th/file/picinth/Screenshot-2023-10-20-015434.jpeg" /></a></p>

<p>&nbsp;</p>

<p>สมาชิกที่ต้องการสมัครเป็น Premium Service (VIP) สามารถซื้อบัตร ได้ที่ Cash Shop</p>

<p>&nbsp;</p>

<p style="text-align:center"><a href="https://cdn.pic.in.th/file/picinth/Screenshot-2023-10-20-015623.jpeg"><img alt="" src="https://cdn.pic.in.th/file/picinth/Screenshot-2023-10-20-015623.jpeg" /></a></p>

<p style="text-align:center">&nbsp;</p>

<p>เว็บหลัก :&nbsp;<a href="https://volcano-ro.co">https://volcano-ro.co</a></p>

<p>แฟนเพจ :&nbsp;<a href="https://www.facebook.com/volcano.hiclass">https://www.facebook.com/volcano.hiclass</a></p>

<p>กลุ่มซื้อขาย :&nbsp;<a href="https://www.facebook.com/groups/volcanoro.market">https://www.facebook.com/groups/volcanoro.market</a></p>




			  <div class="ui segment">
				<a class="ui tag label">รายละเอียด</a>
				<a class="ui tag label">ข่าวสาร</a>
				<a class="ui tag label">อัพเดท</a>
				<a class="ui tag label">กิจกรรม</a>
				<a class="ui tag label">ภายในเซิร์ฟเวอร์</a>
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