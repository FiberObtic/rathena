<?php
	/* Web Design and Script By volcano-ro.co */
	/* ห้ามแก้ไขข้อมูลต่างๆ ถ้าไม่รู้ค่าของมันจริง */
	session_start();
	header("content-type: text/html; charset=UTF-8");
	include('system/api_status.php');
	include('system/config_eddga_b3eo2c84w.php');
	include('system/setting_dashboard.php');
	/* ห้ามแก้ไขข้อมูลต่างๆ ถ้าไม่รู้ค่าของมันจริง */
	/* Web Design and Script By volcano-ro.co */
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $title_home;?></title>
<!-- seo fb setting -- www.volcano-ro.co -->
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
<!-- seo fb setting -- www.volcano-ro.co -->
<link rel="shortcut icon" href="images/eddga_studio.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="assets/css/semantic.min.css" />
<link rel="stylesheet" type="text/css" href="assets/css/sweetalert2.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/ionicons.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/aos.css">
<link rel="stylesheet" type="text/css" href="assets/css/eddga-studio.css">
</head>

<body>
<div class="vdo-main">
	<div class="scanline" style="display: block; text-align: -webkit-center;">
		<img src="images/icon/bg_bottom.png" class="img-fluid">
    </div>
	<div class="menuline" style="display: block; text-align: -webkit-center;">
		<img src="images/icon/bg_menu_main.png" class="img-fluid">
    </div>
 </div>
