<?php
// www.duckdig.com callback
// For RO


class DuckCfVerify {
	private static function duck_getcontents($a_url)
	{
	    $curl_ua = "Mozilla/5.0 (PHP)";
      if(function_exists('curl_version')) {
	       $ch = curl_init();
		     curl_setopt($ch, CURLOPT_URL, $a_url);
		     curl_setopt($ch, CURLOPT_USERAGENT, $curl_ua);
		     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		     curl_setopt($ch, CURLOPT_TIMEOUT, 15);
		     curl_setopt($ch, CURLOPT_FRESH_CONNECT, 1);
		     curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		     $result = curl_exec($ch);
		     if (curl_errno($ch))
		     {
			      return false;
		     }
		     curl_close($ch);
	       return $result;
	    }
	    else {
	       $opts = array(
	          "http" => array('timeout' => 15, 'user_agent' => $curl_ua),
            "ssl" => array("verify_peer" => FALSE, "verify_peer_name" => FALSE)
         );
         $context  = stream_context_create($opts);
         return file_get_contents($a_url, FALSE, $context); 
	    }
	}

	private static function ip_in_range( $ip, $range ) {
		if ( strpos( $range, '/' ) == false ) {
			$range .= '/32';
		}
		// $range is in IP/CIDR format eg 127.0.0.1/24
		list( $range, $netmask ) = explode( '/', $range, 2 );
		$range_decimal = ip2long( $range );
		$ip_decimal = ip2long( $ip );
		$wildcard_decimal = pow( 2, ( 32 - $netmask ) ) - 1;
		$netmask_decimal = ~ $wildcard_decimal;
		return ( ( $ip_decimal & $netmask_decimal ) == ( $range_decimal & $netmask_decimal ) );
	}

	public static function checkCloudFlareIps(){
		if (!empty($_SERVER['HTTP_CF_CONNECTING_IP'])) {
			$cf_ip_ranges = self::duck_getcontents('https://www.cloudflare.com/ips-v4');
			if($cf_ip_ranges == false) {
			$cf_ip_ranges = "173.245.48.0/20
103.21.244.0/22
103.22.200.0/22
103.31.4.0/22
141.101.64.0/18
108.162.192.0/18
190.93.240.0/20
188.114.96.0/20
197.234.240.0/22
198.41.128.0/17
162.158.0.0/15
104.16.0.0/13
104.24.0.0/14
172.64.0.0/13
131.0.72.0/22";
			}
			if($cf_ip_ranges !== false) {
				$cf_ip_ranges = explode("\n", $cf_ip_ranges);
				
				foreach ($cf_ip_ranges as $range) {
					if (!empty($range) && self::ip_in_range($_SERVER['REMOTE_ADDR'], trim($range))) {
						$_SERVER['REMOTE_ADDR'] = $_SERVER['HTTP_CF_CONNECTING_IP'];
						break;
					}
				}
			}
		}
	}
}

// check cloudflare Ips
DuckCfVerify::checkCloudFlareIps();

// ระบบเก็บแต้ม
$table_login = "login";
$game_acc_fld = "account_id";
$game_user_fld = "userid";

//config mysql
$CONFIG['mysql_user'] = 'volcano-ro';
$CONFIG['mysql_pass'] = '4JorPWsO5i39vcjU';
$CONFIG['mysql_ip'] = '191.101.214.191';
$CONFIG['mysql_db'] = 'volcano_ro_rag';
$CONFIG['server_id'] = '68516';

// เลือกระบบ ตารางเก็บแต้ม
// 1 duckdig
// 2 hwdig
// 3 miner (point)
$table_type = 1;

//config point
$CONFIG['point'] = 1;
$CONFIG['version'] = 2;

if($table_type == 1)
{
	$table_name = "duckdig";
	$table_acc_fld = "account_id";
	$table_point_fld = "point";
	$table_total_p_fld = "total_point";
}
else if($table_type == 2)
{
	$table_name = "hwdig";
	$table_acc_fld = "account_id";
	$table_point_fld = "point";
	$table_total_p_fld = "point_total";
}
else if($table_type == 3)
{
	$table_name = "point";
	$table_acc_fld = "account_id";
	$table_point_fld = "digg";
	$table_total_p_fld = "digg_total";
}
else
{
	die("ERROR:TYPE ERROR");
}

function base64_url_encode($input) {
    return strtr(base64_encode($input), '+/=', '-_,');
}

function base64_url_decode($input) {
    return base64_decode(strtr($input, '-_,', '+/='));
}

//connect db
$conn = mysqli_connect($CONFIG['mysql_ip'],$CONFIG['mysql_user'],$CONFIG['mysql_pass']) or die('ERROR:CANT_CONNECTDB');
mysqli_select_db($conn, $CONFIG['mysql_db'])or die('ERROR:CANT_SELDB');

