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
        include_once('./htmlfrags/header.php');
        include_once('./htmlfrags/menu.php');
        require_once('checkPW.php');
    ?>

    <div id="inhalt">
    <h1>Registrierung</h1>
    <form id="nlform" method="post" action="bayraktar.php" enctype="multipart/form-data">
        <ol>
            <li>
              <label for="name">Vorname</label>
              <input type="text" id="vorname" name="Vorname" placeholder="Maxine" required autofocus />
            </li>
            <li>
              <label for="nachname">Nachname</label>
              <input type="text" id="nachname" name="Nachname" placeholder="Masters" required autofocus />
            </li>
            <li>
              <label>Email-Adresse:</label>
              <input type="email" id="email" name="email" placeholder="maxine@masters.com" required >
            </li>
            <li>
              <label>Passwort</label>
              <input type="password" id="password" name="password" required >
            </li>
            <li>
              <label>Profilbild</label>
              <input  type="file" id="bild" name="bild" >
            </li>
             <li>
                <input class= "button" id="submit_button" type="submit" value="Abschicken">
             </li>
        </ol>
        <div id="errordiv">
          <?php
            if(!empty($_SESSION['errorReg'])){
              echo $_SESSION['errorReg'];
            }
           ?>
        </div>
    </form>
    </div>


</body>
