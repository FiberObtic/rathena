<?
	/* Web Design and Script By https://www.eddga-studio.com */
	/* ห้ามแก้ไขข้อมูลต่างๆ ถ้าไม่รู้ค่าของมันจริง */
	session_start();
	header("content-type: text/html; charset=UTF-8");
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
			  <div class="active section">Woe Informantion</div>
			</div>
			<div class="pull-right date-right"><i class="far fa-clock"></i> สร้างเมื่อ : <time class="timeago" datetime="2019-07-11 17:09:00" title="พฤหัส,11 กรกฏาคม 2562 17.09"></time> <a href="<? echo $link_fanpage; ?>" target="_blank"><i class="fab fa-facebook-square fa-lg" style="color:#5555ff;padding-left:1em"></i></a></div>
		  </div>
		  <div class="ui segment">
			<div class="main-header">
				<span>Woe Informantion</span>
				<p style="font-size:12px;font-weight: normal;">ข้อมูลกิลด์วอร์</p>
			</div>
			<div class="row">
							<div class="col-lg-6 col-sm-6">
								<div class="box-sv box-green" style="height:280px;">
									<div class="box-sv-body">
										<div class="box-text-haeder"><i class="fa fa-shield"></i> Guild War Info <small>ข้อมูลกิลด์วอร์</small></div>
										<div class="line-box"></div>
										<ul class="list-unstyled">
											<li class="list-haeder">Guild War Info</li>
											<li class="list-text"><img src="images/arrow_small.png"> วันกิลด์วอร์ : <span class="font-org">วันอังคาร / วันเสาร์</span>  <span class="font-org"></span>  <span class="font-org"></span></li>
											<li class="list-text"><img src="images/arrow_small.png"> เวลากิลด์วอร์ : <span class="font-org">21.00</span> - <span class="font-org">22.00</span> น.</li>
											<li class="list-text"><img src="images/arrow_small.png"> เปิดบ้านกิลด์ : <span class="font-org">-</span> หลัง (ตามจำนวนกิลด์)</li>
											<li class="list-text"><img src="images/arrow_small.png"> สมาชิกกิลด์ : <span class="font-org">26</span> คน</li>
											<li class="list-text"><img src="images/arrow_small.png"> จับพันธมิตร : <span class="font-org">ไม่ได้</span></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-6">
								<div class="box-sv box-green" style="height:280px;">
									<div class="box-sv-body">
										<div class="box-text-haeder"><i class="fas fa-trophy"></i> Guild War Award <small>รางวัลกิลด์วอร์</small></div>
										<div class="line-box"></div>
										<ul class="list-unstyled">
											<li class="list-haeder">Guild War Award</li>
										
										    <li class="list-text"><img src="images/arrow_small.png"> ITEM 1 : Zeny จำนวน <span class="font-org">5,000,000</span> zeny</li>
										    <li class="list-text"><img src="images/arrow_small.png"> ITEM 2 : Cash Points จำนวน <span class="font-org">20,000</span> cash</li>
										    <li class="list-text"><img src="images/arrow_small.png"> ITEM 3 : Poison Bottle จำนวน <span class="font-org">20</span> ea</li>
											<li class="list-text"><img src="images/arrow_small.png"> ITEM 4 : Fire Bottle และ  Acid Bottle จำนวน <span class="font-org">50</span> ea</li>
											<li class="list-text"><img src="images/arrow_small.png"> ITEM 5 : Elite Siege Supply Box จำนวน <span class="font-org">5</span> ea</li>
											<li class="list-text"><img src="images/arrow_small.png"><span class="font-org">รางวัลเงินสด (เงินรางวัลกิลด์วอร์ อาจมีการเปลี่ยนแปลงตามจำนวนกิลด์ โดยทีมงานไม่ต้องแจ้งให้ทราบล่วงหน้า!!)</span></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-sm-12">
								<div class="box-sv box-green">
									<div class="box-sv-body">
										<div class="box-text-haeder"><i class="fas fa-calendar"></i> ตารางกิลด์วอร์ <small> วัน/เดือน/ปี</small></div>
										<div class="line-box"></div>
										<table class="table table-bordered">
											<thead>
											<tr>
											<th class="active text-center" style="width:100px; height:25px; font-size:12px;">วัน</th>
											<th class="active text-center" style="width:100px; height:25px; font-size:12px;">Aldebaran - Nuernberg<br>(aldeg_cas03)</th>
											<th class="active text-center" style="width:100px; height:25px; font-size:12px;">Geffen - Bergel<br>(gefg_cas04)</th>
											<th class="active text-center" style="width:100px; height:25px; font-size:12px;">Payon - Bright Arbor<br>(payg_cas01)</th>
											<th class="active text-center" style="width:100px; height:25px; font-size:12px;">Prontera - Kriemhild<br>(prtg_cas01)</th>
											</tr>
											</thead>
											<tbody>
											<tr>
											<td class="text-center">-</td>
											<td class="text-center">-</td>
											<td class="text-center">-</td>
											<td class="text-center">-</td>
											<td class="text-center">-</td>
											</tr>
											<tr>
											<td class="text-center">-</td>
											<td class="text-center">-</td>
											<td class="text-center">-</td>
											<td class="text-center">-</td>
											<td class="text-center">-</td>
											</tr>
											<tr>
											<td class="text-center">-</td>
											<td class="text-center">-</td>
											<td class="text-center">-</td>
											<td class="text-center">-</td>
											<td class="text-center">-</td>
											</tr>
											<tr>
											<td class="text-center">-</td>
											<td class="text-center">-</td>
											<td class="text-center">-</td>
											<td class="text-center">-</td>
											<td class="text-center">-</td>
											</tr>
											<tr>
											<td class="text-center">-</td>
											<td class="text-center">-</td>
											<td class="text-center">-</td>
											<td class="text-center">-</td>
											<td class="text-center">-</td>
											</tr>
											<tr>
											<td class="text-center">-</td>
											<td class="text-center">-</td>
											<td class="text-center">-</td>
											<td class="text-center">-</td>
											<td class="text-center">-</td>
											</tr>
											<tr>
											<td class="text-center">-</td>
											<td class="text-center">-</td>
											<td class="text-center">-</td>
											<td class="text-center">-</td>
											<td class="text-center">-</td>
											</tr>
											<tr>
											<tr>
											<td class="text-center">-</td>
											<td class="text-center">-</td>
											<td class="text-center">-</td>
											<td class="text-center">-</td>
											<td class="text-center">-</td>
											</tr>
											<tr>
											<td class="text-center">-</td>
											<td class="text-center">-</td>
											<td class="text-center">-</td>
											<td class="text-center">-</td>
											<td class="text-center">-</td>

											</tr>
											</tbody>
										</table>
									<div class="eddga-alert eddga-alert-purple"><i class="fa fa-info" aria-hidden="true"></i> คำแนะนำ : ตารางการแจกเงินรางวัลกิลด์วอร์ อาจมีการเปลี่ยนแปลงตามจำนวนกิลด์ โดยทีมงานไม่ต้องแจ้งให้ทราบล่วงหน้า
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-sm-12">
						<div class="box-sv box-green">
							<div class="box-sv-body">
								<div class="box-text-haeder"><i class="fas fa-ban"></i> Rules Woe <small>กติกากิลด์วอร์</small></div>
								<div class="line-box"></div>
								<ul class="list-unstyled">
									<li class="list-text">1. เวลากิลด์วอร์ กิลด์หลัก (26 คน) และกิลด์สาขา ห้ามใช้รูปกิลด์เหมือนกัน ต้องแบ่งแยกรูปกิลด์ให้ชัดเจน และห้ามเปลี่ยนรูปกิลด์ระหว่างเวลากิลด์วอร์
									<p><span class="font-org">บทลงโทษ</span> หากได้บ้านงดแจกรางวัล นำเงินรางวัลไปหารแจกกับกิลด์มาวอร์</p></li>
									<li class="list-text">2. กิลด์สาขา <strong>ห้ามกันบ้านอยู่ในชั้นเดียวกันกับกิลด์หลัก</strong> (แต่ช่วยบุกบ้านได้) และกิลด์พันธมิตรทางใจ ไม่สามารถช่วยกันบ้านได้ ไม่ว่าจะชั้นไหนของบ้าน
									<p><span class="font-org">บทลงโทษ</span> หากได้บ้านงดแจกรางวัล นำเงินรางวัลไปหารแจกกับกิลด์มาวอร์</p></li>
									<li class="list-text">3. จากกติกาข้อ <strong>2.</strong> ส่งผลให้ไม่สามารถยิง Paladin ได้อยู่แล้ว หากมีการกระทำผิดกติกา กิลด์บุกบ้าน สามารถส่งหลักฐานกับทีมงาน เช่น ภาพถ่าย ฯ
									<p><span class="font-org">บทลงโทษ</span> หากได้บ้านงดแจกรางวัล นำเงินรางวัลไปหารแจกกับกิลด์มาวอร์</p></li>
									<li class="list-text">4. ก่อนจะหมดเวลาวอร์ 15 นาทีสุดท้าย (เวลาเปิดวาร์ปชั้นห้องหิน) ห้ามมีการตีสลับหินโดยเด็ดขาด หากมีการร้องเรียน บ้านหลังนั้นงดแจกเงินรางวัล 
									<p><span class="font-org">บทลงโทษ</span> หากได้บ้านงดแจกรางวัล นำเงินรางวัลไปหารแจกกับกิลด์มาวอร์</p></li>
									<li class="list-text">5. กิลด์หลัก และกิลด์สาขา สามารถตีบ้านแจกรางวัลได้เพียง 1 หลัง (แต่ตีบ้าน Special เพิ่มได้) และหากตีบ้านแจกรางวัล 2 หลัง จะไม่ได้รางวัลเลย
									<p><span class="font-org">บทลงโทษ</span> หากได้บ้านงดแจกรางวัล นำเงินรางวัลไปหารแจกกับกิลด์มาวอร์</p></li>
									<li class="list-text">6. กิลด์ที่สามารถตีบ้านเอาเงินรางวัล จะต้องมีสมาชิกกิลด์ออนไลน์เวลากิลด์วอร์มากกว่า 16 คน แล้วทั้ง 16 คน ต้องมาเข้าร่วมสงครามกิลด์วอร์ด้วย
									<p><span class="font-org">บทลงโทษ</span> หากได้บ้านงดแจกรางวัล นำเงินรางวัลไปหารแจกกับกิลด์มาวอร์</p></li>
							
								</ul>
							</div>
						</div>
						<div class="box-sv box-green">
							<div class="box-sv-body">
								<div class="box-text-haeder"><i class="fas fa-ban"></i> Rules Alliance <small>กติกากิลด์พันธมิตร</small></div>
								<div class="line-box"></div>
								<ul class="list-unstyled">
									<li class="list-text">1. การใช้ชื่อกิลด์ รูปกิลด์แตกต่างกัน เพื่ออ้างการตีสลับหิน
									<p>
									<img src="images/arrow_small.png"> 1.1 ตัวอย่าง กิลด์ A และ กิลด์ B เป็นพันธมิตรกัน (รวมทั้งพันธมิตรทางใจ)<br>
									<img src="images/arrow_small.png"> 1.2 กิลด์ A ครอบครองบ้านอยู่ แล้วกำลังเสียเปรียบ กิลด์ B ก็เข้ามาตีบ้าน<br>
									<img src="images/arrow_small.png"> 1.3 ทีมงานจะตัดสิทธิ์รางวัลทุกรางวัล ของกิลด์ A และ กิลด์ B กิลด์วอร์นั้น<br>
									<img src="images/arrow_small.png"> 1.4 การตัดสินของทีมงาน จะตรวจสอบด้วยสายตา และข้อมูลการเล่นตัดสิน
									</p>
									</li>
									<li class="list-text">2. กิลด์พันธมิตร กิลด์ A และกิลด์ B (ไม่ใช่สาขาของกิลด์)
									<p>
									<img src="images/arrow_small.png"> 2.1 กิลด์ A ครอบครองบ้านก่อน แล้วมีการทิ้งบ้าน ให้กิลด์ B เข้ามาตีบ้าน<br>
									<img src="images/arrow_small.png"> 2.2 โดยกิลด์ B ไม่ได้อยู่ในบ้านหลังนั้นมาก่อน สามารถทำได้ ถือว่าทิ้งบ้าน<br>
									<img src="images/arrow_small.png"> 2.3 แต่หากกิลด์ A กลับมาตีบ้านเดิม กิลด์ B ปล่อยให้ตี จะถือว่าสลับบ้าน<br>
									<img src="images/arrow_small.png"> 2.4 การตัดสินของทีมงาน ตรวจสอบด้วยสายตา และข้อมูลการเล่นตัดสิน
									</p>
									</li>
									<li class="list-text">3. กิลด์สาขากันห้องหิน และกิลด์หลักกันหน้าห้องหิน
									<p>
									<img src="images/arrow_small.png"> 3.1 หลังจากกิลด์หลักโดนบุกแตก แล้วต้องการจะเรียกเข้าไปกันชั้นห้องหิน<br>
									<img src="images/arrow_small.png"> 3.2 กิลด์สาขาห้ามทำอะไรเลย ต้องกด Butterfly Wing กลับบ้านในทันที<br>
									<img src="images/arrow_small.png"> 3.3 หากกิลด์สาขามีการกด Skill หรือ ทำ Damage จะถือว่าผิดกฏข้อ 2.<br>
									<img src="images/arrow_small.png"> 3.4 การตัดสินของทีมงาน ตรวจสอบด้วยสายตา และข้อมูลการเล่นตัดสิน
									</p>
									</li>
								</ul>
							</div>
						</div>
					</div>		
					</div>
		  </div>
		  <div class="ui segment">
			<a class="ui tag label">ข้อมูลกิลด์</a>
			<a class="ui tag label">ตารางกิลด์วอร์</a>
			<a class="ui tag label">กฏระเบียบ</a>
			<a class="ui tag label">ข้อบังคับ</a>
			<a class="ui tag label">แจกเงินรางวัล</a>
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