mysqli_query($conn, 'CREATE TABLE IF NOT EXISTS `' . $table_name . '` (
  `' . $table_acc_fld . '` int(11) NOT NULL,
  `' . $table_point_fld . '` int(11) NOT NULL,
  `' . $table_total_p_fld . '` int(11) NOT NULL,
  PRIMARY KEY  (`' . $table_acc_fld . '`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;') or die('ERROR:CANT_CREATETBL');

if(!isset($_GET['a'])) {
	$_GET['a'] = "";
}

if($_GET['a'] == 'version')
{

	echo "version:" . $CONFIG['version'];
	
}
else if($_GET['a'] == 'checkid')
{

	$gameid = trim($_GET['b']);
	$gameid = substr($gameid, 0, 24);
	$gameid = preg_replace('/[^A-Za-z0-9_-]/', '', $gameid);
	$sql = "SELECT `$game_acc_fld` FROM `$table_login` WHERE `$game_user_fld`= '" . mysqli_real_escape_string($conn, $gameid) . "' LIMIT 1";
	$check_result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($check_result) == 1) 
	{
		echo 'GAMEID:OK';
	} 
	else 
	{
		echo 'GAMEID:FAIL';
	}
	
}
else
{

	$hostallow = false;
	$CONFIG['duckdig_host'] = array("150.95.27.197", "counter.duckdig.com", "counter2.duckdig.com", "counter3.duckdig.com" );
	foreach($CONFIG['duckdig_host'] as $dhost)
	{
		if($_SERVER['REMOTE_ADDR'] == gethostbyname($dhost))
		{
			$hostallow = true;
			break;
		}
	}
	if(!$hostallow) {
		die('OK:WAIT_FOR_POINT');
	}

	if( strlen($_POST['a']) < $_POST['d'] )
	{
		$u = $_POST['d'] - strlen($_POST['a']);
		for($i = 0 ; $i < $u ; $i++ )
		{
			$_POST['a'] .= ",";
		}
	}

	//echo $_POST['a'] . "\n";
	//echo $_POST['b'] . "\n";
	//echo sha1($_POST['a']) . "\n";

	if( strcasecmp(sha1($_POST['a']), $_POST['b']) != 0 )
	{
		die('ERROR:CHKSUM_ERROR');
	}

	if( $_POST['c'] != $CONFIG['server_id'] )
	{
		die('ERROR:ID_DOESNT_MATCH');
	}

	$serial_data = base64_url_decode( $_POST['a'] );
	$serial_data = unserialize( $serial_data );
	$serial_key = array_keys($serial_data);
	$serial_result = array();
	$serial_count = count($serial_data);
	for( $i=0 ; $i < $serial_count ; $i++ )
	{
		$k = $serial_data[$i]['username'];
		$value = $serial_data[$i]['point'];
		$id = $serial_data[$i]['id'];
		$login_result = mysqli_query($conn, 'SELECT `' . $game_acc_fld . '` FROM `' . $table_login . '` WHERE `' . $game_user_fld  . '`=\'' . mysqli_real_escape_string($conn, $k) . '\' LIMIT 1');
		if(mysqli_num_rows($login_result) == 1) {
			$login_row = mysqli_fetch_assoc($login_result);
			if($login_row[$game_acc_fld ] > 0) {
				$duckdig_result = mysqli_query($conn, 'SELECT `' . $table_point_fld . '` FROM `' . $table_name . '` WHERE `' . $table_acc_fld . '`=' . $login_row[$game_acc_fld]);
				$duckdig_row = mysqli_fetch_row($duckdig_result);
				$insertpoint_res = false;
				if($duckdig_row == null) {
					$insertpoint_res = mysqli_query($conn, 'INSERT INTO `' . $table_name . '` ( `' . $table_acc_fld . '`, `' . $table_point_fld . '`, `' . $table_total_p_fld . '`) VALUES (' . $login_row[$game_acc_fld] . ',' . $value . ',' . $value . ')');
				}
				else {
					$insertpoint_res = mysqli_query($conn, 'UPDATE `' . $table_name . '` SET `' . $table_point_fld . '`=`' . $table_point_fld . '`+' . $value . ', `' . $table_total_p_fld . '`=`' . $table_total_p_fld . '`+' . $value . ' WHERE `' . $table_acc_fld . '`=' . $login_row[$game_acc_fld]);
				}
				if( $insertpoint_res )
				{
					$serial_result[] = $id;
				}
			}
		}
	}
		
	mysqli_close($conn);

	echo "ack=".base64_url_encode( serialize($serial_result));
}