<div id="preloader"></div>
<div id="particles-js"></div>
<div class="header_table">
	<table align="center" class="warpper-table">
	  <tr>
		<td height="80" colspan="3" background="images/volcano-ro_02.png"><table width="1200" border="0" cellpadding="0" cellspacing="0">
		  <tr>
			<td><a href="./"><img src="images/btn_menu1.png" width="85" height="80" class="btn-footer"></a></td>
			<td><a href="create_account" target="_blank"><img src="images/btn_menu2.png" width="135" height="80" class="btn-footer"></a></td>
			<td><a href="download" target="_blank"><img src="images/btn_menu3.png" width="150" height="80" class="btn-footer"></a></td>
			<td><a href="server_info" target="_blank"><img src="images/btn_menu4.png" width="160" height="80" class="btn-footer"></a></td>
			<td><a href="woe_info" target="_blank"><img src="images/btn_menu5.png" width="145" height="80" class="btn-footer"></a></td>
			<td><a href="boss_time" target="_blank"><img src="images/btn_menu6.png" width="145" height="80" class="btn-footer"></a></td>
			<td><img src="images/btn_menu7.png" width="40" height="80" /></td>
			<td><a href="https://www.facebook.com/groups/volcanoro.market" target="_blank"><img src="images/btn_menu8.png" width="175" height="80" class="btn-footer"></a></td>
			<td><a href="dashboard" target="_blank"><img src="images/btn_menu9.png" width="165" height="80" class="btn-footer"></a></td>
		  </tr>
		</table></td>
		<td width="1"></td>
	  </tr>
	  <tr>
		<td height="850" colspan="3" background="images/volcano-ro_04.png">
		<div class="header_img">
			<div class="header_logo"></div>
		</div>
		</td>
		<td>
		</td>
	  </tr>
	  <tr>
		<td width="290" rowspan="6" background="images/volcano-ro_05.png"><table width="290" border="0" cellpadding="0" cellspacing="0">
		  <tr>
			<td height="27"></td>
		  </tr>
		  <tr>
			<td><div data-aos="fade-right"><a href="create_account" target="_blank"><img src="images/btn_left1.png" width="290" height="76" class="btn-center"></a></div></td>
		  </tr>
		  <tr>
			<td><div data-aos="fade-right"><a href="download" target="_blank"><img src="images/btn_left2.png" width="290" height="76" class="btn-center"></a></div></td>
		  </tr>
		  <tr>
			<td><div data-aos="fade-right"><a href="dashboard" target="_blank"><img src="images/btn_left3.png" width="290" height="76" class="btn-center"></a></div></td>
		  </tr>
		  <tr>
			<td><div data-aos="fade-right"><a href="refill" target="_blank"><img src="images/btn_left4.png" width="290" height="79" class="btn-center"></a></div></td>
		  </tr>
		</table></td>
		<td width="635" rowspan="3" background="images/volcano-ro_06.png"></td>
		<td width="275" height="73" background="images/volcano-ro_07.png"></td>
		<td></td>
	  </tr>
	  <tr>
		<td height="60" background="images/volcano-ro_08.png"><table width="275" border="0" cellpadding="0" cellspacing="0">
		  <tr>
			<td width="127" height="60"></td>
			<td width="128" align="center"><?php echo $map_status; ?></td>
			<td width="20"></td>
		  </tr>
		</table></td>
		<td></td>
	  </tr>
	  <tr>
		<td rowspan="2" background="images/volcano-ro_09.png"><table width="275" border="0" cellpadding="0" cellspacing="0">
		  <tr>
			<td width="127" height="60"></td>
			<td width="128" align="center"><div class="box-status-player"><?php echo $show_user; ?></div></td>
			<td width="20"></td>
		  </tr>
		</table></td>
		<td height="3"></td>
	  </tr>
	  <tr>
		<td rowspan="3" background="images/volcano-ro_10.png"><table width="635" border="0" cellpadding="0" cellspacing="0">
		  <tr>
			<td height="198" align="center"><a href="view2"><img src="images/0002.png"></a></td>
			<td align="center"><img src="images/0001.png"></td>
		  </tr>
		</table></td>
		<td height="59"></td>
	  </tr>
	  <tr>
		<td height="62" background="images/volcano-ro_11.png"><table width="275" border="0" cellpadding="0" cellspacing="0">
		  <tr>
			<td width="127" height="60"></td>
			<td width="128" align="center"><div class="box-status-account"><?php echo $usercount; ?></div></td>
			<td width="20"></td>
		  </tr>
		</table></td>
		<td></td>
	  </tr>
	  <tr>
		<td height="77" background="images/volcano-ro_12.png"><table width="275" border="0" cellpadding="0" cellspacing="0">
		  <tr>
			<td width="127" height="60"></td>
			<td width="128" align="center"><div class="box-status-charall"><?php echo $show_char; ?></div></td>
			<td width="20"></td>
		  </tr>
		</table></td>
		<td></td>
	  </tr>
	  <tr>
		<td rowspan="2" background="images/volcano-ro_13.png"><div data-aos="fade-up"><a href="#" target="_blank"><img src="images/btn_left5.png" width="290" height="114" class="btn-footer"></a></div></td>
		<td height="104" background="images/volcano-ro_14.png"></td>
		<td rowspan="6" background="images/volcano-ro_15.png"><table width="275" border="0" cellpadding="0" cellspacing="0">
		  <tr>
			<td height="199" align="center"><a href="view3"><img src="images/001.png"></a></td>
		  </tr>
		  <tr>
			<td height="192" align="center"><a href="view4"><img src="images/002.png"></a></td>
		  </tr>
		</table></td>
		<td></td>
	  </tr>
	  <tr>
		<td rowspan="2" background="images/volcano-ro_16.png"><table width="635" border="0" cellpadding="0" cellspacing="0">
		  <tr>
			<td><a href="#notice" aria-controls="notice" role="tab" data-toggle="tab"><img src="images/btn_new1.png" width="119" height="44" class="btn-top"></a></td>
			<td><a href="#event" aria-controls="event" role="tab" data-toggle="tab"><img src="images/btn_new2.png" width="95" height="44" class="btn-top"></a></td>
			<td><a href="#promo" aria-controls="promo" role="tab" data-toggle="tab"><img src="images/btn_new3.png" width="150" height="44" class="btn-top"></a></td>
			<td><a href="#update" aria-controls="update" role="tab" data-toggle="tab"><img src="images/btn_new4.png" width="110" height="44" class="btn-top"></a></td>
			<td width="161"></td>
		  </tr>
		</table></td>
		<td height="10"></td>
	  </tr>
	  <tr>
		<td rowspan="2" background="images/volcano-ro_17.png"><div data-aos="fade-up"><a href="https://www.facebook.com/volcano.hiclass" target="_blank"><img src="images/btn_left6.png" width="290" height="111" class="btn-footer"></a></div></td>
		<td height="34"></td>
	  </tr>
	  <tr>
		<td rowspan="3" valign="top" background="images/volcano-ro_18.png">
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="notice">
				<div class="notice-list" style="width:630px;margin-top:15px">
					<ul class="list-unstyled"> 
							<a href="view17"><li class="icon-notice" data-aos="flip-up" data-aos-duration="1000">กิจกรรม Log In รับของรางวัลประจำวัน<p><i class="fas fa-clock"></i> 03-11-2023</p></li></a>
							<a href="view16"><li class="icon-notice" data-aos="flip-up" data-aos-duration="1000">กิจกรรม Jackpot Bonus (Zeny) ลุ้นรับรางวัล item พิเศษ!!<p><i class="fas fa-clock"></i> 03-11-2023</p></li></a>
							<a href="view12"><li class="icon-notice" data-aos="flip-up" data-aos-duration="1000">Gashapon สุ่มรับรางวัล item และ Costume พิเศษ!!<p><i class="fas fa-clock"></i> 22-10-2023</p></li></a>
							<a href="view13"><li class="icon-notice" data-aos="flip-up" data-aos-duration="1000">ระบบ Option (ออฟชั่นแถว) เพิ่มประสิทธิภาพ item<p><i class="fas fa-clock"></i> 22-10-2023</p></li></a>
							<a href="view3"><li class="icon-notice" data-aos="flip-up" data-aos-duration="1000">Daily Quest (เควสประจำวัน) รับ Cash และ คะแนนสะสม ฟรีทุกวัน<p><i class="fas fa-clock"></i> 22-10-2023</p></li></a> 
							<a href="view10"><li class="icon-notice" data-aos="flip-up" data-aos-duration="1000">Battle Pass รับรางวัล พร้อมสิทธิพิเศษ และ แลกซื้อ item พิเศษ<p><i class="fas fa-clock"></i> 28-9-2023</p></li></a>
							<a href="view8"><li class="icon-notice" data-aos="flip-up" data-aos-duration="1000">Premium Service (VIP) รับสัทธิพิเศษเพียบ!!<p><i class="fas fa-clock"></i> 17-9-2023</p></li></a> 
							<a href="view9"><li class="icon-notice" data-aos="flip-up" data-aos-duration="1000">Card To Cash รับซื้อการ์ดและแลกเปลี่ยนการ์ดอื่นๆ<p><i class="fas fa-clock"></i> 17-9-2023</p></li></a>
							<a href="view1"><li class="icon-notice" data-aos="flip-up" data-aos-duration="1000">Volcano-RO เตรียมเปิดประสบการณ์ความสนุกพร้อมกัน!! วันที่ 20 กันยายน 2566<p><i class="fas fa-clock"></i> 12-9-2023</p></li></a> 
					</ul>
				</div>
			</div>
			<div role="tabpanel" class="tab-pane" id="event">
				<div class="notice-list" style="width:630px;margin-top:15px">
					<ul class="list-unstyled"> 
							<a href="view11"><li class="icon-event" data-aos="flip-up" data-aos-duration="1000">เตรียมตัวให้พร้อม กิจกรรม Guild War รางวัลรวมมูลค่ากว่า 200,000 บาท<p><i class="fas fa-clock"></i> 28-9-2023</p></li></a>
							<a href="view5"><li class="icon-event" data-aos="flip-up" data-aos-duration="1000">กิจกรรม CBT&OBT Level 99 รับรางวัล 10,000 Cash Point ฟรี<p><i class="fas fa-clock"></i> 17-9-2023</p></li></a> 
							<a href="view14"><li class="icon-event" data-aos="flip-up" data-aos-duration="1000">กิจกรรม PVP Ranking รางวัลรวมมูลค่ากว่า 7,000 บาท<p><i class="fas fa-clock"></i> 17-9-2023</p></li></a> 
							<a href="view4"><li class="icon-event" data-aos="flip-up" data-aos-duration="1000">กิจกรรม MVP Ranking รางวัลรวมมูลค่ากว่า 10,000 บาท<p><i class="fas fa-clock"></i> 17-9-2023</p></li></a> 
							
					</ul>
				</div>
			</div>
			<div role="tabpanel" class="tab-pane" id="promo">
				<div class="notice-list" style="width:630px;margin-top:15px">
					<ul class="list-unstyled"> 
							<a href="view2"><li class="icon-promo" data-aos="flip-up" data-aos-duration="1000">โปรโมชั่นเติมเงิน (รับโบนัสเพิ่มเติมสูงสุด 25%)<p><i class="fas fa-clock"></i> 17-9-2023</p></li></a>  
					</ul>
				</div>
			</div>
			<div role="tabpanel" class="tab-pane" id="update">
				<div class="notice-list" style="width:630px;margin-top:15px">
					<ul class="list-unstyled"> 
							<a href="view15"><li class="icon-update" data-aos="flip-up" data-aos-duration="1000">ประกาศ : อัพเดทและแก้ไขต่างๆ 22.10.66<p><i class="fas fa-clock"></i> 22-10-2023</p></li></a>
					</ul>
				</div>
			</div>
		</div>
		</td>
		<td height="77"></td>
	  </tr>
	  <tr>
		<td height="111" background="images/volcano-ro_19.png"><div data-aos="fade-up"><a href="https://www.facebook.com/groups/volcanoro.market" target="_blank"><img src="images/btn_left7.png" width="290" height="111" class="btn-footer"></a></div></td>
		<td></td>
	  </tr>
	  <tr>
		<td rowspan="3" background="images/volcano-ro_20.png"></td>
		<td height="48"></td>
	  </tr>
	  <tr>
		<td height="173" background="images/volcano-ro_21.png"></td>
		<td rowspan="2" background="images/volcano-ro_22.png"></td>
		<td></td>
	  </tr>
	  <tr>
		<td height="228" valign="top" background="images/volcano-ro_23.png">
		<?php
				$castle = mysql_query("SELECT * FROM `".$DBCONFIG['db_name']."`.`guild_castle`,`".$DBCONFIG['db_name']."`.`guild` WHERE `guild_castle`.`guild_id`=`guild`.`guild_id` LIMIT 4");
				$home= array (
					"Neuschwanstein", "Hohenschwangau", "Nuenberg", "Wuerzburg", "Rothenburg",
					"Repherion", "Eeyolbriggar", "Yesnelph", "Bergel", "Mersetzdeitz",
					"Bright Arbor", "Scarlet Palace", "Holy Shadow", "Sacred Altar", "Bamboo Grove Hill",
					"Kriemhild", "Swanhild", "Fadhgridh", "Skoegul", "Gondul",
					"Earth", "Air", "Water", "Fire",
					"Himinn","Andlangr","Viblainn","Hljod","Skidbladnir",
					"Mardol","Cyr","Horn","Gefn","Bandis"
				);
				$guildnumber = 1;
				if (mysql_num_rows($castle) > 0) {
					while($row = mysql_fetch_assoc($castle)) {
								echo '<div class="guild-row">
									<div class="guild-box" data-aos="flip-left">
										<div class="guild-bgem"><img src="system/api_emblem.php?guild='.$row['guild_id'].'" class="icon-em"></div>
										<div class="guild-textcastle">Castle : <span>'.$home[$row['castle_id']].'</span></div>
										<div class="guild-textname">Guild : <span>'.$row['name'].'</span></div>
										<div class="guild-textmaster">Guild Master : <span>'.$row[master].'</span></div>
									</div>
								</div>';
				$guildnumber++;
					}
				}else {
						echo '<div class="guild-row">
							<div class="guild-box" data-aos="flip-left">
								<div class="guild-bgem"><img src="images/no-images.png" class="icon-em"></div>
								<div class="guild-textcastle">Castle : <span>ยังไม่มีผู้ครอบครองปราสาท</span></div>
								<div class="guild-textname">Guild : <span>-</span></div>
								<div class="guild-textmaster">Guild Master : <span>-</span></div>
							</div>
						</div>';
						echo '<div class="guild-row">
							<div class="guild-box" data-aos="flip-left">
								<div class="guild-bgem"><img src="images/no-images.png" class="icon-em"></div>
								<div class="guild-textcastle">Castle : <span>ยังไม่มีผู้ครอบครองปราสาท</span></div>
								<div class="guild-textname">Guild : <span>-</span></div>
								<div class="guild-textmaster">Guild Master : <span>-</span></div>
							</div>
						</div>';
						echo '<div class="guild-row">
							<div class="guild-box" data-aos="flip-left">
								<div class="guild-bgem"><img src="images/no-images.png" class="icon-em"></div>
								<div class="guild-textcastle">Castle : <span>ยังไม่มีผู้ครอบครองปราสาท</span></div>
								<div class="guild-textname">Guild : <span>-</span></div>
								<div class="guild-textmaster">Guild Master : <span>-</span></div>
							</div>
						</div>';
						echo '<div class="guild-row">
							<div class="guild-box" data-aos="flip-left">
								<div class="guild-bgem"><img src="images/no-images.png" class="icon-em"></div>
								<div class="guild-textcastle">Castle : <span>ยังไม่มีผู้ครอบครองปราสาท</span></div>
								<div class="guild-textname">Guild : <span>-</span></div>
								<div class="guild-textmaster">Guild Master : <span>-</span></div>
							</div>
						</div>';
				}
			?>
		</td>
		<td></td>
	  </tr>
	  <tr>
		<td height="188" colspan="3" background="images/volcano-ro_24.png"></td>
		<td></td>
	  </tr>
	</table>
</div>
<?php
	/* Script Js By Eddga-Studio.com -->*/
	/* ห้ามแก้ไขข้อมูลต่างๆ ถ้าไม่รู้ค่าของมันจริง */
?>
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/semantic.min.js"></script>
<script type="text/javascript" src="assets/js/sweetalert2.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.popupoverlay.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.countup.js"></script>
<script type="text/javascript" src="assets/js/jquery.timeago.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.aos.js"></script>
<script type="text/javascript" src="assets/js/wow.min.js"></script>
<script type="text/javascript" src="assets/js/particles/particles.min.js"></script>
<script type="text/javascript" src="assets/js/particles/main.script.js"></script>
<script type="text/javascript" src="assets/js/eggda-studio.min.js"></script>
<?php
	/* ห้ามแก้ไขข้อมูลต่างๆ ถ้าไม่รู้ค่าของมันจริง */
	/* Script Js By Eddga-Studio.com -->*/
?>
</body>
</html>
