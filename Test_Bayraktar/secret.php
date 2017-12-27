<!--Bayraktar Hasan-->
<!DOCTYPE html>
<head>
<title>IT-Kolleg Absolvententreff</title>
<meta charset="utf-8">
<!--CSS für die Newsletter Anmeldung-->
<link rel="stylesheet" type="text/css" href="css/stil1.css">
</head>

<body>
	<?php
	session_start();
	if(!isset($_SESSION['login']) && $_SESSION['login'] == false){
		include_once('./htmlfrags/header.php');
		include_once('./htmlfrags/menu.php');
		header('Location: index.php');
	} else {
		include_once('./htmlfrags/headerLogged.php');
		include_once('./htmlfrags/menuLogged.php');
	}

	?>

    <div id="inhalt">
        <h1>Exklusive Jobangebote</h1>
        <div class="job">
             <img src="img/ms.png" alt="MS Logo" style="width:40px; float:left; margin-right: 10px;">
             <p>Software-EntwicklerIn bei Microsoft Österreich</p>
        </div>
        <div class="job">
             <img src="img/cisco.png" alt="Cisco Logo" style="width:40px; float:left; margin-right: 10px;">
             <p>Netzwerktechnik Expert bei Cisco Systems Wien</p>
        </div>
        <div class="job">
             <img src="img/oracle.jpg" alt="Oracle Logo" style="width:40px; float:left; margin-right: 10px;">
             <p>Senior Consultant bei Oracle International</p>
        </div>
    </div>


</body>
