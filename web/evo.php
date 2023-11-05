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
			  <div class="active section">Pet Evolution</div>
			</div>
			<div class="pull-right date-right"><i class="far fa-clock"></i> สร้างเมื่อ : <time class="timeago" datetime="2018-12-13 13:20:00" title="พฤหัส,13 ธันวาคม 2561 13.20"></time></div>
		  </div>
		  <div class="ui segment">
			<div class="main-header">
				<span>ข้อมูลสัตว์เลี้ยง <small>Pet Evolution</small></span>
			</div>
			<div class="box-sv box-green">
						 <div class="box-sv-body">
							<div class="box-text-haeder"><i class="fa fa-eye fa-flip-horizontal fa-lg" aria-hidden="true"></i> Description <small>รายละเอียด</small></div>
							<div class="line-box"></div>
								<ul class="list-unstyled">
					 <li class="list-haeder">รายละเอียด</li>
					  <li class="list-text">1. หากต้องการเลี้ยงสัตว์ จะต้องหาของและเงิน มาแลกไข่กับ Npc โดยจะสุ่มไข่จาก 3 สายพันธุ์</li>
					  <li class="list-text">2. ความสามารถของสัตว์จะแสดงผล เมื่อความสัมพันธ์อยู่ระดับ "สนิทสนม" กับเจ้าของแล้วเท่านั้น</li>
					   <li class="list-text">3. สัตว์มีโอกาสหนีหรือหายไป กรณีไม่ให้อาหาร ให้อาหารไม่ถูกระดับความหิว</li>
						<hr>
					 <li class="list-haeder">รายการของ</li>
					<li class="list-text"><img src="images/item/Cash Coin.gif"> Cash Coin 100 อัน</li>
					<li class="list-text"><img src="images/item/Poring Coin.gif"> Poring Coin 10000 อัน</li>
					<li class="list-text"><img src="images/item/Bonus Coin.gif"> Bonus Coin 3 อัน</li>
					<li class="list-text">Zeny 1,000,000</li>
								</ul>
							</div>
					</div>
					<div class="box-sv box-green">
						 <div class="box-sv-body">
							<div class="box-text-haeder"><i class="fas fa-tags"></i> สายพันธุ์ ที่ 1</div>
							<div class="line-box"></div>
								<img src="images/Fire.gif" class="img-thumbnail">
							<table class="table">
								<thead>
									<tr>
										<th style="width:20%">
										<h4><span style="color:#589aff;font-size: 14px;font-weight: 300;">Pet Evolution</span></h4>
										</th>
										<th style="width:20%">
										<h4><span style="color:#589aff;font-size: 14px;font-weight: 300;">Skill Buff</span></h4>
										</th>
										<th style="width:20%">
										<h4><span style="color:#589aff;font-size: 14px;font-weight: 300;">Skill Atk</span></h4>
										</th>
										<th style="width:40%">
										<h4><span style="color:#589aff;font-size: 14px;font-weight: 300;">Status</span></h4>
										</th>
									</tr>
								</thead>
								<tbody>
							<tr>
								<td>Imp</td>
								<td>-</td>
								<td>-</td>
								<td>Max Hp +10%, Hit +40</td>
							</tr>
							<tr>
								<td>Ifrit</td>
								<td>-</td>
								<td>-</td>
								<td>Aspd +5%, โจมตีทุกขนาดแรง 9%,  Max Hp +7%</td>
							</tr>
							<tr>
								<td>Firefox</td>
								<td>-</td>
								<td>-</td>
								<td>Atk +40, Critical, +15, Max Hp +500</td>
							</tr>
							<tr>
								<td>Kasa</td>
								<td>-</td>
								<td>-</td>
								<td>Max Hp +10%, Flee +40</td>
							</tr>
							<tr>
								<td>Sarah</td>
								<td>-</td>
								<td>-</td>
								<td>Critical +25, คริติคอลแรงขึ้น +15%, Aspd +10%</td>
							</tr>
						</tbody>
								</table>
							</div>
					</div>
					<div class="box-sv box-green">
						 <div class="box-sv-body">
							<div class="box-text-haeder"><i class="fas fa-tags"></i> สายพันธุ์ ที่ 2</div>
							<div class="line-box"></div>
								<img src="images/Angel.gif" class="img-thumbnail">
							<table class="table">
								<thead>
									<tr>
										<th style="width:20%">
										<h4><span style="color:#589aff;font-size: 14px;font-weight: 300;">Pet Evolution</span></h4>
										</th>
										<th style="width:20%">
										<h4><span style="color:#589aff;font-size: 14px;font-weight: 300;">Skill Buff</span></h4>
										</th>
										<th style="width:20%">
										<h4><span style="color:#589aff;font-size: 14px;font-weight: 300;">Skill Atk</span></h4>
										</th>
										<th style="width:40%">
										<h4><span style="color:#589aff;font-size: 14px;font-weight: 300;">Status</span></h4>
										</th>
									</tr>
								</thead>
								<tbody>
								<tr>
									<td>Retribution</td>
									<td>-</td>
									<td>-</td>
									<td>Dex +5, โจมตีระยะไกลแรงขึ้น 12%, Aspd +5%</td>
								</tr>
								<tr>
									<td>Despair God Morroc</td>
									<td>-</td>
									<td>-</td>
									<td>Str +10, Atk +10%, Aspd +5%</td>
								</tr>
								<tr>
									<td>Reborn Demigod</td>
									<td>-</td>
									<td>-</td>
									<td>All Status +3, โจมตีมนุษย์แรงขึ้น 10%, Aspd +5%</td>
								</tr>
								<tr>
									<td>Thanatos Odium</td>
									<td>-</td>
									<td>-</td>
									<td>Agi +5, Atk +40, Hit +20</td>
								</tr>
								<tr>
									<td>Observation</td>
									<td>-</td>
									<td>-</td>
									<td>All Status +2, โจมตีทุกขนาดแรง 7%, ลด Def เป้าหมาย 5%</td>
								</tr>
							</tbody>
								</table>
							</div>
					</div>
					<div class="box-sv box-green">
						 <div class="box-sv-body">
							<div class="box-text-haeder"><i class="fas fa-tags"></i> สายพันธุ์ ที่ 3</div>
							<div class="line-box"></div>
								<img src="images/Demon.gif" class="img-thumbnail">
							<table class="table">
								<thead>
									<tr>
										<th style="width:20%">
										<h4><span style="color:#589aff;font-size: 14px;font-weight: 300;">Pet Evolution</span></h4>
										</th>
										<th style="width:20%">
										<h4><span style="color:#589aff;font-size: 14px;font-weight: 300;">Skill Buff</span></h4>
										</th>
										<th style="width:20%">
										<h4><span style="color:#589aff;font-size: 14px;font-weight: 300;">Skill Atk</span></h4>
										</th>
										<th style="width:40%">
										<h4><span style="color:#589aff;font-size: 14px;font-weight: 300;">Status</span></h4>
										</th>
									</tr>
								</thead>
								<tbody>
								<tr>
									<td>Piamette</td>
									<td>-</td>
									<td>-</td>
									<td>All Status +3, Matk +10%, MaxHp +7%, Aspd +4%</td>
								</tr>
								<tr>
									<td>Aliot</td>
									<td>-</td>
									<td>-</td>
									<td>Matk +9%, All Status +2, Aspd +5%</td>
								</tr>
								<tr>
									<td>Rudo</td>
									<td>-</td>
									<td>-</td>
									<td>Def +10, Mdef +10, Max Hp +10%</td>
								</tr>
								<tr>
									<td>Archdam</td>
									<td>-</td>
									<td>-</td>
									<td>All Status +3, โจมตีบอสแรงขึ้น 40%, MaxSP +12%</td>
								</tr>
								<tr>
									<td>Valkyrie Randgris</td>
									<td>-</td>
									<td>-</td>
									<td>Max Hp +5%, ป้องกันทุกธาตุ 10%</td>
								</tr>
							</tbody>
								</table>
							</div>
					</div>
					<div class="box-sv box-green">
						 <div class="box-sv-body">
							<div class="box-text-haeder"><i class="fas fa-tags"></i> สายพันธุ์ ที่ 4</div>
							<div class="line-box"></div>
								<img src="images/Undead.gif" class="img-thumbnail">
							<table class="table">
								<thead>
									<tr>
										<th style="width:20%">
										<h4><span style="color:#589aff;font-size: 14px;font-weight: 300;">Pet Evolution</span></h4>
										</th>
										<th style="width:20%">
										<h4><span style="color:#589aff;font-size: 14px;font-weight: 300;">Skill Buff</span></h4>
										</th>
										<th style="width:20%">
										<h4><span style="color:#589aff;font-size: 14px;font-weight: 300;">Skill Atk</span></h4>
										</th>
										<th style="width:40%">
										<h4><span style="color:#589aff;font-size: 14px;font-weight: 300;">Status</span></h4>
										</th>
									</tr>
								</thead>
									<tbody>
								<tr>
									<td>Drake</td>
									<td>-</td>
									<td>-</td>
									<td>Atk +60, Hit +20, Aspd +5%</td>
								</tr>
								<tr>
									<td>Dark Priest</td>
									<td>-</td>
									<td>-</td>
									<td>Matk +10%, Int +5, Dex +2</td>
								</tr>
								<tr>
									<td>Heydrich</td>
									<td>-</td>
									<td>-</td>
									<td>Flee +20, Max Hp +5%, ป้องกันทุกธาตุ 5%</td>
								</tr>
								<tr>
									<td>Fallen Bishop</td>
									<td>-</td>
									<td>-</td>
									<td>Flee +25, Hit +25, Max Hp +10%</td>
								</tr>
								<tr>
									<td>Bijou</td>
									<td>-</td>
									<td>-</td>
									<td>โจมตีทุกขนาดแรง 10%, ลด Def เป้าหมาย 10%, All status +3</td>
								</tr>
							</tbody>
								</table>
							</div>
					</div>
		  </div>
		  <div class="ui segment">
			<a class="ui tag label">สัตว์เลี้ยง</a>
			<a class="ui tag label">ข้อมูล</a>
			<a class="ui tag label">pet</a>
			<a class="ui tag label">evolution</a>
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