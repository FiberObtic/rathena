<?php
	/* Web Design and Script By https://www.eddga-studio.com */
	/* ห้ามแก้ไขข้อมูลต่างๆ ถ้าไม่รู้ค่าของมันจริง */
	session_start();
	header("content-type: text/html; charset=UTF-8");
	include('system/config_eddga_b3eo2c84w.php');
	include('system/setting_dashboard.php');
	include('system/mysql_crud.php');
	include('system/member.class.php');
	include('system/job_class.php');
	include('system/api_date_timezone.php');
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
							<a href="./" class="active item">
								<i class="folder open icon"></i>Dashboard
							</a>
							<a href="change/password.php" class="item">
								<i class="gamepad icon"></i>Change Password
							</a>
							<a href="change/email.php" class="item">
								<i class="envelope icon"></i>Change Email
							</a>
							<div class="right menu">
							<a href="logout.php" class="item">
								<i class="sign out alternate icon"></i>Logout
							</a>
							</div>
						</div>';	
						
$user_table = " SELECT * FROM `acc_reg_num` WHERE `KEY` = '#CASHPOINTS' AND `account_id` = '{$member->aidonweb($_SESSION['user'])}'";
$user_query=mysql_db_query($DBCONFIG['db_name'],$user_table);			
$eng_date = strtotime($member->inc_login($member->aidonweb($_SESSION['user']), 'account_id', 'lastlogin'));
			
				echo '<div class="ui stacked segments" style="margin-top:5em">
							  <div class="ui segment">
								<h2 class="ui header">
								  <i class="street view icon"></i>
								  <div class="content">
									User Account
									<div class="sub header">บัญชีผู้ใช้งาน : <span style="color:red;text-transform: uppercase;">',$_SESSION['user'],'</span></div>
								  </div>
								</h2>
							  </div>
							  <div class="ui segment">
								<div class="ui three statistics">
									  <div class="grey statistic">
										<div class="value">
										  ', $member->inc_hwdig($member->aidonweb($_SESSION['user'])), '
										</div>
										<div class="label">
										  Vote Points Total
										</div>
									  </div>
									  <div class="orange statistic">
										<div class="value">';
										if($row == 0){
											while($res = mysql_fetch_array($user_query)){
												$cashpoint = $res['value'];
											}
												echo number_format($cashpoint,0);
											}else{
												echo number_format(0);
										}
										echo '</div>
										<div class="label">
										  Cash Points Total
										</div>
									  </div>
									  <div class="grey statistic">
										<div class="value">
										  ', $member->inc_share($member->aidonweb($_SESSION['user'])), '
										</div>
										<div class="label">
										  Share Points Total
										</div>
									  </div>
								</div>
							  </div>
							  <div class="ui horizontal segments">
								<table class="ui basic table segment">
								  <tbody>
									<tr>
									  <td>Account ID :</td>
									  <td>',$member->aidonweb($_SESSION['user']),'</td>
									</tr>
									<tr>
									  <td>สถานะไอดี :</td>
									  <td>', $member->statusID($member->inc_login($member->aidonweb($_SESSION['user']), 'account_id', 'state')), '</td>
									</tr>
									<tr>
									  <td>จำนวนเข้าเกมส์ :</td>
									  <td>', $member->inc_login($member->aidonweb($_SESSION['user']), 'account_id', 'logincount'), ' ครั้ง</td>
									</tr>
								  </tbody>
								</table>
								<table class="ui basic table segment">
								  <tbody>
									<tr>
									  <td>User ID :</td>
									  <td>',$_SESSION['user'],'</td>
									</tr>
									<tr>
									  <td>IP Address :</td>
									  <td>',$ip,'</td>
									</tr>
									<tr>
									  <td>เข้าเกมส์ล่าสุด :</td>
									  <td><time class="timeago" datetime="', $member->inc_login($member->aidonweb($_SESSION['user']), 'account_id', 'lastlogin'), '" title="'.thai_date($eng_date).'"></time></td>
									</tr>
								  </tbody>
								</table>
							  </div>
							  <div class="ui segment">
								<h2 class="ui header">
								  <i class="settings icon"></i>
								  <div class="content">
									Character Information
									<div class="sub header">ข้อมูลตัวละครทั้งหมดของผู้เล่น</div>
								  </div>
								</h2>
							  </div>
							<div class="ui horizontal segments">';
$res = $member->get_char_uid($_SESSION['user']);		
	if ( $res[0] != null )
							{					
								echo '<table class="ui basic table center aligned segment">
								  <thead>
									<tr>
									  <th>Name</th>
									  <th>Class</th>
									  <th>Lv/Job</th>
									  <th>Zeny</th>
									  <th>Last Map</th>
									  <th>Status</th>
									</tr>
								  </thead>
								  <tbody>';
foreach( $res as $row ){
$number = $number+1;								  
								echo '<tr>
									  <td>'.$row['name'].'</td>
									  <td>' . $_CONFIG['job']['class_ro'][$row['class']] . '</td>
									  <td>'.$row['base_level'].'/'.$row['job_level'].'</td>
									  <td>'.number_format($row['zeny']).'</td>
									  <td>'.$row['last_map'].' ('.$row['last_x'].','.$row['last_y'].')</td>
									  <td>',$member->statusOn($row['online']),'</td>
									</tr>';
}
							}else{
								echo '<table class="ui basic table center aligned segment">
								  <thead>
									<tr>
									  <th>Name</th>
									  <th>Class</th>
									  <th>Lv/Job</th>
									  <th>Zeny</th>
									  <th>Last Map</th>
									  <th>Status</th>
									</tr>
								  </thead>
								  <tbody>';								
								echo '<tr>
								  <td colspan="6">
									ไม่พบข้อมูลตัวละครในระบบ คุณต้องสร้างตัวละคร (<small>No character data in the system. Please create a character with it</small>)
								  </td>
								</tr>';
							}								
								echo '
								  </tbody>
								</table>';							
							echo '</div>
							  <div class="ui segment">
								<p style="font-size:12px;color:red"><i class="question icon"></i> แสดงข้อมูลตัวละคร สูงสุด 10 ตัวละคร และ Backup ข้อมูลตัวละคร ทุกๆ 5 นาที</p>
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
							echo 'if (val == true) window.location.href = \'dashboard\';';
							echo '});';
							echo '}, 200);  </script>';
						}else{
							echo '<script type="text/javascript">';
							echo 'setTimeout(function () {';
							echo 'swal("การเข้าสู่ระบบไม่สำเร็จ","Username / Passowrd ของคุณอาจไม่ถูกต้อง","error").then( function(val) {';
							echo 'if (val == true) window.location.href = \'dashboard\';';
							echo '});';
							echo '}, 200);</script>';
						}
						}else{
							echo '<script type="text/javascript">';
							echo 'setTimeout(function () {';
							echo 'swal("การเข้าสู่ระบบไม่สำเร็จ","กรุณาระบุข้อมูลให้ชัดเจนมากกว่านี้ !","error").then( function(val) {';
							echo 'if (val == true) window.location.href = \'dashboard\';';
							echo '});';
							echo '}, 200);</script>';
						}
			}
				echo '<div class="ui attached message">
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