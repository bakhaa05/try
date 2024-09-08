<?php 
error_reporting(0);
@include (__DIR__).'/bots/botMother.php';
@include (__DIR__)."/md.php";
$detect = new Mobile_Detect;
if(!$detect->isMobile()){
	//exit;
}


 

?>