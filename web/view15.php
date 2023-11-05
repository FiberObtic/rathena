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
					<i class="far fa-clock"></i> สร้างเมื่อ : <time class="timeago" datetime="2023-10-22 15:50:00" title="อาทิตย์,22 ตุลาคม 2562 15.50"></time> 
					<a href="<? echo $link_fanpage; ?>" target="_blank"><i class="fab fa-facebook-square fa-lg" style="color:#5555ff;padding-left:1em"></i></a>
				</div>
			  </div>
			  <div class="ui segment">
				<div class="main-header">
					<span>ประกาศ : อัพเดทและแก้ไขต่างๆ 22.10.66</span>
					<p style="font-size:12px;font-weight: normal;">รายละเอียดกิจกรรม</p>
				</div>
				<!-- Text Event -->
				
<p>ประกาศ : อัพเดทและแก้ไขต่างๆ 22/10/66</p>

<p>&nbsp;</p>

<p>อัพเดท NPC<br />
- NPC Volcano Craft : เพิ่มไอเทมคราฟต่างๆ<br />
- NPC รับซื้อการ์ด : เพิ่มการ์ดเซ็ทให้แลกซื้อ , ปรับราคารับซื้อการ์ดปกติเพิ่มจากเดิมเป็น 2 แต้ม<br />
- NPC รับบัพ MVP : รับบัพพิเศษสำหรับ MVP ประจำสัปดาห์และรางวัลอันดับประจำสัปดาห์ (อันดับ 1. 30,000 Cash / 2. 10,000 Cash / 3. 5,000 Cash)<br />
- NPC รับรางวัล PVP : รับรางวัลอันดับประจำสัปดาห์ (อันดับ 1. 30,000 Cash / 2. 10,000 Cash / 3. 5,000 Cash)<br />
- Guild War : แก้ไขรางวัลหลังจบกิจกรรม กิลด์ที่ชนะจะได้รับ Cash Point จากเดิม 20,000 Cash เป็น 100,000 Cash และไอเทมอื่นๆ (ได้ทุกปราสาท)</p>

<p>&nbsp;</p>

<p>อัพเดทกิจกรรม<br />
- กิจกรรม Daily Login : รับไอเทมตามจำนวนวันที่สมาชิก Login<br />
- กิจกรรม Guild War : รับรางวัลต่างๆ และ รางวัลเงินสด รวมรางวัลมูลค่ามากกว่า 200,000 บาท<br />
- กิจกรรม MVP Ranking : รับรางวัลประจำสัปดาห์ และ รางวัลเงินสดประจำเดือน รวมรางวัลมูลค่ามากกว่า 10,000 บาท<br />
- กิจกรรม PVP Ranking : รับรางวัลประจำสัปดาห์ และ รางวัลเงินสดประจำเดือน รวมรางวัลมูลค่ามากกว่า 7,000 บาท</p>

<p>&nbsp;</p>

<p>แก้ไข Rate<br />
- ปรับ Rate : การตีบวก อาวุธ ชุดเกราะ มีโอกาสเพิ่มขึ้น</p>

<p>&nbsp;</p>

<p>อัพเดทของต่างๆใน Cash Shop<br />
- เพิ่ม item : ของกดใช้ยาปั้มยาบัฟต่างๆ และ อุปกรณ์สวมใส่</p>

<p>&nbsp;</p>

<p>อัพเดทบัพเพิ่มเติม Premium Service<br />
- Premium Service : รับบัฟพิเศษเพิ่มเติม ATK , MATK +20% เฉพาะในดันเจี้ยน 100 ชั้น (Endless Tower)</p>

<p>&nbsp;</p>

<p>แก้ไขการเก็บคะแนนสะสม Battle Pass<br />
Battle Pass : ปรับการเก็บแต้มสะสม และ Exp ดังนี้<br />
- DailyQuest ให้คะแนนสะสม 10 คะแนน ให้ Exp Lv 20 คะแนน&nbsp;<br />
- ล่า MVP ให้คะแนนสะสม 3 คะแนน ให้ Exp Lv 5 คะแนน<br />
- 100ชั้น ให้คะแนนสะสม 100 คะแนน ให้ Exp Lv 100 คะแนน&nbsp;<br />
- ตอบคำ ปริศนาฟ้าแลบ ให้คะแนนสะสม 2 คะแนน ให้ Exp Lv 2 คะแนน<br />
- Battle Pass Max Reward รางวัล Lv. BP เต็ม 10 เพิ่ม All Stats +5 (อยู่ได้ 7 วัน)</p>

<p>&nbsp;</p>

<p>อัพเดท Maps และ Dungeon<br />
- El Dicastes Field<br />
- Brasilis Dungeon<br />
- Splendide Fiels<br />
- Glast Heim Instance (Old GH)<br />
- Hero&#39;s Trail - Faceworm Nest<br />
- Thanatos และ Thanatos ชั้น Boss<br />
- BOSSNIA DUNGEON (สามารถลงได้เลเวล 99/70 ลงได้ทุกวัน พุทธ ศุกร์ เสาร์ อาทิตย์ เวลา 19.00-20.00)<br />
- Memorial Dungeon &lsquo;Central Laboratory&rsquo; (สามารถลงได้เลเวล 99/70 ดีเลย์ 24ชม. ตามตัวละคร)<br />
- ดันเจี้ยนพิเศษ Bokonawa Lake<br />
- ดันเจี้ยนพิเศษ Buwaya Cave<br />
- Malaya Fiels</p>

<p>&nbsp;</p>

<p>แก้ไข Costume อาวุธ<br />
- Costume อาวุธ Hunter : Blitz Beat +200% / Double Strafe +25% / Sharp Shoothing +25%<br />
- Costume อาวุธ Asssasin : Sonic blow +50% / Critical +30% / ASPD +10%<br />
- Costume อาวุธ Knight : Spiral pierce +50% / Bowling +75%<br />
- Costume อาวุธ Blacksmith : Cart Terminal +30%<br />
- Costume อาวุธ Alchemist : Memmonite +50% / Acid Demotetion +30%<br />
- Costume อาวุธ Wizzard : StomGust +30% / Lordofvemilion +30% /MeteorStorm +30%<br />
- Costume อาวุธ Crusader : Scacrifice +30% / ShieldChain +30%</p>

<p>&nbsp;</p>

<p>เว็บหลัก :&nbsp;<a href="https://volcano-ro.co">https://volcano-ro.co</a></p>

<p>แฟนเพจ :&nbsp;<a href="https://www.facebook.com/volcano.hiclass">https://www.facebook.com/volcano.hiclass</a></p>

<p>กลุ่มซื้อขาย :&nbsp;<a href="https://www.facebook.com/groups/volcanoro.market">https://www.facebook.com/groups/volcanoro.market</a></p>

<p>&nbsp;</p>



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