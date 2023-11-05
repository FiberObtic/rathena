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
			  <div class="active section">Server Informantion</div>
			</div>
			<div class="pull-right date-right"><i class="far fa-clock"></i> สร้างเมื่อ : <time class="timeago" datetime="2019-07-11 17:09:00" title="พฤหัส,11 กรกฏาคม 2562 17.09"></time> <a href="<? echo $link_fanpage; ?>" target="_blank"><i class="fab fa-facebook-square fa-lg" style="color:#5555ff;padding-left:1em"></i></a></div>
		  </div>
		  <div class="ui segment">
			<div class="main-header">
				<span>Server Informantion</span>
				<p style="font-size:12px;font-weight: normal;">ข้อมูลเซิร์ฟเวอร์ </p>
			</div>
			<div class="row">	
				<div class="col-lg-6 col-sm-6">
					<div class="box-sv box-green">
					  <div class="box-sv-body">
						<div class="box-text-haeder"><i class="fa fa-tachometer" aria-hidden="true"></i> Server Info <small>ข้อมูลเซิฟเวอร์</small></div>
						<div class="line-box"></div>
						<ul class="list-unstyled">
						  <li class="list-haeder">EXP & JOB Rate</li>
						  <li class="list-text"><img src="images/arrow_small.png"> Base Exp & Job Rate : <span class="font-org">x30 & x20 ( 80-90 เก็บเพิ่ม x2 , 90-99 เก็บเพิ่ม x3 )</span>  </li>
						  <li class="list-text"><img src="images/arrow_small.png"> Max Level : <span class="font-org">99 / 70</span></li>
						  <li class="list-text"><img src="images/arrow_small.png"> Max Status : <span class="font-org">99</span></li>
						  <li class="list-haeder">Drop Item Rate</li>
						  <li class="list-text"><img src="images/arrow_small.png"> Normal Etc : <span class="font-org">x1</span></li>
						  <li class="list-text"><img src="images/arrow_small.png"> Normal Equipment : <span class="font-org">x3</span></li>
						  <li class="list-text"><img src="images/arrow_small.png"> Normal Card : <span class="font-org">x5</span></li>
						  <li class="list-haeder">MvP Drop Item Rate</li>
						  <li class="list-text"><img src="images/arrow_small.png"> Mvp Etc : <span class="font-org">x1</span></li>
						  <li class="list-text"><img src="images/arrow_small.png"> Mvp Equipment : <span class="font-org">x1</span></li>
						  <li class="list-text"><img src="images/arrow_small.png"> Mvp Card : <span class="font-org">x1</span></li>
						</ul>
					  </div>
					</div>
				</div>
				<div class="col-lg-6 col-sm-6">
					<div class="box-sv box-green">
					  <div class="box-sv-body">
						<div class="box-text-haeder"><i class="fas fa-handshake"></i> Party Info <small>ข้อมูลปาร์ตี้</small></div>
						<div class="line-box"></div>
						<ul class="list-unstyled">
						  <li class="list-haeder">Party Rate</li>
						  <li class="list-text"><img src="images/arrow_small.png"> จำนวนเข้าร่วมปาร์ตี้สูงสุด : <span class="font-org">26</span> คน</li>
						  <li class="list-haeder">Party Share Rate</li>
						  <li class="list-text"><img src="images/arrow_small.png"> Share Party สูงสุด : <span class="font-org">15</span> เลเวล</li>
						</ul>
					  </div>
					</div>
					<div class="box-sv box-green">
					  <div class="box-sv-body">
						<div class="box-text-haeder"><i class="fa fa-users" aria-hidden="true"></i> Guild Info <small>ข้อมูลกิลด์</small></div>
						<div class="line-box"></div>
						<ul class="list-unstyled">
						  <li class="list-haeder">Guild Rate</li>
						  <li class="list-text"><img src="images/arrow_small.png"> สมาชิกกิลด์สูงสุด : <span class="font-org">26</span> คน</li>
						  <li class="list-haeder">Guild Alliance Rate</li>
						  <li class="list-text"><img src="images/arrow_small.png"> พันธมิตร : <span class="font-org">ไม่สามารถพันธมิตรได้</span></li>
						</ul>
					  </div>
					</div>
				</div>
				<div class="col-lg-12 col-sm-12">

					<div class="box-sv box-green">

					  <div class="box-sv-body">

						<div class="box-text-haeder"><i class="fa fa-trophy" aria-hidden="true"></i> Guild War Info <small>ข้อมูลกิลด์วอร์</small></div>

						<div class="line-box"></div>

						<div class="row">

						<div class="col-lg-4 col-sm-4">

						<ul class="list-unstyled">

						  <li class="list-haeder">Guild War HI-Class</li>

						  <li class="list-text"><img src="images/arrow_small.png"> วันกิลด์วอร์ : <span class="font-org">อังคาร</span> , <span class="font-org">เสาร์</span> </li>

						  <li class="list-text"><img src="images/arrow_small.png"> เวลากิลด์วอร์ : <span class="font-org">21.00</span> - <span class="font-org">22.00</span></li>
						

						</ul>

						</div>

						<div class="col-lg-4 col-sm-4">

						<ul class="list-unstyled">
						

