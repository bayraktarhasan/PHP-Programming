<?php

  if (!empty($_POST["vorname"]) && !empty($_POST["nachname"]) && !empty($_POST["email"]) && isset($_POST["checkBox"]))
  {

    $vorname = filter_input(INPUT_POST, 'vorname', FILTER_SANITIZE_STRING);
    $nachname = filter_input(INPUT_POST, 'nachname', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);

    $host = 'localhost';
    $user = 'root';
    $password = 'haso';
    $database = 'webpage';

    if($mysqli = new mysqli($host, $user, $password, $database))
    {
      $vorname = $mysqli->real_escape_string($vorname);
      $nachname = $mysqli->real_escape_string($nachname);
      $email = $mysqli->real_escape_string($email);

      $query = "INSERT INTO nlReg(nl_vorname, nl_nachname, nl_email)"
        . "VALUES ('$vorname','$nachname','$email')";

        $mysqli->query($query);

        if($mysqli->errno == 0) {
          header('Location: ../Aufgabensammlung/Aufgabensammlung3.php');
          $_SESSION['succesInfo'] = 'Registrierung erfolgreich';
          exit;
        } else if ($mysqli->errno == 1062) {
          echo 'Die E-Mail Adresse existiert schon. Bitte versuchen Sie eine andere E-Mail Adresse';
        } else {
          echo 'Datenbank-Fehler' . $mysqli->error;
        }
    }
} else{
    $_SESSION['errorReg'] = 'Registrierung fehlgeschlagen! Bitte Formular vollständig ausfüllen.';
    header('Location: ../Aufgabensammlung/Aufgabensammlung3.php');
}

?>
