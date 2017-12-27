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
    if(isset($_SESSION['login']) && $_SESSION['login'] == true){
      include_once('./htmlfrags/headerLogged.php');
      include_once('./htmlfrags/menuLogged.php');
    } else {
      include_once('./htmlfrags/header.php');
      include_once('./htmlfrags/menu.php');
    }

    ?>

    <div id="inhalt">
        <h1>Startseite</h1>
        <img src="img/itkolleglogo.png" alt="IT-Kolleg Logo" style="width:40%; float:left; margin: 5px;">
        <p>Willkommen auf der Seite IT-Kolleg Absolvententreff. Sie können sich über das Registrierungsformular
        beim Absolventenverein registrieren und genießen als angemeldeter Benutzer exklusiven Zugriff auf
        Jobangebote, verbilligte Software, etc.
        </p>
    </div>

</body>
