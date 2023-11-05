<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Guild War Report | Powered By Eddga-Studio</title>
<link rel="stylesheet" href="../../assets/css/bootstrap.css">
<link rel="stylesheet" href="../../assets/css/animate.css">
<link rel="stylesheet" href="../../assets/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Kanit:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&subset=thai" rel="stylesheet">
<style>
body{font-family: "Kanit",sans-serif;font-size:10px;font-weight:300;color:#000;background:transparent;padding:5px;}
.guildembox{position:relative;width:24px;height:24px;margin:auto;}
.guildembox .icon-em{position:absolute;width: 24px;height:24px;background:#ccc;border:1px solid #fff;top:0;left:0;}
.eddga-alert {font-family:Tahoma;font-size:12px;font-weight:300;text-align:center;margin-top:6em;padding: 13px 0 15px 20px;border-radius: 4px;color: #db2828;background-color: #ffe8e6;border-color: #ffa5a5;}
.table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {vertical-align: middle;border-top: 1px solid #f5f5f5;}
.table > thead > tr > th {vertical-align: bottom;border-bottom: 1px solid #fff;font-size:14px;font-weight: 400;color:#000;}
.table > thead > tr > td, .table > tbody > tr > td {padding: 6px;}
.tooltip{width:180px;position:absolute;z-index:1070;display:block;font-family:Tahoma;font-size:10px;font-style:normal;font-weight:400;line-height:1.42857143;text-align:left;text-align:start;text-decoration:none;text-shadow:none;text-transform:none;letter-spacing:normal;word-break:normal;word-spacing:normal;word-wrap:normal;white-space:normal;filter:alpha(opacity=0);opacity:0;line-break:auto}.tooltip.in{filter:alpha(opacity=80);opacity:.8}.tooltip.top{padding:5px 0;margin-top:-3px}.tooltip.right{padding:0 5px;margin-left:3px}.tooltip.bottom{padding:5px 0;margin-top:-3px}.tooltip.left{padding:0 5px;margin-left:-3px}.tooltip-inner{max-width:200px;padding:3px 8px;color:#fff;text-align:left;background-color:#000;border-radius:4px}.tooltip-arrow{position:absolute;width:0;height:0;border-color:transparent;border-style:solid}.tooltip.top .tooltip-arrow{bottom:0;left:50%;margin-left:-5px;border-width:5px 5px 0;border-top-color:#000}.tooltip.top-left .tooltip-arrow{right:5px;bottom:0;margin-bottom:-5px;border-width:5px 5px 0;border-top-color:#000}.tooltip.top-right .tooltip-arrow{bottom:0;left:5px;margin-bottom:-5px;border-width:5px 5px 0;border-top-color:#000}.tooltip.right .tooltip-arrow{top:50%;left:0;margin-top:-5px;border-width:5px 5px 5px 0;border-right-color:#000}.tooltip.left .tooltip-arrow{top:50%;right:0;margin-top:-5px;border-width:5px 0 5px 5px;border-left-color:#000}.tooltip.bottom .tooltip-arrow{top:0;left:50%;margin-left:-5px;border-width:0 5px 5px;border-bottom-color:#000}.tooltip.bottom-left .tooltip-arrow{top:0;right:5px;margin-top:-5px;border-width:0 5px 5px;border-bottom-color:#000}.tooltip.bottom-right .tooltip-arrow{top:0;left:5px;margin-top:-5px;border-width:0 5px 5px;border-bottom-color:#000}

</style>
</head>
<body>
<table class="table">
	<thead>
			<tr>
			<th class="text-center"><i class="fas fa-home"></i> Castle</th>
            <th class="text-center"><i class="fas fa-image"></i> Emblem</th>
            <th class="text-center"><i class="fas fa-trophy"></i> Guild</th>
            <th class="text-center"><i class="fas fa-shield-alt"></i> Guild Master</th>
			</tr>
			</thead>
			<tbody>
<?
require_once("../config_eddga_b3eo2c84w.php");
function getcastlename($castle_value) {
$castle_name = explode("\r\n", file_get_contents("guild_castles_name.def"));
return $castle_name[$castle_value];
}
mysql_connect($DBCONFIG['db_host'],$DBCONFIG['db_user'],$DBCONFIG['db_pass']) or die("ไม่สามารถเชื่อมต่อกับ ฐานข้อมูลได้");
mysql_select_db($DBCONFIG['db_name']) or die("ฐานข้อมูลไม่ถูกต้อง");
$sql = "SELECT * FROM `guild_castle` WHERE `guild_id`!='' ORDER BY `castle_id` desc limit 6";
$result = mysql_query($sql);
if (mysql_num_rows($result) > 0) {
	$countstanding = 0;
	include "config_guild.php";
	while ($row = mysql_fetch_array($result)) {
		$gvalue=$row[castle_id];
		if($GUILD_CASTLE[$gvalue]){
			$countstanding=1;
			$gvalue = getcastlename($gvalue);
			$gname = "select * from `guild` where guild_id='$row[guild_id]'";
			$gname_result = mysql_query($gname);
			$grow = mysql_fetch_array($gname_result);
			$guild_name=$grow[name];
			$g_master_name=$grow[master];
			$guild_id=$row[guild_id];
			$emblems[$guild_id]=$grow[emblem_data];
			echo "<tr>";
			echo "<td><div class='guildembox'><img src='emblem.php?guild=$guild_id' width='24px' height='24px' class='icon-em' data-html='true' data-toggle='tooltip' data-placement='right' title='Guild Castle : $gvalue<br>Guild Name : $guild_name<br>Guild Master : $g_master_name '></div></td>";
			echo "<td  class='text-center'><span style='font-size:12px'>$gvalue</span></td>";
			echo "<td  class='text-center'><span style='font-size:12px'>$guild_name</span></td>";
			echo "<td  class='text-center'><span style='font-size:12px'>$g_master_name</span></td>";
			echo "</tr>";
			}
		}
	}else{
		$countstanding=1;
		echo "<tr>
		";
		echo "<td colspan='4'><div class='eddga-alert'><i class='fas fa-circle-notch fa-spin'></i> ยังไม่มีสมาคมใดได้ยึดปราสาทกิลวอร์</div></td>
		";
		echo "</tr>
		";
	}
	if(!$countstanding){
	echo "<tr>
    <td colspan='4'><div class='eddga-alert'><i class='fas fa-circle-notch fa-spin'></i> ยังไม่มีสมาคมใดได้ยึดปราสาทกิลวอร์</div></td>
  </tr>";
	}
?>
		</tbody>
	</table>
</body>
<script src="../../assets/js/jquery.min.js"></script>
<script src="../../assets/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
var message="";
function clickIE() {if (document.all) {(message);return false;}}
function clickNS(e) {if
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {(message);return false;}}}
if (document.layers)
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}

document.oncontextmenu=new Function("return false")


function disableselect(e){
return false
}

function reEnable(){
return true
}

//if IE4+
document.onselectstart=new Function ("return false")

//if NS6
if (window.sidebar){
document.onmousedown=disableselect
document.onclick=reEnable
}

function MM_openBrWindow(theURL,winName,features) {
	window.open(theURL,winName,features);
}
</script>

</html>
