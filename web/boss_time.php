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
			  <div class="active section">Database Mvp</div>
			</div>
			<div class="pull-right date-right"><i class="far fa-clock"></i> สร้างเมื่อ : <time class="timeago" datetime="2019-06-20 13:07:00" title="พฤหัส,20 มิถุนายน 2562 13.07"></time></div>
		  </div>
		  <div class="ui segment">
			<div class="main-header">
				<span>Database Monster Boss</span>
				<p style="font-size:12px;font-weight: normal;">ข้อมูลบอสใหม่ และ เก่า ในเซิร์ฟเวอร์เกมส์</p>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="row">
						<!--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<button href="#boss_new" aria-controls="boss_new" role="tab" data-toggle="tab" class="btn btn-default btn-block"><i class="fas fa-clock"></i> ข้อมูลเวลาบอส NEW</button>
						</div>-->
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<button href="#boss_old" aria-controls="boss_old" role="tab" data-toggle="tab" class="btn btn-default btn-block"><i class="fas fa-clock"></i> ข้อมูลเวลาบอส TRO</button>
						</div>
					</div>
					<!--<div class="tab-content">
						<div role="tabpanel" class="tab-pane animated fadeInUp in active" id="boss_new">
						
						<div class="box-sv box-green" style="margin-top:2em">
						  <div class="box-sv-body">
							<div class="box-text-haeder">Monster : Kraken <small>MOB ID : 2202</small></div>
							<div class="line-box"></div>
							<div class="row">
								<div class="col-lg-3 col-sm-3">
								<p class="text-center"><img src="images/mvp/2202/2202.gif" class="img-rounded" style="margin-top:30px"></p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Map</p>
								<p class="text-center"><img src="images/mvp/2202/iz_dun04.gif" style="width: 120px;" class="img-rounded"></p>
								<p class="text-center">ชื่อแมพ : iz_dun04</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Info</p>
								<p class="text-center">Hp 8388607</p>
								<p class="text-center">Size Large</p>
								<p class="text-center">Race Undead</p>
								<p class="text-center">Element Undead</p>
								<p class="text-center">เวลาเกิด 30 นาที</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Item Drop</p>
								<p class="text-center"><img src="images/mvp/2202/Bloody_Branch.png"> Bloody Branch 5%</p>
								<p class="text-center"><img src="images/mvp/2202/Bonus_Coin.png"> Bonus Coin 5%</p>
								<p class="text-center"><img src="images/mvp/2202/Cash_Coin.png"> Cash Coin 50%</p>
								<p class="text-center"><img src="images/mvp/2202/Enriched_Elunium.png"> Enriched Elunium 5%</p>
								<p class="text-center"><img src="images/mvp/2202/Enriched_Oridecon.png"> Enriched Oridecon 5%</p>
								<p class="text-center"><img src="images/mvp/2202/Combat_Knife.png"> Combat Knife 0.50%</p>
								</div>
							</div>
						  </div>
						</div>
				
						<div class="box-sv box-green" style="margin-top:2em">
						  <div class="box-sv-body">
							<div class="box-text-haeder">Monster : Pyuriel <small>MOB ID : 2249</small></div>
							<div class="line-box"></div>
							<div class="row">
								<div class="col-lg-3 col-sm-3">
								<p class="text-center"><img src="images/mvp/2249/2249.gif" class="img-rounded" style="margin-top:30px"></p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Map</p>
								<p class="text-center"><img src="images/mvp/2249/xmas_dun01.gif" style="width: 120px;" class="img-rounded"></p>
								<p class="text-center">ชื่อแมพ : xmas_dun01</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Info</p>
								<p class="text-center">Hp 8388607</p>
								<p class="text-center">Size Large</p>
								<p class="text-center">Race Undead</p>
								<p class="text-center">Element Undead</p>
								<p class="text-center">เวลาเกิด 30 นาที</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Item Drop</p>
								<p class="text-center"><img src="images/mvp/2249/Bloody_Branch.png"> Bloody Branch 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Bonus_Coin.png"> Bonus Coin 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Cash_Coin.png"> Cash Coin 50%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Elunium.png"> Enriched Elunium 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Oridecon.png"> Enriched Oridecon 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Merchant_of_Honor.png"> Merchant of Honor 1%</p>
								</div>
							</div>
						  </div>
						</div>
					
						<div class="box-sv box-green" style="margin-top:2em">
						  <div class="box-sv-body">
							<div class="box-text-haeder">Monster : Lora <small>MOB ID : 2250</small></div>
							<div class="line-box"></div>
							<div class="row">
								<div class="col-lg-3 col-sm-3">
								<p class="text-center"><img src="images/mvp/2250/2250.gif" class="img-rounded" style="margin-top:30px"></p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Map</p>
								<p class="text-center"><img src="images/mvp/2250/anthell01.gif" style="width: 120px;" class="img-rounded"></p>
								<p class="text-center">ชื่อแมพ : anthell01</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Info</p>
								<p class="text-center">Hp 8388607</p>
								<p class="text-center">Size Large</p>
								<p class="text-center">Race Undead</p>
								<p class="text-center">Element Undead</p>
								<p class="text-center">เวลาเกิด 30 นาที</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Item Drop</p>
								<p class="text-center"><img src="images/mvp/2249/Bloody_Branch.png"> Bloody Branch 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Bonus_Coin.png"> Bonus Coin 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Cash_Coin.png"> Cash Coin 50%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Elunium.png"> Enriched Elunium 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Oridecon.png"> Enriched Oridecon 5%</p>
								<p class="text-center"><img src="images/mvp/3091/Brynhild.png"> Brynhild 0.50%</p>
								</div>
							</div>
						  </div>
						</div>
						
						<div class="box-sv box-green" style="margin-top:2em">
						  <div class="box-sv-body">
							<div class="box-text-haeder">Monster : Gioia <small>MOB ID : 2251</small></div>
							<div class="line-box"></div>
							<div class="row">
								<div class="col-lg-3 col-sm-3">
								<p class="text-center"><img src="images/mvp/2251/2251.gif" class="img-rounded" style="margin-top:30px"></p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Map</p>
								<p class="text-center"><img src="images/mvp/2251/hu_fild02.gif" style="width: 120px;" class="img-rounded"></p>
								<p class="text-center">ชื่อแมพ : hu_fild02</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Info</p>
								<p class="text-center">Hp 8388607</p>
								<p class="text-center">Size Large</p>
								<p class="text-center">Race Undead</p>
								<p class="text-center">Element Undead</p>
								<p class="text-center">เวลาเกิด 30 นาที</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Item Drop</p>
								<p class="text-center"><img src="images/mvp/2249/Bloody_Branch.png"> Bloody Branch 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Bonus_Coin.png"> Bonus Coin 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Cash_Coin.png"> Cash Coin 50%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Elunium.png"> Enriched Elunium 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Oridecon.png"> Enriched Oridecon 5%</p>
								<p class="text-center"><img src="images/mvp/2251/Valkyrie_Armor.png"> Valkyrie Armor 1%</p>
								</div>
							</div>
						  </div>
						</div>
						
						<div class="box-sv box-green" style="margin-top:2em">
						  <div class="box-sv-body">
							<div class="box-text-haeder">Monster : Elvira <small>MOB ID : 2252</small></div>
							<div class="line-box"></div>
							<div class="row">
								<div class="col-lg-3 col-sm-3">
								<p class="text-center"><img src="images/mvp/2252/2252.gif" class="img-rounded" style="margin-top:30px"></p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Map</p>
								<p class="text-center"><img src="images/mvp/2252/ice_dun02.gif" style="width: 120px;" class="img-rounded"></p>
								<p class="text-center">ชื่อแมพ : ice_dun02</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Info</p>
								<p class="text-center">Hp 8388607</p>
								<p class="text-center">Size Large</p>
								<p class="text-center">Race Undead</p>
								<p class="text-center">Element Undead</p>
								<p class="text-center">เวลาเกิด 30 นาที</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Item Drop</p>
								<p class="text-center"><img src="images/mvp/2249/Bloody_Branch.png"> Bloody Branch 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Bonus_Coin.png"> Bonus Coin 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Cash_Coin.png"> Cash Coin 50%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Elunium.png"> Enriched Elunium 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Oridecon.png"> Enriched Oridecon 5%</p>
								<p class="text-center"><img src="images/mvp/2252/Swordman_of_Honor.gif"> Swordman of Honor 1%</p>
								</div>
							</div>
						  </div>
						</div>
						
						<div class="box-sv box-green" style="margin-top:2em">
						  <div class="box-sv-body">
							<div class="box-text-haeder">Monster : Daehyon <small>MOB ID : 2253</small></div>
							<div class="line-box"></div>
							<div class="row">
								<div class="col-lg-3 col-sm-3">
								<p class="text-center"><img src="images/mvp/2253/2253.gif" class="img-rounded" style="margin-top:30px"></p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Map</p>
								<p class="text-center"><img src="images/mvp/2253/ama_dun02.gif" style="width: 120px;" class="img-rounded"></p>
								<p class="text-center">ชื่อแมพ : ama_dun02</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Info</p>
								<p class="text-center">Hp 8388607</p>
								<p class="text-center">Size Large</p>
								<p class="text-center">Race Undead</p>
								<p class="text-center">Element Undead</p>
								<p class="text-center">เวลาเกิด 30 นาที</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Item Drop</p>
								<p class="text-center"><img src="images/mvp/2249/Bloody_Branch.png"> Bloody Branch 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Bonus_Coin.png"> Bonus Coin 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Cash_Coin.png"> Cash Coin 50%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Elunium.png"> Enriched Elunium 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Oridecon.png"> Enriched Oridecon 5%</p>
								<p class="text-center"><img src="images/mvp/2253/Valkyrie_Armor.png"> Valkyrie Armor 1%</p>
								</div>
							</div>
						  </div>
						</div>
						
						<div class="box-sv box-green" style="margin-top:2em">
						  <div class="box-sv-body">
							<div class="box-text-haeder">Monster : Soheon <small>MOB ID : 2254</small></div>
							<div class="line-box"></div>
							<div class="row">
								<div class="col-lg-3 col-sm-3">
								<p class="text-center"><img src="images/mvp/2254/2254.gif" class="img-rounded" style="margin-top:30px"></p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Map</p>
								<p class="text-center"><img src="images/mvp/2254/tur_dun03.gif" style="width: 120px;" class="img-rounded"></p>
								<p class="text-center">ชื่อแมพ : tur_dun03</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Info</p>
								<p class="text-center">Hp 8388607</p>
								<p class="text-center">Size Large</p>
								<p class="text-center">Race Undead</p>
								<p class="text-center">Element Undead</p>
								<p class="text-center">เวลาเกิด 30 นาที</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Item Drop</p>
								<p class="text-center"><img src="images/mvp/2249/Bloody_Branch.png"> Bloody Branch 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Bonus_Coin.png"> Bonus Coin 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Cash_Coin.png"> Cash Coin 50%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Elunium.png"> Enriched Elunium 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Oridecon.png"> Enriched Oridecon 5%</p>
								<p class="text-center"><img src="images/mvp/2254/Thief_of_Honor.gif"> Thief of Honor 1%</p>
								</div>
							</div>
						  </div>
						</div>
						
						<div class="box-sv box-green" style="margin-top:2em">
						  <div class="box-sv-body">
							<div class="box-text-haeder">Monster : Dark Guardian Kades <small>MOB ID : 2255</small></div>
							<div class="line-box"></div>
							<div class="row">
								<div class="col-lg-3 col-sm-3">
								<p class="text-center"><img src="images/mvp/2255/2255.gif" class="img-rounded" style="margin-top:30px"></p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Map</p>
								<p class="text-center"><img src="images/mvp/2255/moc_pryd03.gif" style="width: 120px;" class="img-rounded"></p>
								<p class="text-center">ชื่อแมพ : moc_pryd03</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Info</p>
								<p class="text-center">Hp 8388607</p>
								<p class="text-center">Size Large</p>
								<p class="text-center">Race Undead</p>
								<p class="text-center">Element Undead</p>
								<p class="text-center">เวลาเกิด 30 นาที</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Item Drop</p>
								<p class="text-center"><img src="images/mvp/2249/Bloody_Branch.png"> Bloody Branch 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Bonus_Coin.png"> Bonus Coin 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Cash_Coin.png"> Cash Coin 50%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Elunium.png"> Enriched Elunium 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Oridecon.png"> Enriched Oridecon 5%</p>
								<p class="text-center"><img src="images/mvp/2255/Mage_of_Honor.gif"> Mage of Honor 1%</p>
								</div>
							</div>
						  </div>
						</div>
						
						<div class="box-sv box-green" style="margin-top:2em">
						  <div class="box-sv-body">
							<div class="box-text-haeder">Monster : Rudo <small>MOB ID : 2256</small></div>
							<div class="line-box"></div>
							<div class="row">
								<div class="col-lg-3 col-sm-3">
								<p class="text-center"><img src="images/mvp/2256/2256.gif" class="img-rounded" style="margin-top:30px"></p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Map</p>
								<p class="text-center"><img src="images/mvp/2256/iz_dun03.gif" style="width: 120px;" class="img-rounded"></p>
								<p class="text-center">ชื่อแมพ : iz_dun03</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Info</p>
								<p class="text-center">Hp 8388607</p>
								<p class="text-center">Size Large</p>
								<p class="text-center">Race Undead</p>
								<p class="text-center">Element Undead</p>
								<p class="text-center">เวลาเกิด 30 นาที</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Item Drop</p>
								<p class="text-center"><img src="images/mvp/2249/Bloody_Branch.png"> Bloody Branch 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Bonus_Coin.png"> Bonus Coin 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Cash_Coin.png"> Cash Coin 50%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Elunium.png"> Enriched Elunium 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Oridecon.png"> Enriched Oridecon 5%</p>
								<p class="text-center"><img src="images/mvp/2256/Valkyrian_Manteau.gif"> Valkyrian Manteau 1%</p>
								</div>
							</div>
						  </div>
						</div>
						
						<div class="box-sv box-green" style="margin-top:2em">
						  <div class="box-sv-body">
							<div class="box-text-haeder">Monster : Tikbalang <small>MOB ID : 2313</small></div>
							<div class="line-box"></div>
							<div class="row">
								<div class="col-lg-3 col-sm-3">
								<p class="text-center"><img src="images/mvp/2313/2313.gif" class="img-rounded" style="margin-top:30px"></p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Map</p>
								<p class="text-center"><img src="images/mvp/2313/mosk_dun02.gif" style="width: 120px;" class="img-rounded"></p>
								<p class="text-center">ชื่อแมพ : mosk_dun02</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Info</p>
								<p class="text-center">Hp 8388607</p>
								<p class="text-center">Size Large</p>
								<p class="text-center">Race Undead</p>
								<p class="text-center">Element Undead</p>
								<p class="text-center">เวลาเกิด 30 นาที</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Item Drop</p>
								<p class="text-center"><img src="images/mvp/2249/Bloody_Branch.png"> Bloody Branch 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Bonus_Coin.png"> Bonus Coin 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Cash_Coin.png"> Cash Coin 50%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Elunium.png"> Enriched Elunium 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Oridecon.png"> Enriched Oridecon 5%</p>
								<p class="text-center"><img src="images/mvp/2313/Bradium_Earring.png"> Bradium Earring 1%</p>
								</div>
							</div>
						  </div>
						</div>
						
						<div class="box-sv box-green" style="margin-top:2em">
						  <div class="box-sv-body">
							<div class="box-text-haeder">Monster : Bangungot <small>MOB ID : 2317</small></div>
							<div class="line-box"></div>
							<div class="row">
								<div class="col-lg-3 col-sm-3">
								<p class="text-center"><img src="images/mvp/2317/2317.gif" class="img-rounded" style="margin-top:30px"></p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Map</p>
								<p class="text-center"><img src="images/mvp/2317/bra_dun01.gif" style="width: 120px;" class="img-rounded"></p>
								<p class="text-center">ชื่อแมพ : bra_dun01</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Info</p>
								<p class="text-center">Hp 8388607</p>
								<p class="text-center">Size Large</p>
								<p class="text-center">Race Undead</p>
								<p class="text-center">Element Undead</p>
								<p class="text-center">เวลาเกิด 30 นาที</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Item Drop</p>
								<p class="text-center"><img src="images/mvp/2249/Bloody_Branch.png"> Bloody Branch 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Bonus_Coin.png"> Bonus Coin 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Cash_Coin.png"> Cash Coin 50%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Elunium.png"> Enriched Elunium 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Oridecon.png"> Enriched Oridecon 5%</p>
								<p class="text-center"><img src="images/mvp/2317/Variant_Shoes.png"> Variant Shoes 1%</p>
								</div>
							</div>
						  </div>
						</div>
						
						<div class="box-sv box-green" style="margin-top:2em">
						  <div class="box-sv-body">
							<div class="box-text-haeder">Monster : Bakonawa <small>MOB ID : 2320</small></div>
							<div class="line-box"></div>
							<div class="row">
								<div class="col-lg-3 col-sm-3">
								<p class="text-center"><img src="images/mvp/2320/2320.gif" class="img-rounded" style="margin-top:30px"></p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Map</p>
								<p class="text-center"><img src="images/mvp/2320/beach_dun2.gif" style="width: 120px;" class="img-rounded"></p>
								<p class="text-center">ชื่อแมพ : beach_dun2</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Info</p>
								<p class="text-center">Hp 8388607</p>
								<p class="text-center">Size Large</p>
								<p class="text-center">Race Undead</p>
								<p class="text-center">Element Undead</p>
								<p class="text-center">เวลาเกิด 30 นาที</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Item Drop</p>
								<p class="text-center"><img src="images/mvp/2249/Bloody_Branch.png"> Bloody Branch 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Bonus_Coin.png"> Bonus Coin 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Cash_Coin.png"> Cash Coin 50%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Elunium.png"> Enriched Elunium 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Oridecon.png"> Enriched Oridecon 5%</p>
								<p class="text-center"><img src="images/mvp/2320/Valkyrja's_Shield.png"> Valkyrja's Shield 0.70%</p>
								</div>
							</div>
						  </div>
						</div>
						
						<div class="box-sv box-green" style="margin-top:2em">
						  <div class="box-sv-body">
							<div class="box-text-haeder">Monster : Faithful Manager <small>MOB ID : 2371</small></div>
							<div class="line-box"></div>
							<div class="row">
								<div class="col-lg-3 col-sm-3">
								<p class="text-center"><img src="images/mvp/2371/2371.gif" class="img-rounded" style="margin-top:30px"></p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Map</p>
								<p class="text-center"><img src="images/mvp/2371/gl_prison.gif" style="width: 120px;" class="img-rounded"></p>
								<p class="text-center">ชื่อแมพ : gl_prison</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Info</p>
								<p class="text-center">Hp 8388607</p>
								<p class="text-center">Size Large</p>
								<p class="text-center">Race Undead</p>
								<p class="text-center">Element Undead</p>
								<p class="text-center">เวลาเกิด 30 นาที</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Item Drop</p>
								<p class="text-center"><img src="images/mvp/2249/Bloody_Branch.png"> Bloody Branch 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Bonus_Coin.png"> Bonus Coin 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Cash_Coin.png"> Cash Coin 50%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Elunium.png"> Enriched Elunium 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Oridecon.png"> Enriched Oridecon 5%</p>
								<p class="text-center"><img src="images/mvp/2371/Ice_pick.png"> Ice pick 0.50%</p>
								</div>
							</div>
						  </div>
						</div>
						
						<div class="box-sv box-green" style="margin-top:2em">
						  <div class="box-sv-body">
							<div class="box-text-haeder">Monster : Amdarias <small>MOB ID : 2476</small></div>
							<div class="line-box"></div>
							<div class="row">
								<div class="col-lg-3 col-sm-3">
								<p class="text-center"><img src="images/mvp/2476/2476.gif" class="img-rounded" style="margin-top:30px"></p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Map</p>
								<p class="text-center"><img src="images/mvp/2476/moc_fild20.gif" style="width: 120px;" class="img-rounded"></p>
								<p class="text-center">ชื่อแมพ : moc_fild20</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Info</p>
								<p class="text-center">Hp 8388607</p>
								<p class="text-center">Size Large</p>
								<p class="text-center">Race Undead</p>
								<p class="text-center">Element Undead</p>
								<p class="text-center">เวลาเกิด 30 นาที</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Item Drop</p>
								<p class="text-center"><img src="images/mvp/2249/Bloody_Branch.png"> Bloody Branch 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Bonus_Coin.png"> Bonus Coin 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Cash_Coin.png"> Cash Coin 50%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Elunium.png"> Enriched Elunium 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Oridecon.png"> Enriched Oridecon 5%</p>
								<p class="text-center"><img src="images/mvp/2476/Variant_Shoes.png"> Variant Shoes 1%</p>
								</div>
							</div>
						  </div>
						</div>
						
						<div class="box-sv box-green" style="margin-top:2em">
						  <div class="box-sv-body">
							<div class="box-text-haeder">Monster : Faceworm Queen <small>MOB ID : 2529</small></div>
							<div class="line-box"></div>
							<div class="row">
								<div class="col-lg-3 col-sm-3">
								<p class="text-center"><img src="images/mvp/2529/2529.gif" class="img-rounded" style="margin-top:30px"></p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Map</p>
								<p class="text-center"><img src="images/mvp/2529/um_fild03.gif" style="width: 120px;" class="img-rounded"></p>
								<p class="text-center">ชื่อแมพ : um_fild03</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Info</p>
								<p class="text-center">Hp 8388607</p>
								<p class="text-center">Size Large</p>
								<p class="text-center">Race Undead</p>
								<p class="text-center">Element Undead</p>
								<p class="text-center">เวลาเกิด 30 นาที</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Item Drop</p>
								<p class="text-center"><img src="images/mvp/2249/Bloody_Branch.png"> Bloody Branch 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Bonus_Coin.png"> Bonus Coin 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Cash_Coin.png"> Cash Coin 50%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Elunium.png"> Enriched Elunium 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Oridecon.png"> Enriched Oridecon 5%</p>
								<p class="text-center"><img src="images/mvp/2529/Diabolus_Manteau.png"> Diabolus Manteau 0.70%</p>
								</div>
							</div>
						  </div>
						</div>
						
						<div class="box-sv box-green" style="margin-top:2em">
						  <div class="box-sv-body">
							<div class="box-text-haeder">Monster : Evil Fanatics <small>MOB ID : 2942</small></div>
							<div class="line-box"></div>
							<div class="row">
								<div class="col-lg-3 col-sm-3">
								<p class="text-center"><img src="images/mvp/2942/2942.gif" class="img-rounded" style="margin-top:30px"></p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Map</p>
								<p class="text-center"><img src="images/mvp/2942/in_sphinx4.gif" style="width: 120px;" class="img-rounded"></p>
								<p class="text-center">ชื่อแมพ : in_sphinx4</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Info</p>
								<p class="text-center">Hp 8388607</p>
								<p class="text-center">Size Large</p>
								<p class="text-center">Race Undead</p>
								<p class="text-center">Element Undead</p>
								<p class="text-center">เวลาเกิด 30 นาที</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Item Drop</p>
								<p class="text-center"><img src="images/mvp/2249/Bloody_Branch.png"> Bloody Branch 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Bonus_Coin.png"> Bonus Coin 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Cash_Coin.png"> Cash Coin 50%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Elunium.png"> Enriched Elunium 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Oridecon.png"> Enriched Oridecon 5%</p>
								<p class="text-center"><img src="images/mvp/2942/Diabolus_Boots.png"> Diabolus Boots 0.70%</p>
								</div>
							</div>
						  </div>
						</div>
						
						<div class="box-sv box-green" style="margin-top:2em">
						  <div class="box-sv-body">
							<div class="box-text-haeder">Monster : Celine Kimi <small>MOB ID : 2996</small></div>
							<div class="line-box"></div>
							<div class="row">
								<div class="col-lg-3 col-sm-3">
								<p class="text-center"><img src="images/mvp/2996/2996.gif" class="img-rounded" style="margin-top:30px"></p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Map</p>
								<p class="text-center"><img src="images/mvp/2996/yuno_fild11.gif" style="width: 120px;" class="img-rounded"></p>
								<p class="text-center">ชื่อแมพ : yuno_fild11</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Info</p>
								<p class="text-center">Hp 8388607</p>
								<p class="text-center">Size Large</p>
								<p class="text-center">Race Undead</p>
								<p class="text-center">Element Undead</p>
								<p class="text-center">เวลาเกิด 30 นาที</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Item Drop</p>
								<p class="text-center"><img src="images/mvp/2249/Bloody_Branch.png"> Bloody Branch 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Bonus_Coin.png"> Bonus Coin 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Cash_Coin.png"> Cash Coin 50%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Elunium.png"> Enriched Elunium 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Oridecon.png"> Enriched Oridecon 5%</p>
								<p class="text-center"><img src="images/mvp/2996/Violet_Fear.gif"> Violet Fear 2%</p>
								</div>
							</div>
						  </div>
						</div>
						
						<div class="box-sv box-green" style="margin-top:2em">
						  <div class="box-sv-body">
							<div class="box-text-haeder">Monster : Grand Pere <small>MOB ID : 3073</small></div>
							<div class="line-box"></div>
							<div class="row">
								<div class="col-lg-3 col-sm-3">
								<p class="text-center"><img src="images/mvp/3073/3073.gif" class="img-rounded" style="margin-top:30px"></p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Map</p>
								<p class="text-center"><img src="images/mvp/3073/gefenia03.gif" style="width: 120px;" class="img-rounded"></p>
								<p class="text-center">ชื่อแมพ : gefenia03</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Info</p>
								<p class="text-center">Hp 8388607</p>
								<p class="text-center">Size Large</p>
								<p class="text-center">Race Undead</p>
								<p class="text-center">Element Undead</p>
								<p class="text-center">เวลาเกิด 30 นาที</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Item Drop</p>
								<p class="text-center"><img src="images/mvp/2249/Bloody_Branch.png"> Bloody Branch 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Bonus_Coin.png"> Bonus Coin 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Cash_Coin.png"> Cash Coin 50%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Elunium.png"> Enriched Elunium 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Oridecon.png"> Enriched Oridecon 5%</p>
								<p class="text-center"><img src="images/mvp/3073/Nydhorgg's_Shadow_Garb.png"> Nydhorgg's Shadow Garb 0.50%</p>
								</div>
							</div>
						  </div>
						</div>
						
						<div class="box-sv box-green" style="margin-top:2em">
						  <div class="box-sv-body">
							<div class="box-text-haeder">Monster : เวลาเกิดHolder <small>MOB ID : 3074</small></div>
							<div class="line-box"></div>
							<div class="row">
								<div class="col-lg-3 col-sm-3">
								<p class="text-center"><img src="images/mvp/3074/3074.gif" class="img-rounded" style="margin-top:30px"></p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Map</p>
								<p class="text-center"><img src="images/mvp/3074/nif_fild02.gif" style="width: 120px;" class="img-rounded"></p>
								<p class="text-center">ชื่อแมพ : nif_fild02</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Info</p>
								<p class="text-center">Hp 8388607</p>
								<p class="text-center">Size Large</p>
								<p class="text-center">Race Undead</p>
								<p class="text-center">Element Undead</p>
								<p class="text-center">เวลาเกิด 30 นาที</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Item Drop</p>
								<p class="text-center"><img src="images/mvp/2249/Bloody_Branch.png"> Bloody Branch 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Bonus_Coin.png"> Bonus Coin 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Cash_Coin.png"> Cash Coin 50%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Elunium.png"> Enriched Elunium 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Oridecon.png"> Enriched Oridecon 5%</p>
								<p class="text-center"><img src="images/mvp/3074/Diabolus_Armor.gif"> Diabolus Armor 1%</p>
								</div>
							</div>
						  </div>
						</div>
						
						<div class="box-sv box-green" style="margin-top:2em">
						  <div class="box-sv-body">
							<div class="box-text-haeder">Monster : Brinaranea <small>MOB ID : 3091</small></div>
							<div class="line-box"></div>
							<div class="row">
								<div class="col-lg-3 col-sm-3">
								<p class="text-center"><img src="images/mvp/3091/3091.gif" class="img-rounded" style="margin-top:30px"></p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Map</p>
								<p class="text-center"><img src="images/mvp/3091/dic_fild02.gif" style="width: 120px;" class="img-rounded"></p>
								<p class="text-center">ชื่อแมพ : dic_fild02</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Info</p>
								<p class="text-center">Hp 8388607</p>
								<p class="text-center">Size Large</p>
								<p class="text-center">Race Undead</p>
								<p class="text-center">Element Undead</p>
								<p class="text-center">เวลาเกิด 30 นาที</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Item Drop</p>
								<p class="text-center"><img src="images/mvp/2249/Bloody_Branch.png"> Bloody Branch 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Bonus_Coin.png"> Bonus Coin 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Cash_Coin.png"> Cash Coin 50%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Elunium.png"> Enriched Elunium 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Oridecon.png"> Enriched Oridecon 5%</p>
								<p class="text-center"><img src="images/mvp/3091/Brynhild.png"> Brynhild 0.50%</p>
								</div>
							</div>
						  </div>
						</div>
					
						<div class="box-sv box-green" style="margin-top:2em">
						  <div class="box-sv-body">
							<div class="box-text-haeder">Monster : Muspellskoll <small>MOB ID : 3092</small></div>
							<div class="line-box"></div>
							<div class="row">
								<div class="col-lg-3 col-sm-3">
								<p class="text-center"><img src="images/mvp/3092/3092.gif" class="img-rounded" style="margin-top:30px"></p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Map</p>
								<p class="text-center"><img src="images/mvp/3092/mag_dun02.gif" style="width: 120px;" class="img-rounded"></p>
								<p class="text-center">ชื่อแมพ : mag_dun02</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Info</p>
								<p class="text-center">Hp 8388607</p>
								<p class="text-center">Size Large</p>
								<p class="text-center">Race Undead</p>
								<p class="text-center">Element Undead</p>
								<p class="text-center">เวลาเกิด 30 นาที</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Item Drop</p>
								<p class="text-center"><img src="images/mvp/2249/Bloody_Branch.png"> Bloody Branch 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Bonus_Coin.png"> Bonus Coin 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Cash_Coin.png"> Cash Coin 50%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Elunium.png"> Enriched Elunium 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Oridecon.png"> Enriched Oridecon 5%</p>
								<p class="text-center"><img src="images/mvp/3092/Orlean's_Glove.png"> Orlean's Glove 1%</p>
								</div>
							</div>
						  </div>
						</div>
						
						<div class="box-sv box-green" style="margin-top:2em">
						  <div class="box-sv-body">
							<div class="box-text-haeder">Monster : Reborn Demigod <small>MOB ID : 3096</small></div>
							<div class="line-box"></div>
							<div class="row">
								<div class="col-lg-3 col-sm-3">
								<p class="text-center"><img src="images/mvp/3096/3096.gif" class="img-rounded" style="margin-top:30px"></p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Map</p>
								<p class="text-center"><img src="images/mvp/3096/gl_cas02.gif" style="width: 120px;" class="img-rounded"></p>
								<p class="text-center">ชื่อแมพ : gl_cas02</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Info</p>
								<p class="text-center">Hp 8388607</p>
								<p class="text-center">Size Large</p>
								<p class="text-center">Race Undead</p>
								<p class="text-center">Element Undead</p>
								<p class="text-center">เวลาเกิด 30 นาที</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Item Drop</p>
								<p class="text-center"><img src="images/mvp/2249/Bloody_Branch.png"> Bloody Branch 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Bonus_Coin.png"> Bonus Coin 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Cash_Coin.png"> Cash Coin 50%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Elunium.png"> Enriched Elunium 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Oridecon.png"> Enriched Oridecon 5%</p>
								<p class="text-center"><img src="images/mvp/3096/Ice_pick.gif"> Ice pick 0.50%</p>
								</div>
							</div>
						  </div>
						</div>
						
						<div class="box-sv box-green" style="margin-top:2em">
						  <div class="box-sv-body">
							<div class="box-text-haeder">Monster : Despair God Morroc <small>MOB ID : 3097</small></div>
							<div class="line-box"></div>
							<div class="row">
								<div class="col-lg-3 col-sm-3">
								<p class="text-center"><img src="images/mvp/3097/3097.gif" class="img-rounded" style="margin-top:30px"></p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Map</p>
								<p class="text-center"><img src="images/mvp/3097/moc_pryd02.gif" style="width: 120px;" class="img-rounded"></p>
								<p class="text-center">ชื่อแมพ : moc_pryd02</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Info</p>
								<p class="text-center">Hp 8388607</p>
								<p class="text-center">Size Large</p>
								<p class="text-center">Race Undead</p>
								<p class="text-center">Element Undead</p>
								<p class="text-center">เวลาเกิด 30 นาที</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Item Drop</p>
								<p class="text-center"><img src="images/mvp/2249/Bloody_Branch.png"> Bloody Branch 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Bonus_Coin.png"> Bonus Coin 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Cash_Coin.png"> Cash Coin 50%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Elunium.png"> Enriched Elunium 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Oridecon.png"> Enriched Oridecon 5%</p>
								<p class="text-center"><img src="images/mvp/3097/Diabolus_Armor.gif"> Diabolus Armor 1%</p>
								</div>
							</div>
						  </div>
						</div>
						
						<div class="box-sv box-green" style="margin-top:2em">
						  <div class="box-sv-body">
							<div class="box-text-haeder">Monster : Charleston <small>MOB ID : 3124</small></div>
							<div class="line-box"></div>
							<div class="row">
								<div class="col-lg-3 col-sm-3">
								<p class="text-center"><img src="images/mvp/3124/3121.gif" class="img-rounded" style="margin-top:30px"></p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Map</p>
								<p class="text-center"><img src="images/mvp/3124/alde_dun02.gif" style="width: 120px;" class="img-rounded"></p>
								<p class="text-center">ชื่อแมพ : alde_dun02</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Info</p>
								<p class="text-center">Hp 8388607</p>
								<p class="text-center">Size Large</p>
								<p class="text-center">Race Undead</p>
								<p class="text-center">Element Undead</p>
								<p class="text-center">เวลาเกิด 30 นาที</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Item Drop</p>
								<p class="text-center"><img src="images/mvp/2249/Bloody_Branch.png"> Bloody Branch 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Bonus_Coin.png"> Bonus Coin 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Cash_Coin.png"> Cash Coin 50%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Elunium.png"> Enriched Elunium 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Oridecon.png"> Enriched Oridecon 5%</p>
								<p class="text-center"><img src="images/mvp/3124/Diabolus_Ring.png"> Diabolus Ring 1%</p>
								</div>
							</div>
						  </div>
						</div>
						
						<div class="box-sv box-green" style="margin-top:2em">
						  <div class="box-sv-body">
							<div class="box-text-haeder">Monster : Echidna <small>MOB ID : 3329</small></div>
							<div class="line-box"></div>
							<div class="row">
								<div class="col-lg-3 col-sm-3">
								<p class="text-center"><img src="images/mvp/3329/ECHIDNA00.gif" class="img-rounded" style="margin-top:30px"></p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Map</p>
								<p class="text-center"><img src="images/mvp/3329/gefenia04.gif" style="width: 120px;" class="img-rounded"></p>
								<p class="text-center">ชื่อแมพ : gefenia04</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Info</p>
								<p class="text-center">Hp 8388607</p>
								<p class="text-center">Size Large</p>
								<p class="text-center">Race Undead</p>
								<p class="text-center">Element Undead</p>
								<p class="text-center">เวลาเกิด 30 นาที</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Item Drop</p>
								<p class="text-center"><img src="images/mvp/2249/Bloody_Branch.png"> Bloody Branch 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Bonus_Coin.png"> Bonus Coin 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Cash_Coin.png"> Cash Coin 50%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Elunium.png"> Enriched Elunium 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Oridecon.png"> Enriched Oridecon 5%</p>
								<p class="text-center"><img src="images/mvp/3329/Valkyrie_Shoes.gif"> Valkyrie Shoes 1%</p>
								</div>
							</div>
						  </div>
						</div>
						
						<div class="box-sv box-green" style="margin-top:2em">
						  <div class="box-sv-body">
							<div class="box-text-haeder">Monster : Siren <small>MOB ID : 3330</small></div>
							<div class="line-box"></div>
							<div class="row">
								<div class="col-lg-3 col-sm-3">
								<p class="text-center"><img src="images/mvp/3330/SIREN.gif" class="img-rounded" style="margin-top:30px"></p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Map</p>
								<p class="text-center"><img src="images/mvp/3330/orcsdun02.gif" style="width: 120px;" class="img-rounded"></p>
								<p class="text-center">ชื่อแมพ : orcsdun02</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Info</p>
								<p class="text-center">Hp 8388607</p>
								<p class="text-center">Size Large</p>
								<p class="text-center">Race Undead</p>
								<p class="text-center">Element Undead</p>
								<p class="text-center">เวลาเกิด 30 นาที</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Item Drop</p>
								<p class="text-center"><img src="images/mvp/2249/Bloody_Branch.png"> Bloody Branch 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Bonus_Coin.png"> Bonus Coin 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Cash_Coin.png"> Cash Coin 50%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Elunium.png"> Enriched Elunium 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Oridecon.png"> Enriched Oridecon 5%</p>
								<p class="text-center"><img src="images/mvp/3330/Valkyrie_Shoes.gif"> Valkyrie Shoes 1%</p>
								</div>
							</div>
						  </div>
						</div>
				
						<div class="box-sv box-green" style="margin-top:2em">
						  <div class="box-sv-body">
							<div class="box-text-haeder">Monster : Hera Campana Louvre <small>MOB ID : 3332</small></div>
							<div class="line-box"></div>
							<div class="row">
								<div class="col-lg-3 col-sm-3">
								<p class="text-center"><img src="images/mvp/3332/3107.gif" class="img-rounded" style="margin-top:30px"></p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Map</p>
								<p class="text-center"><img src="images/mvp/3332/mag_dun01.gif" style="width: 120px;" class="img-rounded"></p>
								<p class="text-center">ชื่อแมพ : mag_dun01</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Info</p>
								<p class="text-center">Hp 8388607</p>
								<p class="text-center">Size Large</p>
								<p class="text-center">Race Undead</p>
								<p class="text-center">Element Undead</p>
								<p class="text-center">เวลาเกิด 30 นาที</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Item Drop</p>
								<p class="text-center"><img src="images/mvp/2249/Bloody_Branch.png"> Bloody Branch 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Bonus_Coin.png"> Bonus Coin 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Cash_Coin.png"> Cash Coin 50%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Elunium.png"> Enriched Elunium 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Oridecon.png"> Enriched Oridecon 5%</p>
								<p class="text-center"><img src="images/mvp/3332/Twin_Edge_of_Naght_Sieger.gif"> Twin Edge of Naght Sieger 2%</p>
								</div>
							</div>
						  </div>
						</div>
	
						<div class="box-sv box-green" style="margin-top:2em">
						  <div class="box-sv-body">
							<div class="box-text-haeder">Monster : Lilith <small>MOB ID : 3347</small></div>
							<div class="line-box"></div>
							<div class="row">
								<div class="col-lg-3 col-sm-3">
								<p class="text-center"><img src="images/mvp/3347/3169.gif" class="img-rounded" style="margin-top:30px"></p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Map</p>
								<p class="text-center"><img src="images/mvp/3347/nif_fild01.gif" style="width: 120px;" class="img-rounded"></p>
								<p class="text-center">ชื่อแมพ : nif_fild01</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Info</p>
								<p class="text-center">Hp 8388607</p>
								<p class="text-center">Size Large</p>
								<p class="text-center">Race Undead</p>
								<p class="text-center">Element Undead</p>
								<p class="text-center">เวลาเกิด 30 นาที</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Item Drop</p>
								<p class="text-center"><img src="images/mvp/2249/Bloody_Branch.png"> Bloody Branch 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Bonus_Coin.png"> Bonus Coin 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Cash_Coin.png"> Cash Coin 50%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Elunium.png"> Enriched Elunium 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Oridecon.png"> Enriched Oridecon 5%</p>
								<p class="text-center"><img src="images/mvp/3347/Twin_Edge_of_Naght_Sieger.gif"> Twin Edge of Naght Sieger 2%</p>
								</div>
							</div>
						  </div>
						</div>

						<div class="box-sv box-green" style="margin-top:2em">
						  <div class="box-sv-body">
							<div class="box-text-haeder">Monster : Anglerfish <small>MOB ID : 3380</small></div>
							<div class="line-box"></div>
							<div class="row">
								<div class="col-lg-3 col-sm-3">
								<p class="text-center"><img src="images/mvp/3380/3120.gif" class="img-rounded" style="margin-top:30px"></p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Map</p>
								<p class="text-center"><img src="images/mvp/3380/gl_knt01.gif" style="width: 120px;" class="img-rounded"></p>
								<p class="text-center">ชื่อแมพ : gl_knt01</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Info</p>
								<p class="text-center">Hp 8388607</p>
								<p class="text-center">Size Large</p>
								<p class="text-center">Race Undead</p>
								<p class="text-center">Element Undead</p>
								<p class="text-center">เวลาเกิด 30 นาที</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Item Drop</p>
								<p class="text-center"><img src="images/mvp/2249/Bloody_Branch.png"> Bloody Branch 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Bonus_Coin.png"> Bonus Coin 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Cash_Coin.png"> Cash Coin 50%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Elunium.png"> Enriched Elunium 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Oridecon.png"> Enriched Oridecon 5%</p>
								<p class="text-center"><img src="images/mvp/3380/Gigantic_Majestic_Goat.gif"> Gigantic Majestic Goat 1%</p>
								</div>
							</div>
						  </div>
						</div>

						<div class="box-sv box-green" style="margin-top:2em">
						  <div class="box-sv-body">
							<div class="box-text-haeder">Monster : Ragged Golem <small>MOB ID : 3473</small></div>
							<div class="line-box"></div>
							<div class="row">
								<div class="col-lg-3 col-sm-3">
								<p class="text-center"><img src="images/mvp/3473/3161.gif" class="img-rounded" style="margin-top:30px"></p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Map</p>
								<p class="text-center"><img src="images/mvp/3473/moc_fild21.gif" style="width: 120px;" class="img-rounded"></p>
								<p class="text-center">ชื่อแมพ : moc_fild21</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Info</p>
								<p class="text-center">Hp 8388607</p>
								<p class="text-center">Size Large</p>
								<p class="text-center">Race Undead</p>
								<p class="text-center">Element Undead</p>
								<p class="text-center">เวลาเกิด 30 นาที</p>
								</div>
								<div class="col-lg-3 col-sm-3">
								<p class="text-center">Item Drop</p>
								<p class="text-center"><img src="images/mvp/2249/Bloody_Branch.png"> Bloody Branch 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Bonus_Coin.png"> Bonus Coin 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Cash_Coin.png"> Cash Coin 50%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Elunium.png"> Enriched Elunium 5%</p>
								<p class="text-center"><img src="images/mvp/2249/Enriched_Oridecon.png"> Enriched Oridecon 5%</p>
								<p class="text-center"><img src="images/mvp/3473/Valkyrie's_Shield.gif"> Valkyrie's Shield 0.70%</p>
								</div>
							</div>
						  </div>
						</div>

					-->
						</div>
						<div role="tabpanel" class="tab-pane animated fadeInUp in" id="boss_old">
							<div class="box-sv box-green" style="margin-top:2em">
								  <div class="box-sv-body">
									<div class="box-text-haeder"><i class="fas fa-search"></i> Monster : Amon Ra <small>MOB ID : 1511</small></div>
									<div class="line-box"></div>
									<div class="row">
										<div class="col-lg-3 col-sm-3">
										<p class="text-center"><img src="images/mob/1511.gif" class="img-rounded" style="margin-top: 20px"></p>
										</div>
										<div class="col-lg-6 col-sm-6">
										<p class="text-center">Map</p>
										<p class="text-center"><img src="images/mob/moc_pryd06.png" style="width: 120px;" class="img-rounded"></p>
										<p class="text-center">moc_pryd06</p>
										</div>
										<div class="col-lg-3 col-sm-3">
										<p class="text-center">เวลาเกิด</p>
										<p class="text-center" style="margin-top: 60px;font-size: 20px;">1 Hour</p>
										</div>
									</div>
								  </div>
								</div>
								<div class="box-sv box-green">
								  <div class="box-sv-body">
									<div class="box-text-haeder"><i class="fas fa-search"></i> Monster : Atroce <small>MOB ID : 1785</small></div>
									<div class="line-box"></div>
									<div class="row">
										<div class="col-lg-3 col-sm-3">
										<p class="text-center"><img src="images/mob/1785.gif" class="img-rounded" style="margin-top: 30px"></p>
										</div>
										<div class="col-lg-6 col-sm-6">
										<p class="text-center">Map</p>
										<p class="text-center"><img src="images/mob/ra_fild02.png" style="width: 120px;" class="img-rounded"> <img src="images/mob/ve_fild01.png" style="width: 120px;" class="img-rounded"></p>
										<p class="text-center">ra_fild02, ra_fild03, ra_fild04</p>
										<p class="text-center">ve_fild01, ve_fild02</p>
										</div>
										<div class="col-lg-3 col-sm-3">
										<p class="text-center">เวลาเกิด</p>
										<p class="text-center" style="margin-top: 60px;font-size: 20px;">3-6 Hour</p>
										</div>
									</div>
								  </div>
								</div>
								<div class="box-sv box-green">
								  <div class="box-sv-body">
									<div class="box-text-haeder"><i class="fas fa-search"></i> Monster : Bacsojin <small>MOB ID : 1630</small></div>
									<div class="line-box"></div>
									<div class="row">
										<div class="col-lg-3 col-sm-3">
										<p class="text-center"><img src="images/mob/1630.gif" class="img-rounded" style="margin-top: 40px"></p>
										</div>
										<div class="col-lg-6 col-sm-6">
										<p class="text-center">Map</p>
										<p class="text-center"><img src="images/mob/lou_dun03.png" style="width: 120px;" class="img-rounded"></p>
										<p class="text-center">lou_dun03</p>
										</div>
										<div class="col-lg-3 col-sm-3">
										<p class="text-center">เวลาเกิด</p>
										<p class="text-center" style="margin-top: 60px;font-size: 20px;">2 Hour</p>
										</div>
									</div>
								  </div>
								</div>
								<div class="box-sv box-green">
								  <div class="box-sv-body">
									<div class="box-text-haeder"><i class="fas fa-search"></i> Monster : Baphomet  <small>MOB ID : 1039</small></div>
									<div class="line-box"></div>
									<div class="row">
										<div class="col-lg-3 col-sm-3">
										<p class="text-center"><img src="images/mob/1039.gif" class="img-rounded" style="margin-top: 30px"></p>
										</div>
										<div class="col-lg-6 col-sm-6">
										<p class="text-center">Map</p>
										<p class="text-center"><img src="images/mob/prt_maze03.png" style="width: 120px;" class="img-rounded"></p>
										<p class="text-center">prt_maze03</p>
										</div>
										<div class="col-lg-3 col-sm-3">
										<p class="text-center">เวลาเกิด</p>
										<p class="text-center" style="margin-top: 60px;font-size: 20px;">2 Hour</p>
										</div>
									</div>
								  </div>
								</div>
								<div class="box-sv box-green">
								  <div class="box-sv-body">
									<div class="box-text-haeder"><i class="fas fa-search"></i> Monster : Beelzebub <small>MOB ID : 1874</small></div>
									<div class="line-box"></div>
									<div class="row">
										<div class="col-lg-3 col-sm-3">
										<p class="text-center"><img src="images/mob/1874.gif" class="img-rounded" style="margin-top:-10px"></p>
										</div>
										<div class="col-lg-6 col-sm-6">
										<p class="text-center">Map</p>
										<p class="text-center"><img src="images/mob/abbey03.png" style="width: 120px;" class="img-rounded"></p>
										<p class="text-center">abbey03</p>
										</div>
										<div class="col-lg-3 col-sm-3">
										<p class="text-center">เวลาเกิด</p>
										<p class="text-center" style="margin-top: 60px;font-size: 20px;">12 Hour</p>
										</div>
									</div>
								  </div>
								</div>
								<div class="box-sv box-green">
								  <div class="box-sv-body">
									<div class="box-text-haeder"><i class="fas fa-search"></i> Monster : Boitata <small>MOB ID : 2068</small></div>
									<div class="line-box"></div>
									<div class="row">
										<div class="col-lg-3 col-sm-3">
										<p class="text-center"><img src="images/mob/2068.gif" class="img-rounded" style="margin-top:10px"></p>
										</div>
										<div class="col-lg-6 col-sm-6">
										<p class="text-center">Map</p>
										<p class="text-center"><img src="images/mob/bra_dun02.png" style="width: 120px;" class="img-rounded"></p>
										<p class="text-center">bra_dun02</p>
										</div>
										<div class="col-lg-3 col-sm-3">
										<p class="text-center">เวลาเกิด</p>
										<p class="text-center" style="margin-top: 60px;font-size: 20px;">2 Hour</p>
										</div>
									</div>
								  </div>
								</div>
								<div class="box-sv box-green">
								  <div class="box-sv-body">
									<div class="box-text-haeder"><i class="fas fa-search"></i> Monster : Detardeurus <small>MOB ID : 1719</small></div>
									<div class="line-box"></div>
									<div class="row">
										<div class="col-lg-3 col-sm-3">
										<p class="text-center"><img src="images/mob/1719.gif" class="img-rounded" style="margin-top:10px"></p>
										</div>
										<div class="col-lg-6 col-sm-6">
										<p class="text-center">Map</p>
										<p class="text-center"><img src="images/mob/abyss_03.png" style="width: 120px;" class="img-rounded"></p>
										<p class="text-center">abyss_03</p>
										</div>
										<div class="col-lg-3 col-sm-3">
										<p class="text-center">เวลาเกิด</p>
										<p class="text-center" style="margin-top: 60px;font-size: 20px;">2 Hour</p>
										</div>
									</div>
								  </div>
								</div>
								<div class="box-sv box-green">
								  <div class="box-sv-body">
									<div class="box-text-haeder"><i class="fas fa-search"></i> Monster : Dark Lord <small>MOB ID : 1272</small></div>
									<div class="line-box"></div>
									<div class="row">
										<div class="col-lg-3 col-sm-3">
										<p class="text-center"><img src="images/mob/1272.gif" class="img-rounded" style="margin-top:-10px"></p>
										</div>
										<div class="col-lg-6 col-sm-6">
										<p class="text-center">Map</p>
										<p class="text-center"><img src="images/mob/gld_dun04.png" style="width: 120px;" class="img-rounded"> <img src="images/mob/gl_chyard.png" style="width: 120px;" class="img-rounded"></p>
										<p class="text-center">gld_dun04, gl_chyard</p>
										</div>
										<div class="col-lg-3 col-sm-3">
										<p class="text-center">เวลาเกิด</p>
										<p class="text-center" style="margin-top: 60px;font-size: 20px;">1-2 Hour</p>
										</div>
									</div>
								  </div>
								</div>
								<div class="box-sv box-green">
								  <div class="box-sv-body">
									<div class="box-text-haeder"><i class="fas fa-search"></i> Monster : Doppelganger <small>MOB ID : 1046</small></div>
									<div class="line-box"></div>
									<div class="row">
										<div class="col-lg-3 col-sm-3">
										<p class="text-center"><img src="images/mob/1046.gif" class="img-rounded" style="margin-top:50px"></p>
										</div>
										<div class="col-lg-6 col-sm-6">
										<p class="text-center">Map</p>
										<p class="text-center"><img src="images/mob/gef_dun02.png" style="width: 120px;" class="img-rounded"> <img src="images/mob/gld_dun02.png" style="width: 120px;" class="img-rounded"></p>
										<p class="text-center">gef_dun02 , gld_dun02</p>
										</div>
										<div class="col-lg-3 col-sm-3">
										<p class="text-center">เวลาเกิด</p>
										<p class="text-center" style="margin-top: 60px;font-size: 20px;">2-4 Hour</p>
										</div>
									</div>
								  </div>
								</div>
								<div class="box-sv box-green">
								  <div class="box-sv-body">
									<div class="box-text-haeder"><i class="fas fa-search"></i> Monster : Dracula <small>MOB ID : 1389</small></div>
									<div class="line-box"></div>
									<div class="row">
										<div class="col-lg-3 col-sm-3">
										<p class="text-center"><img src="images/mob/1389.gif" class="img-rounded" style="margin-top:20px"></p>
										</div>
										<div class="col-lg-6 col-sm-6">
										<p class="text-center">Map</p>
										<p class="text-center"><img src="images/mob/gef_dun01.png" style="width: 120px;" class="img-rounded"></p>
										<p class="text-center">gef_dun01</p>
										</div>
										<div class="col-lg-3 col-sm-3">
										<p class="text-center">เวลาเกิด</p>
										<p class="text-center" style="margin-top: 60px;font-size: 20px;">1 Hour</p>
										</div>
									</div>
								  </div>
								</div>
								<div class="box-sv box-green">
								  <div class="box-sv-body">
									<div class="box-text-haeder"><i class="fas fa-search"></i> Monster : Drake <small>MOB ID : 1112</small></div>
									<div class="line-box"></div>
									<div class="row">
										<div class="col-lg-3 col-sm-3">
										<p class="text-center"><img src="images/mob/1112.gif" class="img-rounded" style="margin-top:20px"></p>
										</div>
										<div class="col-lg-6 col-sm-6">
										<p class="text-center">Map</p>
										<p class="text-center"><img src="images/mob/treasure02.png" style="width: 120px;" class="img-rounded"></p>
										<p class="text-center">treasure02</p>
										</div>
										<div class="col-lg-3 col-sm-3">
										<p class="text-center">เวลาเกิด</p>
										<p class="text-center" style="margin-top: 60px;font-size: 20px;">2 Hour</p>
										</div>
									</div>
								  </div>
								</div>
								<div class="box-sv box-green">
								  <div class="box-sv-body">
									<div class="box-text-haeder"><i class="fas fa-search"></i> Monster : Eddga <small>MOB ID : 1115</small></div>
									<div class="line-box"></div>
									<div class="row">
										<div class="col-lg-3 col-sm-3">
										<p class="text-center"><img src="images/mob/1115.gif" class="img-rounded" style="margin-top:50px"></p>
										</div>
										<div class="col-lg-6 col-sm-6">
										<p class="text-center">Map</p>
										<p class="text-center"><img src="images/mob/pay_fild11.png" style="width: 120px;" class="img-rounded"></p>
										<p class="text-center">pay_fild11</p>
										</div>
										<div class="col-lg-3 col-sm-3">
										<p class="text-center">เวลาเกิด</p>
										<p class="text-center" style="margin-top: 60px;font-size: 20px;">2 Hour</p>
										</div>
									</div>
								  </div>
								</div>
								<div class="box-sv box-green">
								  <div class="box-sv-body">
									<div class="box-text-haeder"><i class="fas fa-search"></i> Monster : Evil Snake Lord <small>MOB ID : 1418</small></div>
									<div class="line-box"></div>
									<div class="row">
										<div class="col-lg-3 col-sm-3">
										<p class="text-center"><img src="images/mob/1418.gif" class="img-rounded" style="margin-top:20px"></p>
										</div>
										<div class="col-lg-6 col-sm-6">
										<p class="text-center">Map</p>
										<p class="text-center"><img src="images/mob/gon_dun03.png" style="width: 120px;" class="img-rounded"></p>
										<p class="text-center">gon_dun03</p>
										</div>
										<div class="col-lg-3 col-sm-3">
										<p class="text-center">เวลาเกิด</p>
										<p class="text-center" style="margin-top: 60px;font-size: 20px;">2 Hour</p>
										</div>
									</div>
								  </div>
								</div>
								<div class="box-sv box-green">
								  <div class="box-sv-body">
									<div class="box-text-haeder"><i class="fas fa-search"></i> Monster : Fallen Bishop <small>MOB ID : 1871</small></div>
									<div class="line-box"></div>
									<div class="row">
										<div class="col-lg-3 col-sm-3">
										<p class="text-center"><img src="images/mob/1871.gif" class="img-rounded" style="margin-top:10px"></p>
										</div>
										<div class="col-lg-6 col-sm-6">
										<p class="text-center">Map</p>
										<p class="text-center"><img src="images/mob/abbey02.png" style="width: 120px;" class="img-rounded"></p>
										<p class="text-center">abbey02</p>
										</div>
										<div class="col-lg-3 col-sm-3">
										<p class="text-center">เวลาเกิด</p>
										<p class="text-center" style="margin-top: 60px;font-size: 20px;">2 Hour</p>
										</div>
									</div>
								  </div>
								</div>
								<div class="box-sv box-green">
								  <div class="box-sv-body">
									<div class="box-text-haeder"><i class="fas fa-search"></i> Monster : Garm  <small>MOB ID : 1252</small></div>
									<div class="line-box"></div>
									<div class="row">
										<div class="col-lg-3 col-sm-3">
										<p class="text-center"><img src="images/mob/1252.gif" class="img-rounded" style="margin-top:40px"></p>
										</div>
										<div class="col-lg-6 col-sm-6">
										<p class="text-center">Map</p>
										<p class="text-center"><img src="images/mob/xmas_fild01.png" style="width: 120px;" class="img-rounded"></p>
										<p class="text-center">xmas_fild01</p>
										</div>
										<div class="col-lg-3 col-sm-3">
										<p class="text-center">เวลาเกิด</p>
										<p class="text-center" style="margin-top: 60px;font-size: 20px;">2 Hour</p>
										</div>
									</div>
								  </div>
								</div>
								<div class="box-sv box-green">
								  <div class="box-sv-body">
									<div class="box-text-haeder"><i class="fas fa-search"></i> Monster : Gloom Under Night  <small>MOB ID : 1768</small></div>
									<div class="line-box"></div>
									<div class="row">
										<div class="col-lg-3 col-sm-3">
										<p class="text-center"><img src="images/mob/1768.gif" class="img-rounded" style="margin-top:10px"></p>
										</div>
										<div class="col-lg-6 col-sm-6">
										<p class="text-center">Map</p>
										<p class="text-center"><img src="images/mob/ra_san05.png" style="width: 120px;" class="img-rounded"></p>
										<p class="text-center">ra_san05</p>
										</div>
										<div class="col-lg-3 col-sm-3">
										<p class="text-center">เวลาเกิด</p>
										<p class="text-center" style="margin-top: 60px;font-size: 20px;">5 Hour</p>
										</div>
									</div>
								  </div>
								</div>
								<div class="box-sv box-green">
								  <div class="box-sv-body">
									<div class="box-text-haeder"><i class="fas fa-search"></i> Monster : Golden Thief Bug <small>MOB ID : 1086</small></div>
									<div class="line-box"></div>
									<div class="row">
										<div class="col-lg-3 col-sm-3">
										<p class="text-center"><img src="images/mob/1086.gif" class="img-rounded" style="margin-top:80px"></p>
										</div>
										<div class="col-lg-6 col-sm-6">
										<p class="text-center">Map</p>
										<p class="text-center"><img src="images/mob/prt_sewb4.png" style="width: 120px;" class="img-rounded"></p>
										<p class="text-center">prt_sewb4</p>
										</div>
										<div class="col-lg-3 col-sm-3">
										<p class="text-center">เวลาเกิด</p>
										<p class="text-center" style="margin-top: 60px;font-size: 20px;">1 Hour</p>
										</div>
									</div>
								  </div>
								</div>
								<div class="box-sv box-green">
								  <div class="box-sv-body">
									<div class="box-text-haeder"><i class="fas fa-search"></i> Monster : Gopinich <small>MOB ID : 1885</small></div>
									<div class="line-box"></div>
									<div class="row">
										<div class="col-lg-3 col-sm-3">
										<p class="text-center"><img src="images/mob/1885.gif" class="img-rounded" style="margin-top:10px"></p>
										</div>
										<div class="col-lg-6 col-sm-6">
										<p class="text-center">Map</p>
										<p class="text-center"><img src="images/mob/mosk_dun03.png" style="width: 120px;" class="img-rounded"></p>
										<p class="text-center">mosk_dun03</p>
										</div>
										<div class="col-lg-3 col-sm-3">
										<p class="text-center">เวลาเกิด</p>
										<p class="text-center" style="margin-top: 60px;font-size: 20px;">2 Hour</p>
										</div>
									</div>
								  </div>
								</div>
								<div class="box-sv box-green">
								  <div class="box-sv-body">
									<div class="box-text-haeder"><i class="fas fa-search"></i> Monster : Ifrit <small>MOB ID : 1832</small></div>
									<div class="line-box"></div>
									<div class="row">
										<div class="col-lg-3 col-sm-3">
										<p class="text-center"><img src="images/mob/1832.gif" class="img-rounded" style="margin-top:-10px"></p>
										</div>
										<div class="col-lg-6 col-sm-6">
										<p class="text-center">Map</p>
										<p class="text-center"><img src="images/mob/thor_v03.png" style="width: 120px;" class="img-rounded"></p>
										<p class="text-center">thor_v03</p>
										</div>
										<div class="col-lg-3 col-sm-3">
										<p class="text-center">เวลาเกิด</p>
										<p class="text-center" style="margin-top: 60px;font-size: 20px;">11-12 Hour</p>
										</div>
									</div>
								  </div>
								</div>
								<div class="box-sv box-green">
								  <div class="box-sv-body">
									<div class="box-text-haeder"><i class="fas fa-search"></i> Monster : Incantation Samurai <small>MOB ID : 1492</small></div>
									<div class="line-box"></div>
									<div class="row">
										<div class="col-lg-3 col-sm-3">
										<p class="text-center"><img src="images/mob/1492.gif" class="img-rounded" style="margin-top:-10px"></p>
										</div>
										<div class="col-lg-6 col-sm-6">
										<p class="text-center">Map</p>
										<p class="text-center"><img src="images/mob/ama_dun03.png" style="width: 120px;" class="img-rounded"></p>
										<p class="text-center">ama_dun03</p>
										</div>
										<div class="col-lg-3 col-sm-3">
										<p class="text-center">เวลาเกิด</p>
										<p class="text-center" style="margin-top: 60px;font-size: 20px;">1.30 Hour</p>
										</div>
									</div>
								  </div>
								</div>
								<div class="box-sv box-green">
								  <div class="box-sv-body">
									<div class="box-text-haeder"><i class="fas fa-search"></i> Monster : Kiel D-01 <small>MOB ID : 1734</small></div>
									<div class="line-box"></div>
									<div class="row">
										<div class="col-lg-3 col-sm-3">
										<p class="text-center"><img src="images/mob/1734.gif" class="img-rounded" style="margin-top:20px"></p>
										</div>
										<div class="col-lg-6 col-sm-6">
										<p class="text-center">Map</p>
										<p class="text-center"><img src="images/mob/kh_dun02.png" style="width: 120px;" class="img-rounded"></p>
										<p class="text-center">kh_dun02</p>
										</div>
										<div class="col-lg-3 col-sm-3">
										<p class="text-center">เวลาเกิด</p>
										<p class="text-center" style="margin-top: 60px;font-size: 20px;">2.30 Hour</p>
										</div>
									</div>
								  </div>
								</div>
								<div class="box-sv box-green">
								  <div class="box-sv-body">
									<div class="box-text-haeder"><i class="fas fa-search"></i> Monster : Stormy Knight <small>MOB ID : 1251</small></div>
									<div class="line-box"></div>
									<div class="row">
										<div class="col-lg-3 col-sm-3">
										<p class="text-center"><img src="images/mob/1251.gif" class="img-rounded" style="margin-top:20px"></p>
										</div>
										<div class="col-lg-6 col-sm-6">
										<p class="text-center">Map</p>
										<p class="text-center"><img src="images/mob/xmas_dun02.png" style="width: 120px;" class="img-rounded"></p>
										<p class="text-center">xmas_dun02</p>
										</div>
										<div class="col-lg-3 col-sm-3">
										<p class="text-center">เวลาเกิด</p>
										<p class="text-center" style="margin-top: 60px;font-size: 20px;">1 Hour</p>
										</div>
									</div>
								  </div>
								</div>
								<div class="box-sv box-green">
								  <div class="box-sv-body">
									<div class="box-text-haeder"><i class="fas fa-search"></i> Monster : Ktullanux <small>MOB ID : 1779</small></div>
									<div class="line-box"></div>
									<div class="row">
										<div class="col-lg-3 col-sm-3">
										<p class="text-center"><img src="images/mob/1779.gif" class="img-rounded" style="margin-top:10px"></p>
										</div>
										<div class="col-lg-6 col-sm-6">
										<p class="text-center">Map</p>
										<p class="text-center"><img src="images/mob/ice_dun03.png" style="width: 120px;" class="img-rounded"></p>
										<p class="text-center">ice_dun03</p>
										</div>
										<div class="col-lg-3 col-sm-3">
										<p class="text-center">เวลาเกิด</p>
										<p class="text-center" style="margin-top: 60px;font-size: 20px;">4-8 Hour</p>
										</div>
									</div>
								  </div>
								</div>
								<div class="box-sv box-green">
								  <div class="box-sv-body">
									<div class="box-text-haeder"><i class="fas fa-search"></i> Monster : Lady Tanee <small>MOB ID : 1688</small></div>
									<div class="line-box"></div>
									<div class="row">
										<div class="col-lg-3 col-sm-3">
										<p class="text-center"><img src="images/mob/1688.gif" class="img-rounded" style="margin-top:10px"></p>
										</div>
										<div class="col-lg-6 col-sm-6">
										<p class="text-center">Map</p>
										<p class="text-center"><img src="images/mob/ayo_dun02.png" style="width: 120px;" class="img-rounded"></p>
										<p class="text-center">ayo_dun02</p>
										</div>
										<div class="col-lg-3 col-sm-3">
										<p class="text-center">เวลาเกิด</p>
										<p class="text-center" style="margin-top: 60px;font-size: 20px;">7 Hour</p>
										</div>
									</div>
								  </div>
								</div>
								<div class="box-sv box-green">
								  <div class="box-sv-body">
									<div class="box-text-haeder"><i class="fas fa-search"></i> Monster : Lord of Death <small>MOB ID : 1373</small></div>
									<div class="line-box"></div>
									<div class="row">
										<div class="col-lg-3 col-sm-3">
										<p class="text-center"><img src="images/mob/1373.gif" class="img-rounded" style="margin-top:-20px"></p>
										</div>
										<div class="col-lg-6 col-sm-6">
										<p class="text-center">Map</p>
										<p class="text-center"><img src="images/mob/niflheim.png" style="width: 120px;" class="img-rounded"></p>
										<p class="text-center">niflheim</p>
										</div>
										<div class="col-lg-3 col-sm-3">
										<p class="text-center">เวลาเกิด</p>
										<p class="text-center" style="margin-top: 60px;font-size: 20px;">2 Hour</p>
										</div>
									</div>
								  </div>
								</div>
								<div class="box-sv box-green">
								  <div class="box-sv-body">
									<div class="box-text-haeder"><i class="fas fa-search"></i> Monster : Maya <small>MOB ID : 1147</small></div>
									<div class="line-box"></div>
									<div class="row">
										<div class="col-lg-3 col-sm-3">
										<p class="text-center"><img src="images/mob/1147.gif" class="img-rounded" style="margin-top:10px"></p>
										</div>
										<div class="col-lg-6 col-sm-6">
										<p class="text-center">Map</p>
										<p class="text-center"><img src="images/mob/anthell02.png" style="width: 120px;" class="img-rounded"> <img src="images/mob/gld_dun03.png" style="width: 120px;" class="img-rounded"></p>
										<p class="text-center">anthell02 , gld_dun03</p>
										</div>
										<div class="col-lg-3 col-sm-3">
										<p class="text-center">เวลาเกิด</p>
										<p class="text-center" style="margin-top: 60px;font-size: 20px;">2-4 Hour</p>
										</div>
									</div>
								  </div>
								</div>
								<div class="box-sv box-green">
								  <div class="box-sv-body">
									<div class="box-text-haeder"><i class="fas fa-search"></i> Monster : Mistress <small>MOB ID : 1059</small></div>
									<div class="line-box"></div>
									<div class="row">
										<div class="col-lg-3 col-sm-3">
										<p class="text-center"><img src="images/mob/1059.gif" class="img-rounded" style="margin-top:50px"></p>
										</div>
										<div class="col-lg-6 col-sm-6">
										<p class="text-center">Map</p>
										<p class="text-center"><img src="images/mob/mjolnir_04.png" style="width: 120px;" class="img-rounded"></p>
										<p class="text-center">mjolnir_04</p>
										</div>
										<div class="col-lg-3 col-sm-3">
										<p class="text-center">เวลาเกิด</p>
										<p class="text-center" style="margin-top: 60px;font-size: 20px;">2 Hour</p>
										</div>
									</div>
								  </div>
								</div>
								<div class="box-sv box-green">
								  <div class="box-sv-body">
									<div class="box-text-haeder"><i class="fas fa-search"></i> Monster : Moonlight Flower <small>MOB ID : 1150</small></div>
									<div class="line-box"></div>
									<div class="row">
										<div class="col-lg-3 col-sm-3">
										<p class="text-center"><img src="images/mob/1150.gif" class="img-rounded" style="margin-top:50px"></p>
										</div>
										<div class="col-lg-6 col-sm-6">
										<p class="text-center">Map</p>
										<p class="text-center"><img src="images/mob/pay_dun04.png" style="width: 120px;" class="img-rounded"></p>
										<p class="text-center">pay_dun04</p>
										</div>
										<div class="col-lg-3 col-sm-3">
										<p class="text-center">เวลาเกิด</p>
										<p class="text-center" style="margin-top: 60px;font-size: 20px;">1 Hour</p>
										</div>
									</div>
								  </div>
								</div>
								<div class="box-sv box-green">
								  <div class="box-sv-body">
									<div class="box-text-haeder"><i class="fas fa-search"></i> Monster : Orc Hero <small>MOB ID : 1087</small></div>
									<div class="line-box"></div>
									<div class="row">
										<div class="col-lg-3 col-sm-3">
										<p class="text-center"><img src="images/mob/1087.gif" class="img-rounded" style="margin-top:10px"></p>
										</div>
										<div class="col-lg-6 col-sm-6">
										<p class="text-center">Map</p>
										<p class="text-center"><img src="images/mob/gef_fild02.png" style="width: 120px;" class="img-rounded"> <img src="images/mob/gef_fild14.png" style="width: 120px;" class="img-rounded"></p>
										<p class="text-center">gef_fild02 , gef_fild14</p>
										</div>
										<div class="col-lg-3 col-sm-3">
										<p class="text-center">เวลาเกิด</p>
										<p class="text-center" style="margin-top: 60px;font-size: 20px;">1 Hour</p>
										</div>
									</div>
								  </div>
								</div>
								<div class="box-sv box-green">
								  <div class="box-sv-body">
									<div class="box-text-haeder"><i class="fas fa-search"></i> Monster : Orc Lord <small>MOB ID : 1190</small></div>
									<div class="line-box"></div>
									<div class="row">
										<div class="col-lg-3 col-sm-3">
										<p class="text-center"><img src="images/mob/1190.gif" class="img-rounded" style="margin-top:20px"></p>
										</div>
										<div class="col-lg-6 col-sm-6">
										<p class="text-center">Map</p>
										<p class="text-center"><img src="images/mob/gef_fild10.png" style="width: 120px;" class="img-rounded"></p>
										<p class="text-center">gef_fild10</p>
										</div>
										<div class="col-lg-3 col-sm-3">
										<p class="text-center">เวลาเกิด</p>
										<p class="text-center" style="margin-top: 60px;font-size: 20px;">2 Hour</p>
										</div>
									</div>
								  </div>
								</div>
								<div class="box-sv box-green">
								  <div class="box-sv-body">
									<div class="box-text-haeder"><i class="fas fa-search"></i> Monster : Osiris <small>MOB ID : 1038</small></div>
									<div class="line-box"></div>
									<div class="row">
										<div class="col-lg-3 col-sm-3">
										<p class="text-center"><img src="images/mob/1038.gif" class="img-rounded" style="margin-top:50px"></p>
										</div>
										<div class="col-lg-6 col-sm-6">
										<p class="text-center">Map</p>
										<p class="text-center"><img src="images/mob/moc_pryd04.png" style="width: 120px;" class="img-rounded"></p>
										<p class="text-center">moc_pryd04</p>
										</div>
										<div class="col-lg-3 col-sm-3">
										<p class="text-center">เวลาเกิด</p>
										<p class="text-center" style="margin-top: 60px;font-size: 20px;">1 Hour</p>
										</div>
									</div>
								  </div>
								</div>
								<div class="box-sv box-green">
								  <div class="box-sv-body">
									<div class="box-text-haeder"><i class="fas fa-search"></i> Monster : Pharaoh <small>MOB ID : 1157</small></div>
									<div class="line-box"></div>
									<div class="row">
										<div class="col-lg-3 col-sm-3">
										<p class="text-center"><img src="images/mob/1157.gif" class="img-rounded" style="margin-top:20px"></p>
										</div>
										<div class="col-lg-6 col-sm-6">
										<p class="text-center">Map</p>
										<p class="text-center"><img src="images/mob/in_sphinx5.png" style="width: 120px;" class="img-rounded"></p>
										<p class="text-center">in_sphinx5</p>
										</div>
										<div class="col-lg-3 col-sm-3">
										<p class="text-center">เวลาเกิด</p>
										<p class="text-center" style="margin-top: 60px;font-size: 20px;">1 Hour</p>
										</div>
									</div>
								  </div>
								</div>
								<div class="box-sv box-green">
								  <div class="box-sv-body">
									<div class="box-text-haeder"><i class="fas fa-search"></i> Monster : Phreeoni <small>MOB ID : 1159</small></div>
									<div class="line-box"></div>
									<div class="row">
										<div class="col-lg-3 col-sm-3">
										<p class="text-center"><img src="images/mob/1159.gif" class="img-rounded" style="margin-top:50px"></p>
										</div>
										<div class="col-lg-6 col-sm-6">
										<p class="text-center">Map</p>
										<p class="text-center"><img src="images/mob/moc_fild17.png" style="width: 120px;" class="img-rounded"></p>
										<p class="text-center">moc_fild17</p>
										</div>
										<div class="col-lg-3 col-sm-3">
										<p class="text-center">เวลาเกิด</p>
										<p class="text-center" style="margin-top: 60px;font-size: 20px;">2 Hour</p>
										</div>
									</div>
								  </div>
								</div>
								<div class="box-sv box-green">
								  <div class="box-sv-body">
									<div class="box-text-haeder"><i class="fas fa-search"></i> Monster : RSX 0806 <small>MOB ID : 1623</small></div>
									<div class="line-box"></div>
									<div class="row">
										<div class="col-lg-3 col-sm-3">
										<p class="text-center"><img src="images/mob/1623.gif" class="img-rounded" style="margin-top:-10px"></p>
										</div>
										<div class="col-lg-6 col-sm-6">
										<p class="text-center">Map</p>
										<p class="text-center"><img src="images/mob/ein_dun02.png" style="width: 120px;" class="img-rounded"></p>
										<p class="text-center">ein_dun02</p>
										</div>
										<div class="col-lg-3 col-sm-3">
										<p class="text-center">เวลาเกิด</p>
										<p class="text-center" style="margin-top: 60px;font-size: 20px;">2.30 Hour</p>
										</div>
									</div>
								  </div>
								</div>
								<div class="box-sv box-green">
								  <div class="box-sv-body">
									<div class="box-text-haeder"><i class="fas fa-search"></i> Monster : Tao Gunka <small>MOB ID : 1583</small></div>
									<div class="line-box"></div>
									<div class="row">
										<div class="col-lg-3 col-sm-3">
										<p class="text-center"><img src="images/mob/1583.gif" class="img-rounded" style="margin-top:20px"></p>
										</div>
										<div class="col-lg-6 col-sm-6">
										<p class="text-center">Map</p>
										<p class="text-center"><img src="images/mob/beach_dun.png" style="width: 120px;" class="img-rounded"></p>
										<p class="text-center">beach_dun</p>
										</div>
										<div class="col-lg-3 col-sm-3">
										<p class="text-center">เวลาเกิด</p>
										<p class="text-center" style="margin-top: 60px;font-size: 20px;">5 Hour</p>
										</div>
									</div>
								  </div>
								</div>
								<div class="box-sv box-green">
								  <div class="box-sv-body">
									<div class="box-text-haeder"><i class="fas fa-search"></i> Monster : Thanatos / Memory of Thanatos <small>MOB ID : 1708</small></div>
									<div class="line-box"></div>
									<div class="row">
										<div class="col-lg-3 col-sm-3">
										<p class="text-center"><img src="images/mob/1708.gif" class="img-rounded" style="margin-top:20px"></p>
										</div>
										<div class="col-lg-6 col-sm-6">
										<p class="text-center">Map</p>
										<p class="text-center"><img src="images/mob/thana_boss.png" style="width: 120px;" class="img-rounded"></p>
										<p class="text-center">thana_boss</p>
										</div>
										<div class="col-lg-3 col-sm-3">
										<p class="text-center">เวลาเกิด</p>
										<p class="text-center" style="margin-top: 60px;font-size: 20px;">8 Hour</p>
										</div>
									</div>
								  </div>
								</div>
								<div class="box-sv box-green">
								  <div class="box-sv-body">
									<div class="box-text-haeder"><i class="fas fa-search"></i> Monster : Valkyrie Randgris <small>MOB ID : 1751</small></div>
									<div class="line-box"></div>
									<div class="row">
										<div class="col-lg-3 col-sm-3">
										<p class="text-center"><img src="images/mob/1751.gif" class="img-rounded" style="margin-top:10px"></p>
										</div>
										<div class="col-lg-6 col-sm-6">
										<p class="text-center">Map</p>
										<p class="text-center"><img src="images/mob/odin_tem03.png" style="width: 120px;" class="img-rounded"></p>
										<p class="text-center">odin_tem03</p>
										</div>
										<div class="col-lg-3 col-sm-3">
										<p class="text-center">เวลาเกิด</p>
										<p class="text-center" style="margin-top: 60px;font-size: 20px;">8 Hour</p>
										</div>
									</div>
								  </div>
								</div>
								<div class="box-sv box-green">
								  <div class="box-sv-body">
									<div class="box-text-haeder"><i class="fas fa-search"></i> Monster : Vesper <small>MOB ID : 1685</small></div>
									<div class="line-box"></div>
									<div class="row">
										<div class="col-lg-3 col-sm-3">
										<p class="text-center"><img src="images/mob/1685.gif" class="img-rounded" style="margin-top:-5px"></p>
										</div>
										<div class="col-lg-6 col-sm-6">
										<p class="text-center">Map</p>
										<p class="text-center"><img src="images/mob/jupe_core.png" style="width: 120px;" class="img-rounded"></p>
										<p class="text-center">jupe_core</p>
										</div>
										<div class="col-lg-3 col-sm-3">
										<p class="text-center">เวลาเกิด</p>
										<p class="text-center" style="margin-top: 60px;font-size: 20px;">2 Hour</p>
										</div>
									</div>
								  </div>
								</div>
								<div class="box-sv box-green">
								  <div class="box-sv-body">
									<div class="box-text-haeder"><i class="fas fa-search"></i> Monster : Wounded Morroc <small>MOB ID : 1917</small></div>
									<div class="line-box"></div>
									<div class="row">
										<div class="col-lg-3 col-sm-3">
										<p class="text-center"><img src="images/mob/1917.gif" class="img-rounded" style="margin-top:-10px"></p>
										</div>
										<div class="col-lg-6 col-sm-6">
										<p class="text-center">Map</p>
										<p class="text-center"><img src="images/mob/moc_fild22.png" style="width: 120px;" class="img-rounded"></p>
										<p class="text-center">moc_fild22</p>
										</div>
										<div class="col-lg-3 col-sm-3">
										<p class="text-center">เวลาเกิด</p>
										<p class="text-center" style="margin-top: 60px;font-size: 20px;">12 Hour</p>
										</div>
									</div>
								  </div>
								</div>
								<div class="box-sv box-green">
								  <div class="box-sv-body">
									<div class="box-text-haeder"><i class="fas fa-search"></i> <i class="fas fa-search"></i> Monster : Ygnizem / Egnigem Cenia <small>MOB ID : 1658</small></div>
									<div class="line-box"></div>
									<div class="row">
										<div class="col-lg-3 col-sm-3">
										<p class="text-center"><img src="images/mob/1658.gif" class="img-rounded" style="margin-top:30px"></p>
										</div>
										<div class="col-lg-6 col-sm-6">
										<p class="text-center">Map</p>
										<p class="text-center"><img src="images/mob/lhz_dun02.png" style="width: 120px;" class="img-rounded"></p>
										<p class="text-center">lhz_dun02</p>
										</div>
										<div class="col-lg-3 col-sm-3">
										<p class="text-center">เวลาเกิด</p>
										<p class="text-center" style="margin-top: 60px;font-size: 20px;">2 Hour</p>
										</div>
									</div>
								  </div>
								</div>
								<div class="box-sv box-green">
								  <div class="box-sv-body">
									<div class="box-text-haeder"><i class="fas fa-search"></i> Monster : Assassin Cross Eremes <small>MOB ID : 1647</small></div>
									<div class="line-box"></div>
									<div class="row">
										<div class="col-lg-3 col-sm-3">
										<p class="text-center"><img src="images/mob/1647.gif" class="img-rounded" style="margin-top:30px"></p>
										</div>
										<div class="col-lg-6 col-sm-6">
										<p class="text-center">Map</p>
										<p class="text-center"><img src="images/mob/lhz_dun03.png" style="width: 120px;" class="img-rounded"></p>
										<p class="text-center">lhz_dun03</p>
										</div>
										<div class="col-lg-3 col-sm-3">
										<p class="text-center">เวลาเกิด</p>
										<p class="text-center" style="margin-top: 60px;font-size: 20px;">1.30 Hour</p>
										</div>
									</div>
								  </div>
								</div>
								<div class="box-sv box-green">
								  <div class="box-sv-body">
									<div class="box-text-haeder"><i class="fas fa-search"></i> Monster : High Priest Magaleta <small>MOB ID : 1649</small></div>
									<div class="line-box"></div>
									<div class="row">
										<div class="col-lg-3 col-sm-3">
										<p class="text-center"><img src="images/mob/1649.gif" class="img-rounded" style="margin-top:30px"></p>
										</div>
										<div class="col-lg-6 col-sm-6">
										<p class="text-center">Map</p>
										<p class="text-center"><img src="images/mob/lhz_dun03.png" style="width: 120px;" class="img-rounded"></p>
										<p class="text-center">lhz_dun03</p>
										</div>
										<div class="col-lg-3 col-sm-3">
										<p class="text-center">เวลาเกิด</p>
										<p class="text-center" style="margin-top: 60px;font-size: 20px;">1.30 Hour</p>
										</div>
									</div>
								  </div>
								</div>
								<div class="box-sv box-green">
								  <div class="box-sv-body">
									<div class="box-text-haeder"><i class="fas fa-search"></i> Monster : High Wizard Katrinn <small>MOB ID : 1651</small></div>
									<div class="line-box"></div>
									<div class="row">
										<div class="col-lg-3 col-sm-3">
										<p class="text-center"><img src="images/mob/1651.gif" class="img-rounded" style="margin-top:30px"></p>
										</div>
										<div class="col-lg-6 col-sm-6">
										<p class="text-center">Map</p>
										<p class="text-center"><img src="images/mob/lhz_dun03.png" style="width: 120px;" class="img-rounded"></p>
										<p class="text-center">lhz_dun03</p>
										</div>
										<div class="col-lg-3 col-sm-3">
										<p class="text-center">เวลาเกิด</p>
										<p class="text-center" style="margin-top: 60px;font-size: 20px;">1.30 Hour</p>
										</div>
									</div>
								  </div>
								</div>
								<div class="box-sv box-green">
								  <div class="box-sv-body">
									<div class="box-text-haeder"><i class="fas fa-search"></i> Monster : Lord Knight Seyren <small>MOB ID : 1646</small></div>
									<div class="line-box"></div>
									<div class="row">
										<div class="col-lg-3 col-sm-3">
										<p class="text-center"><img src="images/mob/1646.gif" class="img-rounded" style="margin-top:30px"></p>
										</div>
										<div class="col-lg-6 col-sm-6">
										<p class="text-center">Map</p>
										<p class="text-center"><img src="images/mob/lhz_dun03.png" style="width: 120px;" class="img-rounded"></p>
										<p class="text-center">lhz_dun03</p>
										</div>
										<div class="col-lg-3 col-sm-3">
										<p class="text-center">เวลาเกิด</p>
										<p class="text-center" style="margin-top: 60px;font-size: 20px;">1.30 Hour</p>
										</div>
									</div>
								  </div>
								</div>
								<div class="box-sv box-green">
								  <div class="box-sv-body">
									<div class="box-text-haeder"><i class="fas fa-search"></i> Monster : Sniper Shecil / Sniper Cecil <small>MOB ID : 1650</small></div>
									<div class="line-box"></div>
									<div class="row">
										<div class="col-lg-3 col-sm-3">
										<p class="text-center"><img src="images/mob/1650.gif" class="img-rounded" style="margin-top:30px"></p>
										</div>
										<div class="col-lg-6 col-sm-6">
										<p class="text-center">Map</p>
										<p class="text-center"><img src="images/mob/lhz_dun03.png" style="width: 120px;" class="img-rounded"></p>
										<p class="text-center">lhz_dun03</p>
										</div>
										<div class="col-lg-3 col-sm-3">
										<p class="text-center">เวลาเกิด</p>
										<p class="text-center" style="margin-top: 60px;font-size: 20px;">1.30 Hour</p>
										</div>
									</div>
								  </div>
								</div>
								<div class="box-sv box-green">
								  <div class="box-sv-body">
									<div class="box-text-haeder"><i class="fas fa-search"></i> Monster : Whitesmith Harword <small>MOB ID : 1648</small></div>
									<div class="line-box"></div>
									<div class="row">
										<div class="col-lg-3 col-sm-3">
										<p class="text-center"><img src="images/mob/1648.gif" class="img-rounded" style="margin-top:30px"></p>
										</div>
										<div class="col-lg-6 col-sm-6">
										<p class="text-center">Map</p>
										<p class="text-center"><img src="images/mob/lhz_dun03.png" style="width: 120px;" class="img-rounded"></p>
										<p class="text-center">lhz_dun03</p>
										</div>
										<div class="col-lg-3 col-sm-3">
										<p class="text-center">เวลาเกิด</p>
										<p class="text-center" style="margin-top: 60px;font-size: 20px;">1.30 Hour</p>
										</div>
									</div>
								  </div>
								</div>
						</div>
				</div>
				</div>
          	</div>
		  </div>
		  <div class="ui segment">
			<a class="ui tag label">เวลาบอส</a>
			<a class="ui tag label">ข้อมูลบอส</a>
			<a class="ui tag label">ไอเท็มดรอป</a>
			<a class="ui tag label">บอสใหม่</a>
			<a class="ui tag label">coin</a>
			<a class="ui tag label">mvp</a>
			<a class="ui tag label">time</a>
			<a class="ui tag label">boss</a>
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