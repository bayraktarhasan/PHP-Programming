<?php
//Bayraktar Hasan
session_start();
require_once('checkPW.php');

$_SESSION['login'] = false;
$_SESSION['uname'] = '';

if (!empty($_POST["email"]) && !empty($_POST["Vorname"]) && !empty($_POST["Nachname"] && !empty($_POST["password"])))
{
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $vorname = filter_input(INPUT_POST, "Vorname", FILTER_SANITIZE_STRING);
    $nachname = filter_input(INPUT_POST, "Nachname", FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

    if(checkPW($password)){
      $hashPass = sha1($password);

      $host = 'localhost';
      $user = 'root';
      $password = 'haso';
      $database = 'itkollegdb';

      if($mysqli = new mysqli($host, $user, $password, $database)){
        $email = $mysqli->real_escape_string($email);
        $vorname = $mysqli->real_escape_string($vorname);
        $nachname = $mysqli->real_escape_string($nachname);
        $password = $mysqli->real_escape_string($hashPass);

        $query = "INSERT INTO tbl_user(uemail, upasswordhash) VALUES ('$email', '$password')";

        $mysqli->query($query);

        if($mysqli->errno == 0){
          $_SESSION['login'] = true;
          $_SESSION['uname'] = $email;
          $_SESSION['error'] = '';
          header('Location: index.php');
        } else {
          $_SESSION['errorReg'] = 'DB-Zugriff fehlgeschlagen';
          $_SESSION['login'] = false;
          header('Location: register.php');
        }
      }

    } else {
        $_SESSION['errorReg'] = 'Registrierung fehlgeschlagen. Passwort zu schwach.';
        header('Location: register.php');
    }
}

else{
    $_SESSION['errorReg'] = 'Registrierung fehlgeschlagen! Bitte Formular vollständig ausfüllen.';
    header('Location: register.php');
}

?>
