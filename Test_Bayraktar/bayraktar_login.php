<?php
//Bayraktar Hasan
  session_start();
  $_SESSION['login'] = false;
  $_SESSION['uname'] = '';

  if(isset($_POST["email"]) && isset($_POST["password"])){
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $pwhash = sha1($password);

    $host = 'localhost';
    $user = 'root';
    $password = 'haso';
    $database = 'itkollegdb';

    if($mysqli = new mysqli($host, $user, $password, $database))
    {
      $email = $mysqli->real_escape_string($email);
      $query = "SELECT * FROM tbl_user WHERE uemail = '$email' AND upasswordhash = '$pwhash'";
      $mysqli->query($query);

      if($mysqli->errno == 0) {
        if($mysqli->affected_rows == 1){
          $_SESSION['uname'] =htmlspecialchars($email);
          $_SESSION['login'] = true;
          $_SESSION['error'] = '';
          header('Location: index.php');
          exit;
        } else {
          $_SESSION['error'] = 'Die Zugangsdaten sind nicht korrekt!';
          header('Location: login.php');
        }
      } else {
        $_SESSION['error'] = 'Datenbank verbindung fehlgeschlagen!';
        header('Location: login.php');
      }
    }
  } else {
    echo 'Fehlemde Daten !';
    header('Location: login.php');
  }
 ?>
