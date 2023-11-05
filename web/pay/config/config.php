<?php

/*===== config database web =====*/

$Srv_Host = "191.101.214.191";

$Srv_Username = "volcano-ro";

$Srv_Password = "4JorPWsO5i39vcjU";

$Srv_DBname = "volcano_ro_rag";



date_default_timezone_set("Asia/Bangkok");

/*===============================*/



// Create connection

$conn = new mysqli($Srv_Host, $Srv_Username, $Srv_Password, $Srv_DBname);



// Check connection

if ($conn->connect_errno) {

    die("Connection failed: " . $conn->connect_error);

}



/*===== config เติมเงิน =====*/

// IP ของ SCB ที่อนุญาติให้รับส่งข้อมูล QR Code (ไม่ควรแก้ไข)

$_CONFIG['scb']['access_domain'] = 'https://ro.debug-pay.com';

// รหัสร้านค้า (merchant_id) ของ Payment API Key

$_CONFIG['scb']['merchant_id'] = '16a45e94f43f327edd49fb015462a236';

//key ได้จาก https://payment.debug-coin.com


// มูลค่าโอนเงินสด
$_CONFIG['scb']['amount'][1] = 50;
$_CONFIG['scb']['amount'][2] = 100;
$_CONFIG['scb']['amount'][3] = 300;
$_CONFIG['scb']['amount'][4] = 500;
$_CONFIG['scb']['amount'][5] = 1000;
$_CONFIG['scb']['amount'][6] = 3000;
$_CONFIG['scb']['amount'][7] = 5000;
//$_CONFIG['scb']['amount'][8] = 5000;
//$_CONFIG['scb']['amount'][9] = 10000;

// ข้อมูลแคชที่จะได้รับ

$_CONFIG['scb']['cash'][1] = 5000;
$_CONFIG['scb']['cash'][2] = 10000;
$_CONFIG['scb']['cash'][3] = 33000;
$_CONFIG['scb']['cash'][4] = 57500;
$_CONFIG['scb']['cash'][5] = 120000;
$_CONFIG['scb']['cash'][6] = 360000;
$_CONFIG['scb']['cash'][7] = 625000;
//$_CONFIG['scb']['cash'][8] = 50000;
//$_CONFIG['scb']['cash'][9] = 100000;



// ข้อมูลแคชโบนัสที่จะได้รับ
$_CONFIG['scb']['cashbonus'][0] = 0;
$_CONFIG['scb']['cashbonus'][1] = 0;
$_CONFIG['scb']['cashbonus'][2] = 0;
$_CONFIG['scb']['cashbonus'][3] = 0;
$_CONFIG['scb']['cashbonus'][4] = 0;
$_CONFIG['scb']['cashbonus'][5] = 0;
$_CONFIG['scb']['cashbonus'][6] = 0;
$_CONFIG['scb']['cashbonus'][7] = 0;
$_CONFIG['scb']['cashbonus'][8] = 0;
$_CONFIG['scb']['cashbonus'][9] = 0;

/*====================*/


// lv ที่ได้ตามยอดเงินสะสม

$_CONFIG['scb']['lv'][0] = 1;

//$_CONFIG['scb']['lv'][1] = 9999999999;
//
//$_CONFIG['scb']['lv'][2] = 9999999999;
//
//$_CONFIG['scb']['lv'][3] = 9999999999;
//
//$_CONFIG['scb']['lv'][4] = 9999999999;
//
//$_CONFIG['scb']['lv'][5] = 9999999999;
//
//$_CONFIG['scb']['lv'][6] = 9999999999;
//
//$_CONFIG['scb']['lv'][7] = 9999999999;

?>