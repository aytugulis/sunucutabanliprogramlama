<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
	<link rel="stylesheet" href="panel.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="menu.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
</head>
<body>
	<div class="ust">
	<h1>Afet Sonrası Toplanma Alanı Yer Seçimi</h1>
	 <b>Dokuz Eylül Üniversitesi/Yönetim Bilişim Sistemleri</b>
	</div>
	<div class="menu">
	
	
	<div id='cssmenu'>
<ul>
       
<li><a href='index.php?git=anasayfa'><span>VERİTABANI TABLOLARI</span></a></li>
	<li><a href='index.php?git=risk'><span>ZEMİN BÜYÜTMESİ</span></a></li>
 
   <li><a href='index.php?git=endeks'><span>RİSK ENDEKSİ FORMÜLÜ</span></a></li>
   
   <li><a href='index.php?git=nufus'><span>RİSK ENDEKS GRAFİK GÖSTERİMİ</span></a></li>
</ul>
</div>
	
	
	
	</div>
	<div class="icerik">
	<?php 
	 $a = @$_GET["git"];
	
	switch($a){
	
		case "nufus":
		include("nufus.php");
		break;
			
		case "risk":
		include("risk.php");
		break;
		
		case "endeks" :
		include ("endeks.php");
		break;
		
		default :
		include ("anasayfa.php");
		break;
	}
	
	?>
	
	
	
	</div>
	
</body>
</html>