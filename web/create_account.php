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
			  <a href="./" class="section">Home</a>
			  <div class="divider"> / </div>
			  <div class="active section">Create Account</div>
			</div>
			<div class="pull-right date-right"><i class="far fa-clock"></i> สร้างเมื่อ : <time class="timeago" datetime="2019-10-17 17:09:00" title="พฤหัส,17 ตุลาคม 2562 17.09"></time> <a href="<? echo $link_fanpage; ?>" target="_blank"><i class="fab fa-facebook-square fa-lg" style="color:#5555ff;padding-left:1em"></i></a></div>
		  </div>
		  <div class="ui segment">
			<div class="main-header">
				<span>Create Account</span>
				<p style="font-size:12px;font-weight: normal;">สร้างบัญชีผู้ใช้งาน สำหรับเข้าเล่นเกมส์</p>
			</div>
				<div id="alert_createuser" style="margin-top:20px"></div>
				<form class="ui form" method="post" id="add_account">
				  <div class="two fields">
					<div class="required field">
					  <label>Username / ID</label>
					  <input placeholder="ไอดีผู้ใช้งาน" type="text" name="eddga_userid" style="letter-spacing:0.1em" autofocus required>
					</div>
					<div class="required field">
					  <label>Gender</label>
					  <div class="ui selection dropdown">
						  <input type="hidden" name="eddga_gender">
						  <i class="dropdown icon"></i>
						  <div class="default text">เลือกเพศตัวละคร</div>
						  <div class="menu">
							  <div class="item" data-value="M">Male</div>
							  <div class="item" data-value="F">Female</div>
						  </div>
					  </div>
					</div>
				  </div>
				  <div class="two fields">
					<div class="required field">
					  <label>Password</label>
					  <input placeholder="รหัสผ่านของคุณ" type="password" name="eddga_pass" style="letter-spacing:0.1em" autofocus required>
					</div>
					<div class="required field">
					  <label>Password Confirm</label>
					  <input placeholder="ยืนยันรหัสผ่านของคุณ" type="password" name="eddga_passcfm" style="letter-spacing:0.1em" autofocus required>
					</div>
				  </div>
				  <div class="required field">
					<label>Email</label>
					<input type="email" placeholder="อีเมล์ที่ใช้งานได้จริง" name="eddga_email" style="letter-spacing:0.1em" autofocus required>
				  </div>
				  <div class="required field">
					<label>BirthDate</label>
					<div class="three fields">
					  <div class="field">
						<select class="ui fluid dropdown" name="eddga_day">
						<?
						$i=1;
						$day = date('d');
						while($i<=31){
							$sel = ($i == $day) ? ' selected="selected"' : '';
							if($i<=9){

								echo"<option value=\"0$i\" $sel>0$i</option>
								";
							}else{
								echo"<option dvalue=\"$i\" $sel>$i</option>
								";
							}
							$i++;
							}
						?>
						</select>
					  </div>
					  <div class="field">
						<select class="ui fluid dropdown" name="eddga_month">
						<?		
						$arr_m = array("มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
						$month = date('m');
						for ($i = 1; $i <= 12; $i++) {
							$name = $arr_m[$i-1];
							$sel = ($i == $month) ? ' selected="selected"' : '';
							if($i<=9){

									echo"<option value=\"0$i\" $sel>$name</option>
									";
								}else{
									echo"<option value=\"$i\" $sel>$name</option>
									";
								}
						}
						?>
						</select>
					  </div>
					  <div class="field">
						<select class="ui fluid dropdown" name="eddga_year">
						<?
						for($i=date('Y'); $i>1979; $i--) {
						$year = '';
						$selected = '';
						if ($year == $i) $selected = 'selected="selected" ';
						echo ('<option value="'.$i.'"'.$selected.'>'.$i.'</option>'."\n");
						}
						?>
						</select>
					</div>
					</div>
				  </div>
				  <div class="required field">
					<label>Security Code</label>
					<p><img src="system/captcha.php"></p>
					<input type="number" name="eddga_captcha" placeholder="ตอบคำถาม เป็นตัวเลขเท่านั้น" maxlength="6" style="letter-spacing:0.1em" autofocus required>
				  </div>
				  <div class="required field">
					  <div class="ui info large message" style="font-size:12px;color:#0f336b">
						<ul class="list">
							<li>ทีมงานมีสิทธิทุกอย่างในการ ปรับปรุง แก้ไข รีเซ็ทต่างๆ โดยไม่ต้องบอกล่วงหน้า</li>
							<li>ห้ามใช้บอท,โปรแกรม ในการช่วยเล่นต่างๆหากพบเจอแบนทันที</li>
							<li>ห้ามซื้อขายของในเกมเป็นบัตรหรือเงินจริง หากพบเจอแบนทันทีทั้งผู้ซื้อและผู้ขาย</li>
							<li>หากพบบัค หรือ ความผิดปกติของเซิฟกรุณาแจ้งทีมงานหน้า Live Chat หรือ FanFage Facebook ทันที</li>
							<li>ห้ามใช้บัคในการแสวงหาผลประโยชน์ ไม่ว่าทางใดก็ตาม หรือไม่แจ้งแล้วนำมาก่อกวนในเซิฟเวอร์ ไม่ว่าทางตรงหรือทางอ้อม หากพบเจอ แบนทันที</li>
							<li>ทางทีมงานจะไม่รับผิดชอบในกรณีไอเท็มหาย ไม่ว่าจะเกิดจากระบบ หรือ เกิดจาก ผู้เล่นเอง</li>
							<li>ทางทีมงานจะไม่รับแจ้งปัญหา ถูกแฮค หรือ ถูกโกงเพราะถือว่าเป็นความผิดพลาดจากตัวผู้เล่นเอง</li>
							<li>ห้ามกระทำการใดๆที่เข้าข่ายหลอกลวง ไม่ว่าสร้างตัวละครมาแอบอ้างว่าเป็นทีมงานหรือตั้งชื่อให้เหมือนกับตัวละครคนอื่นแล้วเอาไปหลอกผู้เล่นอื่นหรือการตั้งร้านขายของตัน แต่บอกว่าของรู เป็นต้น</li>
						</ul>
					  </div>
			      </div>
				  <div class="required field">
					<div class="ui checkbox">
					  <input type="checkbox" name="eddga_terms" value="1">
					  <label>ยอมรับข้อตกลงในการสร้างบัญชีผู้ใช้งานหรือไม่</label>
					</div>
				  </div>		  
				  <button class="ui green button" type="submit" id="submit_create">สร้างบัญชีผู้ใช้งาน</button>
				  <button class="ui button" type="reset" >ยกเลิกรายการ</button>
				</form>
	
		  </div>
		  <div class="ui segment">
			<a class="ui tag label">สมัครสมาชิก</a>
			<a class="ui tag label">สร้างบัญชี</a>
			<a class="ui tag label">สมัคร ID</a>
			<a class="ui tag label">register</a>
			<a class="ui tag label">create account</a>
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