<!--	
						  <li class="list-haeder">Guild War Item</li>

						  <li class="list-text"><img src="images/arrow_small.png"> Zeny : จำนวน <span class="font-org">10,000,000</span> Zeny</li>
						  
						  

						  <li class="list-haeder">Guild War 5.0</li>

						  <li class="list-text"><img src="images/arrow_small.png"> วันกิลด์วอร์ : <span class="font-org">N/A</span></li>

						  <li class="list-text"><img src="images/arrow_small.png"> เวลากิลด์วอร์ : <span class="font-org">21.00</span> - <span class="font-org">22.00</span></li>

						</ul>

						</div>

						<div class="col-lg-4 col-sm-4">

						<ul class="list-unstyled">

						  <li class="list-haeder">Guild War Baby</li>

						  <li class="list-text"><img src="images/arrow_small.png"> วันกิลด์วอร์ : <span class="font-org">N/A</span></li>

						  <li class="list-text"><img src="images/arrow_small.png"> เวลากิลด์วอร์ : <span class="font-org">21.00</span> - <span class="font-org">22.00</span></li>

						</ul>

						</div>

						<div class="col-lg-12 col-sm-12">

						<ul class="list-unstyled">

						  <li class="list-haeder">Guild War Item</li>

						  <li class="list-text"><img src="images/arrow_small.png"> Zeny : จำนวน <span class="font-org">10,000,000</span> Zeny</li>

						  <li class="list-text"><img src="images/arrow_small.png"> ITEM 1 : Poring Coin จำนวน <span class="font-org">100</span> ea</li>	

						  <li class="list-text"><img src="images/arrow_small.png"> ITEM 2 : Poison Bottle จำนวน <span class="font-org">100</span> ea</li>

						  <li class="list-text"><img src="images/arrow_small.png"> ITEM 3 : Fire Bottle จำนวน <span class="font-org">1,000</span> ea</li>

						  <li class="list-text"><img src="images/arrow_small.png"> ITEM 4 : Acid Bottle จำนวน <span class="font-org">1,000</span> ea</li>	-->

						</ul>

						</div>

						</div>

					  </div>

					</div>

				</div>
				<div class="col-lg-12 col-sm-12">
					<div class="box-sv box-green">
					  <div class="box-sv-body">
						<div class="box-text-haeder"><i class="fa fa-times-circle-o" aria-hidden="true"></i> Ban Skill & Item Server <small>ข้อมูลปิดการใช้งาน สกิล,การ์ด,ไอเท็ม</small></div>
						<div class="line-box"></div>
						<div class="row">
						<div class="col-lg-4 col-sm-4">

							<ul class="list-unstyled">

							  <li class="list-haeder">Skill Ban</li>

							  <li class="list-text"><img src="images/skill/369.gif"> Battle Chant : <span class="font-org">GVG</span> , <span class="font-org">PVP</span></li>

							  <li class="list-text"><img src="images/skill/290.gif"> Abracadabra : <span class="font-org">GVG</span> , <span class="font-org">PVP</span></li>

							  <li class="list-text"><img src="images/skill/402.gif"> Mind Breaker : <span class="font-org">GVG</span> , <span class="font-org">PVP</span></li>

							  <li class="list-text"><img src="images/skill/396.gif"> Marionette Control : <span class="font-org">GVG</span> , <span class="font-org">PVP</span></li>

							  <li class="list-text"><img src="images/skill/311.gif"> Loki's Veil : <span class="font-org">GVG</span> , <span class="font-org">PVP</span></li>

							  <li class="list-text"><img src="images/skill/309.gif"> Battle Theme : <span class="font-org">GVG</span> , <span class="font-org">PVP</span></li>

							  <li class="list-text"><img src="images/skill/310.gif"> Harmonic Lick : <span class="font-org">GVG</span> , <span class="font-org">PVP</span></li>

							  <li class="list-text"><img src="images/skill/313.gif"> Acoustic Rhythm : <span class="font-org">GVG</span> , <span class="font-org">PVP</span></li>

							  <li class="list-text"><img src="images/skill/457.gif"> Assassin Spirit : <span class="font-org">GVG</span> , <span class="font-org">PVP</span></li>

							  <li class="list-text"><img src="images/skill/456.gif"> Rogue Spirit : <span class="font-org">GVG</span> , <span class="font-org">PVP</span></li>

							  <li class="list-text"><img src="images/skill/426.gif"> High Jump : <span class="font-org">GVG</span> , <span class="font-org">PVP</span></li>

							</ul>

						</div>

						<div class="col-lg-4 col-sm-4">

							<ul class="list-unstyled">

							  <li class="list-haeder">Card Ban</li>

							  <li class="list-text"><img src="images/card/card.gif"> Ghostring Card :<span class="font-org">GVG</span> , <span class="font-org">PVP</span></li>

							  <li class="list-text"><img src="images/card/card.gif"> Deviling Card :<span class="font-org">GVG</span> , <span class="font-org">PVP</span></li>

							  <li class="list-text"><img src="images/card/card.gif"> MaYa Card :<span class="font-org">GVG</span> , <span class="font-org">PVP</span></li>

							  <li class="list-text"><img src="images/card/card.gif"> Tao Gunka Card :<span class="font-org">GVG</span> , <span class="font-org">PVP</span></li>

							  <li class="list-text"><img src="images/card/card.gif"> Golden Thief Bug Card :<span class="font-org">GVG</span> , <span class="font-org">PVP</span></li>

							  <li class="list-text"><img src="images/card/card.gif"> Samurai Spector Card :<span class="font-org">GVG</span> , <span class="font-org">PVP</span></li>

							  <li class="list-text"><img src="images/card/card.gif"> Memory of Thanatos Card :<span class="font-org">GVG</span> , <span class="font-org">PVP</span></li>

							  <li class="list-text"><img src="images/card/card.gif"> Moonlight Flower Card :<span class="font-org">GVG</span> , <span class="font-org">PVP</span></li>

							</ul>

						</div>

						<div class="col-lg-4 col-sm-4">

							<ul class="list-unstyled">

							  <li class="list-haeder">Item Ban</li>

							  <li class="list-text"><img src="images/item/12016.gif"> Speed Potion : <span class="font-org">GVG</span> , <span class="font-org">PVP</span></li>

							  <li class="list-text"><img src="images/item/12028.gif"> Box of Thunder : <span class="font-org">GVG</span> , <span class="font-org">PVP</span></li>

							  <li class="list-text"><img src="images/item/12033.gif"> Box of Sunlight : <span class="font-org">GVG</span> , <span class="font-org">PVP</span></li>

							  <li class="list-text"><img src="images/item/608.gif"> Yggdrasil Seed : <span class="font-org">GVG</span></li>

							  <li class="list-text"><img src="images/item/607.gif"> Yggdrasil Berry : <span class="font-org">GVG</span></li>

							  <li class="list-text"><img src="images/item/1363.gif"> Bloody Axe : <span class="font-org">GVG</span></li>

							  <li class="list-text"><img src="images/item/5150.gif"> Joker Jester : <span class="font-org">GVG</span></li>
							  
							  <li class="list-text"><img src="images/item/14522.gif"> BIG BUN : <span class="font-org">GVG</span> , <span class="font-org">PVP</span></li>
							  
							  <li class="list-text"><img src="images/item/14523.gif"> PILL : <span class="font-org">GVG</span> , <span class="font-org">PVP</span></li>

							</ul>

						</div>

						</div>

					  </div>

					</div>

				</div>			
				<div class="col-lg-12 col-sm-12">
						<div class="box-sv box-green">
						  <div class="box-sv-body">
							<div class="box-text-haeder"><i class="fa fa-wrench" aria-hidden="true"></i> Refine Rate <small>ข้อมูลการอัพเกรด อาวุธ,ชุดเกราะ</small></div>
							<div class="line-box"></div>
							<div class="row">
							<div class="col-lg-12 col-sm-12">
								<span class="list-haeder">อัพเกรดอุปกรณ์ ด้วย แร่ <img src="images/item/984.gif"> Oridecon | <img src="images/item/985.gif"> Elunium</span>
							<table class="table table-bordered" style="margin-top:20px">
								<thead>
									<tr>
									<th width="10%" class="active text-center">Refine</th>
									<th width="5%" class="active text-center">+1</th>
									<th width="5%" class="active text-center">+2</th>
									<th width="5%" class="active text-center">+3</th>
									<th width="5%" class="active text-center">+4</th>
									<th width="5%" class="active text-center">+5</th>
									<th width="5%" class="active text-center">+6</th>
									<th width="5%" class="active text-center">+7</th>
									<th width="5%" class="active text-center">+8</th>
									<th width="5%" class="active text-center">+9</th>
									<th width="5%" class="active text-center">+10</th>
									</tr> 
								</thead> 
								<tbody>
									<tr>
									<td class="text-center">ชุดเกราะ</td>
									<td class="text-center">100%</td>
									<td class="text-center">100%</td>
									<td class="text-center">100%</td>
									<td class="text-center">100%</td>
									<td class="text-center">60%</td>
									<td class="text-center">40%</td>
									<td class="text-center">40%</td>
									<td class="text-center">20%</td>
									<td class="text-center">20%</td>
									<td class="text-center">9%</td>
									</tr>
									<tr>
									<td class="text-center">อาวุธ Lv.1</td>
									<td class="text-center">100%</td>
									<td class="text-center">100%</td>
									<td class="text-center">100%</td>
									<td class="text-center">100%</td>
									<td class="text-center">100%</td>
									<td class="text-center">100%</td>
									<td class="text-center">100%</td>
									<td class="text-center">60%</td>
									<td class="text-center">40%</td>
									<td class="text-center">19%</td>
									</tr>
									<tr>
									<td class="text-center">อาวุธ Lv.2</td>
									<td class="text-center">100%</td>
									<td class="text-center">100%</td>
									<td class="text-center">100%</td>
									<td class="text-center">100%</td>
									<td class="text-center">100%</td>
									<td class="text-center">100%</td>
									<td class="text-center">60%</td>
									<td class="text-center">40%</td>
									<td class="text-center">20%</td>
									<td class="text-center">19%</td>
									</tr>
									<tr>
									<td class="text-center">อาวุธ Lv.3</td>
									<td class="text-center">100%</td>
									<td class="text-center">100%</td>
									<td class="text-center">100%</td>
									<td class="text-center">100%</td>
									<td class="text-center">100%</td>
									<td class="text-center">60%</td>
									<td class="text-center">50%</td>
									<td class="text-center">20%</td>
									<td class="text-center">20%</td>
									<td class="text-center">19%</td>
									</tr>
									<tr>
									<td class="text-center">อาวุธ Lv.4</td>
									<td class="text-center">100%</td>
									<td class="text-center">100%</td>
									<td class="text-center">100%</td>
									<td class="text-center">100%</td>
									<td class="text-center">60%</td>
									<td class="text-center">40%</td>
									<td class="text-center">40%</td>
									<td class="text-center">20%</td>
									<td class="text-center">20%</td>
									<td class="text-center">9%</td>
									</tr>
								</tbody>
							</table>
							</div>
							</div>
						  </div>
						</div>
					</div>
					<div class="col-lg-12 col-sm-12">
							<div class="box-sv box-green">
							  <div class="box-sv-body">
								<div class="box-text-haeder"><i class="fa fa-wrench" aria-hidden="true"></i> Refine Rate <small>ข้อมูลการอัพเกรด อาวุธ,ชุดเกราะ</small></div>
								<div class="line-box"></div>
								<div class="row">
								<div class="col-lg-12 col-sm-12">
									<span class="list-haeder">อัพเกรดอุปกรณ์ ด้วย แร่ <img src="images/item/7620.gif"> Enriched Oridecon | <img src="images/item/7619.gif"> Enriched Elunium</span>
								<table class="table table-bordered" style="margin-top:20px">
									<thead>
										<tr>
										<th width="10%" class="active text-center">Refine</th>
										<th width="5%" class="active text-center">+1</th>
										<th width="5%" class="active text-center">+2</th>
										<th width="5%" class="active text-center">+3</th>
										<th width="5%" class="active text-center">+4</th>
										<th width="5%" class="active text-center">+5</th>
										<th width="5%" class="active text-center">+6</th>
										<th width="5%" class="active text-center">+7</th>
										<th width="5%" class="active text-center">+8</th>
										<th width="5%" class="active text-center">+9</th>
										<th width="5%" class="active text-center">+10</th>
										</tr> 
									</thead> 
									<tbody>
										<tr>
										<td class="text-center">ชุดเกราะ</td>
										<td class="text-center">100%</td>
										<td class="text-center">100%</td>
										<td class="text-center">100%</td>
										<td class="text-center">100%</td>
										<td class="text-center">90%</td>
										<td class="text-center">70%</td>
										<td class="text-center">70%</td>
										<td class="text-center">40%</td>
										<td class="text-center">40%</td>
										<td class="text-center">20%</td>
										</tr>
										<tr>
										<td class="text-center">อาวุธ Lv.1</td>
										<td class="text-center">100%</td>
										<td class="text-center">100%</td>
										<td class="text-center">100%</td>
										<td class="text-center">100%</td>
										<td class="text-center">100%</td>
										<td class="text-center">100%</td>
										<td class="text-center">100%</td>
										<td class="text-center">90%</td>
										<td class="text-center">70%</td>
										<td class="text-center">30%</td>
										</tr>
										<tr>
										<td class="text-center">อาวุธ Lv.2</td>
										<td class="text-center">100%</td>
										<td class="text-center">100%</td>
										<td class="text-center">100%</td>
										<td class="text-center">100%</td>
										<td class="text-center">100%</td>
										<td class="text-center">100%</td>
										<td class="text-center">90%</td>
										<td class="text-center">70%</td>
										<td class="text-center">40%</td>
										<td class="text-center">30%</td>
										</tr>
										<tr>
										<td class="text-center">อาวุธ Lv.3</td>
										<td class="text-center">100%</td>
										<td class="text-center">100%</td>
										<td class="text-center">100%</td>
										<td class="text-center">100%</td>
										<td class="text-center">100%</td>
										<td class="text-center">90%</td>
										<td class="text-center">80%</td>
										<td class="text-center">40%</td>
										<td class="text-center">40%</td>
										<td class="text-center">30%</td>
										</tr>
										<tr>
										<td class="text-center">อาวุธ Lv.4</td>
										<td class="text-center">100%</td>
										<td class="text-center">100%</td>
										<td class="text-center">100%</td>
										<td class="text-center">100%</td>
										<td class="text-center">90%</td>
										<td class="text-center">70%</td>
										<td class="text-center">70%</td>
										<td class="text-center">40%</td>
										<td class="text-center">40%</td>
										<td class="text-center">20%</td>
										</tr>
									</tbody>
								</table>
								</div>
								</div>
							  </div>
							</div>
						</div>
						<div class="col-lg-12 col-sm-12">
							<div class="box-sv box-green">
							  <div class="box-sv-body">
								<div class="box-text-haeder"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Expensive Item <small>ไอเท็มขายแพง</small></div>
								<div class="line-box"></div>
								<div class="row">
								<div class="col-lg-6 col-sm-6">
								<ul class="list-unstyled">
								  <li class="list-haeder">ขยะทุกชิ้น เป็น ขยะทุกชนิดที่มีราคาเกิน700zจะขายได้สูงสุดที่700zไม่รวมสกิลOC</li>
								  <li class="list-haeder">อุปกรณ์สวมใส่+อาวุธ เป็น อุปกรณ์สวมใส่+อาวุธทุกชนิดที่มีราคาเกิน2000zจะขายได้สูงสุดที่2000zไม่รวมสกิลOC</li>
								</ul>
								</div>
								<div class="col-lg-6 col-sm-6">
								<ul class="list-unstyled">
								  <li class="list-haeder">700z</li>
								  <li class="list-haeder">2000z</li>
								</ul>
								</div>
								</div>
							  </div>
							</div>
						</div>
						<div class="col-lg-12 col-sm-12">
						<div class="box-sv box-green">
						  <div class="box-sv-body">
							<div class="box-text-haeder"><i class="fa fa-keyboard-o" aria-hidden="true"></i> Command Server <small>คำสั่งเปิดใช้งาน ฟรี</small></div>
							<div class="line-box"></div>
							<div class="row">
							<div class="col-lg-4 col-sm-4">
							<ul class="list-unstyled">
							  <li class="list-haeder">คำสั่ง</li>
							  <li class="list-text"><img src="images/arrow_small.png"> @time</li>
							  <li class="list-text"><img src="images/arrow_small.png"> @at</li>
							  <li class="list-text"><img src="images/arrow_small.png"> @load</li>
							  <li class="list-text"><img src="images/arrow_small.png"> @noask</li>
							  <li class="list-text"><img src="images/arrow_small.png"> @autoloot</li>
							  <li class="list-text"><img src="images/arrow_small.png"> @alootid</li>
							  <li class="list-text"><img src="images/arrow_small.png"> @mobinfo / @mi</li>
							  <li class="list-text"><img src="images/arrow_small.png"> #stats</li>
							  <li class="list-text"><img src="images/arrow_small.png"> #itemlist</li>
							  <li class="list-text"><img src="images/arrow_small.png"> #cartlist</li>
							  <li class="list-text"><img src="images/arrow_small.png"> #storagelist</li>
							</ul>
							</div>
							<div class="col-lg-4 col-sm-4">
							<ul class="list-unstyled">
							  <li class="list-haeder">รายละเอียด</li>
							  <li class="list-text">ดูเวลาของเซิร์ฟเวอร์</li>
							  <li class="list-text">ตั้งร้านค้า ออฟไลน์</li>
							  <li class="list-text">นำตัวละครกลับจุด Save</li>
							  <li class="list-text">ปิดคำชวนทุกอย่าง</li>
							  <li class="list-text">เก็บไอเท็มทั้งหมด</li>
							  <li class="list-text">เก็บไอเท็ม โดยระบุจำนวน</li>
							  <li class="list-text">ตรวจสอบข้อมูล Monster</li>
							  <li class="list-text">ตรวจสอบ Stats ของผู้เล่นในเกมส์</li>
							  <li class="list-text">ตรวจสอบ Item ของผู้เล่นในเกมส์</li>
							  <li class="list-text">ตรวจสอบ Cart ของผู้เล่นในเกมส์</li>
							  <li class="list-text">ตรวจสอบ Storage ของผู้เล่นในเกมส์</li>
							</ul>
							</div>
							<div class="col-lg-4 col-sm-4">
							<ul class="list-unstyled">
							  <li class="list-haeder">ตัวอย่าง</li>
							  <li class="list-text">( ไม่มีตัวอย่างการใช้งาน )</li>
							  <li class="list-text">( ไม่มีตัวอย่างการใช้งาน )</li>
							  <li class="list-text">( ไม่มีตัวอย่างการใช้งาน )</li>
							  <li class="list-text">( ไม่มีตัวอย่างการใช้งาน )</li>
							  <li class="list-text">( ไม่มีตัวอย่างการใช้งาน )</li>
							  <li class="list-text">Ex. <span class="font-org2">@alootid 909</span></li>
							  <li class="list-text">Ex. <span class="font-org2">@mobinfo 1288</span></li>
							  <li class="list-text">Ex. <span class="font-org2">#stats ชื่อผู้เล่น ที่ต้องการตรวจสอบ</span></li>
							  <li class="list-text">Ex. <span class="font-org2">#itemlist ชื่อผู้เล่น ที่ต้องการตรวจสอบ</span></li>
							  <li class="list-text">Ex. <span class="font-org2">#cartlist ชื่อผู้เล่น ที่ต้องการตรวจสอบ</span></li>
							  <li class="list-text">Ex. <span class="font-org2">#storagelist ชื่อผู้เล่น ที่ต้องการตรวจสอบ</span></li>
							</ul>
							</div>
							</div>
						  </div>
						</div>
					</div>
					<div class="col-lg-12 col-sm-12">
					<div class="box-sv box-green">
					  <div class="box-sv-body">
				
					
					
							<tbody>
								<tr>

		
	

								</tr>
								<tr>
								</tr>
							</tbody>
						</table>
					  </div>
					</div>
				</div>
			</div>
		  </div>
		  <div class="ui segment">
			<a class="ui tag label">ข้อมูลเซิฟเวอร์</a>
			<a class="ui tag label">รายละเอียด</a>
			<a class="ui tag label">เกี่ยวกับเซิร์ฟเวอร์</a>
			<a class="ui tag label">คำสั่งใช้งาน</a>
			<a class="ui tag label">ไอเท็มแบน</a>
			<a class="ui tag label">อัพเกรดอุปกรณ์</a>
			<a class="ui tag label">ข้อมูลกิลด์</a>
			<a class="ui tag label">ข้อมูลปาร์ตี้</a>
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