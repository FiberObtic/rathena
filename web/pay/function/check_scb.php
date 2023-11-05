<?php
session_start();
include "../config/config.php";

$strRef = addslashes(trim($_POST["tRef"]));
$strAccountId = addslashes(trim($_POST["tAccountId"]));
$date = date("Y-m-d H:i:s");

$strSQL = "SELECT * FROM payment where user_id = '" . $strAccountId . "' AND confirmId = '" . $strRef . "'";
$objQuery = mysqli_query($conn, $strSQL);
$objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);

if($objResult["status"] == "02") {
	echo "true";
	exit();
}

$curl = curl_init($_CONFIG['scb']['access_domain'] . '/api/payment/checkConfirm/' . $_CONFIG['scb']['merchant_id'] . '/' . $strRef);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_TIMEOUT, 10);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
$curl_content = curl_exec($curl);

if($curl_content) {
	$DATA = json_decode($curl_content, true);

	$result = "error".$curl_content;
	if ($DATA["resCode"] == "01") {
		$result = "error".$curl_content;
	} else if ($DATA["resCode"] == "02") {
		$result = "true";
	} else if ($DATA["resCode"] == "00") {
		$SQL = "UPDATE payment SET transactionId = '" . $DATA["transactionId"] . "', status = '" . $DATA["resCode"] . "', added_time = '" . $date . "' where confirmId = '" . $objResult["confirmId"] . "'";
		$objQuery = mysqli_query($conn, $SQL);

		$SQL = "SELECT sum(amount) totalAmt from payment where user_id = '" . $strAccountId . "' and status in ('00','02')";
		$lvQuery = mysqli_query($conn, $SQL);
		$lvResult = mysqli_fetch_array($lvQuery, MYSQLI_ASSOC);


		$SQL1 = "SELECT * from payment where confirmId = '" . $objResult["confirmId"] . "' ";
		$lvQuery1 = mysqli_query($conn, $SQL1);
		$lvResult1 = mysqli_fetch_array($lvQuery1, MYSQLI_ASSOC);


		//araks เน€เธ�เธดเน�เธกเธกเธฒเน�เธซเธกเน�
		$SQL1 = "SELECT * from payment where confirmId = '".$objResult["confirmId"]."' ";
		$lvQuery1 = mysqli_query($conn, $SQL1);
		$lvResult1 = mysqli_fetch_array($lvQuery1, MYSQLI_ASSOC);


		$strSQLuser = "SELECT * FROM login WHERE userid = '" . $_SESSION['userid'] . "' ";
		$objQueryuser = mysqli_query($conn, $strSQLuser);
		$objResultuser = mysqli_fetch_array($objQueryuser, MYSQLI_ASSOC);


		$strSQLPoint = "SELECT * FROM acc_reg_num a WHERE account_id = " . $objResultuser['account_id'] . " AND a.key = '#CASHPOINTS'";
		$objQueryPoint = mysqli_query($conn, $strSQLPoint);
		$num_rows = mysqli_num_rows($objQueryPoint);

		$objResultPoint = mysqli_fetch_array($objQueryPoint, MYSQLI_ASSOC);


		if ($num_rows<=0 || !$objResultPoint["value"]) {
		$cash = "0";
		} else {
		$cash = $objResultPoint["value"] + $lvResult1['amount'];
		}


		$strSQLBonus = "SELECT * FROM acc_reg_num a WHERE account_id = " .  $objResultuser['account_id'] . " AND a.key = '#CASHBONUS'";
		$objQueryBonus = mysqli_query($conn, $strSQLBonus);
		$num_rows = mysqli_num_rows($objQueryBonus);
		$objResultBonus = mysqli_fetch_array($objQueryBonus, MYSQLI_ASSOC);


		if ($num_rows<=0 || !$objResultBonus["value"]) {
			$cashBonus = "0";
		} else {
			$cashBonus = $objResultBonus["value"] + $lvResult1['amount'];
		}



		$SQLupdate = "UPDATE acc_reg_num a SET value = " . $cash . " where account_id = '" . $objResultuser['account_id'] . "' AND a.key = '#CASHBONUS' ";
		// echo $SQLupdate;
		$objQueryupdate = mysqli_query($conn, $SQLupdate);

		$SQLupdate2 = "UPDATE acc_reg_num a SET value = " . $cashBonus . " where account_id = '" . $objResultuser['account_id'] . "' AND a.key = '#CASHPOINTS' ";
		$objQueryupdate2 = mysqli_query($conn, $SQLupdate2);
		// 


		$allLv = count($_CONFIG['scb']['lv']);
		if($allLv > 1) {
			$lv = 0;
			for($i=0; $i < $allLv; $i++)
			{
				if($lvResult["totalAmt"] >= $_CONFIG['scb']['lv'][$i]) {
					$lv = $i;
				}
			}
			$SQL = "UPDATE login SET member_status = " . $lv . " WHERE account_id = '" . $strAccountId . "'";
			$objQuery = mysqli_query($conn, $SQL);
		}

		$result = "ok";
	}
} else {
	$result =  'Curl error: ' . curl_error($curl);
}
curl_close($curl);

echo $result;
mysqli_close($conn);
?>