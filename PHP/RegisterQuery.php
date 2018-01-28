<?php
  session_start();
  $_SESSION['login'] = false;
  $_SESSION['uname'] = '';

  if (!empty($_POST["display_name"]) && !empty($_POST["password"]))
  {

    $displayname = filter_input(INPUT_POST, 'display_name', FILTER_SANITIZE_STRING);
    $passwordUser = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $host = 'localhost';
    $user = 'root';
    $password = 'haso';
    $database = 'webpage';

    if($mysqli = new mysqli($host, $user, $password, $database))
    {
      $displayname = $mysqli->real_escape_string($displayname);
      $passwordUser = $mysqli->real_escape_string($passwordUser);

      $query = "INSERT INTO user(uname, upw)"
        . "VALUES ('$displayname','$passwordUser')";

        $mysqli->query($query);

        if($mysqli->errno == 0) {
          header('Location: ../home.php');
          exit;
        } else if ($mysqli->errno == 1062) {
          echo 'Die E-Mail Adresse existiert schon. Bitte versuchen Sie eine andere E-Mail Adresse';
        } else {
          echo 'Datenbank-Fehler' . $mysqli->error;
        }
    }
} else{
    $_SESSION['errorReg'] = 'Registrierung fehlgeschlagen! Bitte Formular vollständig ausfüllen.';
    header('Location: register.php');
}

?>
