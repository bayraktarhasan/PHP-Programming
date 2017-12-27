<?php
  session_start();
  $_SESSION['login'] = true;
  $_SESSION['uname'] = 'haso';

  if(!empty($_SESSION['login']) && !empty($_SESSION['uname'])){
  $vorname = filter_input(INPUT_GET, 'first_name', FILTER_SANITIZE_STRING);
  $nachname = filter_input(INPUT_GET, 'last_name', FILTER_SANITIZE_STRING);
  $displayname = filter_input(INPUT_GET, 'display_name', FILTER_SANITIZE_STRING);
  $email = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_STRING);

  $host = 'localhost';
  $user = 'root';
  $password = 'haso';
  $database = 'webpage';

  if($mysqli = new mysqli($host, $user, $password, $database))
  {
    $vorname = $mysqli->real_escape_string($vorname);
    $nachname = $mysqli->real_escape_string($nachname);
    $displayname = $mysqli->real_escape_string($displayname);
    $email = $mysqli->real_escape_string($email);

    $query = "INSERT INTO nlreg(nl_vorname, nl_nachname, nl_email, nl_displayname)"
      . "VALUES ('$vorname','$nachname','$email','$displayname')";

      $mysqli->query($query);

      if($mysqli->errno == 0) {
        header('Location: RegisterSuccess.php');
        exit;
      } else if ($mysqli->errno == 1062) {
        echo 'Die E-Mail Adresse existiert schon. Bitte versuchen Sie eine andere E-Mail Adresse';
      } else {
        echo 'Datenbank-Fehler' . $mysqli->error;
      }
  }
}

?>
