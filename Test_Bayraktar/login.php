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
        <h1>Login</h1>
        <form id="nlform" action="bayraktar_login.php" method="post">
            <ol>
                <li>
                  <label>Email-Adresse:</label>
                  <input type="email" id="email" name="email" placeholder="maxine@masters.com" required >
                </li>
                <li>
                  <label>Passwort</label>
                  <input type="password" id="password" name="password" required >
                </li>
                 <li>
                    <input class= "button" id="submit_button" type="submit" value="Anmelden">
                 </li>
            </ol>
            <div id="errordiv">
              <?php
                if(!empty($_SESSION['error'])){
                  echo $_SESSION['error'];
                }
               ?>
            </div>
        </form>
    </div>


</body>
