<?php
	/* DB Config */
	/*================================================================*/
	$DBCONFIG['db_host'] = "191.101.214.191";
	$DBCONFIG['db_user'] = "volcano-ro";
	$DBCONFIG['db_pass'] = "4JorPWsO5i39vcjU";
	$DBCONFIG['db_name'] = "volcano_ro_rag";
	$DBCONFIG['map_port'] = "21193";
	/*================================================================*/
	/* ปรับจำนวนคน หน้าเว็บไซต์ */
	/*================================================================*/
	$count_user = "2.7"; // คณูจำนวนผู้เล่นโชว์หน้าเว็บไซต์
	$count_id = "1300"; // เพิ่มจำนวนไอดีโชว์หน้าไว็บไซต์
	$char_all = "0"; // เพิ่มจำนวนไอดีโชว์หน้าไว็บไซต์
	/*================================================================*/
	/* ตรงนี้ไม่ควรแก้ไข */
	/*================================================================*/
	$db_connect = @mysql_connect($DBCONFIG['db_host'], $DBCONFIG['db_user'], $DBCONFIG['db_pass']) or die("Error : ติดต่อฐานข้อมูลไม่ได้");
	mysql_select_db($DBCONFIG['db_name'],$db_connect) or die("Error : เลือกฐานข้อมูลไม่ได้");
	mysql_query("SET NAMES UTF8");
	date_default_timezone_set("Asia/Bangkok"); // Time Zone Thailand
	mysql_query("SET NAMES UTF8",$db_connect);
	/*================================================================*/
	/*================================================================*/
	/* DuckDig ไม่ควรแก้ไขใดๆ */
	/*================================================================*/
	/*================================================================*/
	$table_type = 1;
	$table_type_share = 2;
	$rank_display = 10;
	$acc_table = "login";
	$acc_username_col = "userid";
	$acc_account_id_col = "account_id";
	if($table_type == 1)
	{
		$point_col = "total_point";
		$point_table = "duckdig";
		$point_account_id_col = "account_id";
	}
	if($table_type_share == 2)
	{
	$point_col2 = "total_point";
	$point_table2 = "ducklike";
	$point_account_id_col2 = "account_id";
	}
	/*================================================================*/
?>
