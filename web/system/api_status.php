<?
include('config_eddga_b3eo2c84w.php');

/* สถานะเซิฟเวอร์*/
$interval = time() + 60;
$online       = '<span class="box-status-online">ONLINE</span>';
$offline     = '<span class="box-status-offline">OFFLINE</span>';

/* ไม่ควรยุ่งกับจุดตรงนี้ */
error_reporting(0);

/* Check Server Status, If Server Status Was Not Checked In Last $interval seconds */
if($_COOKIE["checked"] != "true")
{
        /* Check Server Status */
        $map = fsockopen($DBCONFIG['db_host'], $DBCONFIG['map_port'], $errno, $errstr, 1);

        /* Workout Server Status & Set Cookie */
       if (!$map) {
        $map_status = $offline;
        setcookie("map_status", "offline", $interval);
		} else {
			$map_status = $online;
		}

setcookie("checked", "true", $interval);
} else {
  if ($_COOKIE["checked"] == "true") {
		if ($_COOKIE["map_status"] == "offline") {
			$map_status = $offline;
		} else {
			$map_status = $online;
		}
	}
}
$link = mysql_connect($DBCONFIG['db_host'],$DBCONFIG['db_user'],$DBCONFIG['db_pass']) or die(mysql_error());
@mysql_select_db($DBCONFIG['db_name'],$link);

/* จำนวน ผู้เล่นออนไลน์ ทั้งหมด */
$useronline = "SELECT COUNT(*) as total FROM `char` WHERE `online` != '0'";
$useronline_r = mysql_query($useronline);
$user = mysql_fetch_array($useronline_r);
$show_user = number_format($user["total"]*$count_user, 0, '.', ','); 	// ปรับเลขโกงคนออนไลน์ในเกมส์(หน้าเว็บไซต์เท่านั้น)

/* จำนวน id ทั้งหมด */
$query = "SELECT COUNT(*) as total FROM `login` WHERE `sex` != 'S'";
$result = mysql_query($query);
$acc = mysql_fetch_array($result);
$usercount = number_format($acc["total"]+$count_id, 0, '.', ',');	 // ปรับเลขโกงไอดี(หน้าเว็บไซต์เท่านั้น)

/* จำนวน Char ทั้งหมด */
$query_char = "SELECT COUNT(*) as total FROM `char` WHERE `sex` != 'S'";
$result_char = mysql_query($query_char);
$arr = mysql_fetch_array($result_char);
$show_char = number_format($arr["total"]+$char_all, 0, '.', ',');	 // ปรับเลขโกงตัวละคร(หน้าเว็บไซต์เท่านั้น)
?>
