<?php
  session_start();
  $page = $_POST['page'];
  if(isset($_POST["uname"]) && isset($_POST["upwd"])){
    $uname = filter_input(INPUT_POST, 'uname', FILTER_SANITIZE_STRING);
    $upw = filter_input(INPUT_POST, 'upwd', FILTER_SANITIZE_STRING);

    $pwhash = sha1($upwd);

    $host = 'localhost';
    $user = 'root';
    $password = 'haso';
    $database = 'webpage';

    if($mysqli = new mysqli($host, $user, $password, $database))
    {
      $uname = $mysqli->real_escape_string($uname);
      $upw = $mysqli->real_escape_string($upw);
      $query = "SELECT * FROM user WHERE uname = '$uname' AND upw = '$upw'";
      $mysqli->query($query);

      if($mysqli->errno == 0) {
        if($mysqli->affected_rows == 1){
          $_SESSION['uname'] =htmlspecialchars($uname);
          $_SESSION['upass'] = htmlspecialchars($upw);
          $_SESSION['login'] = true;
          $_SESSION['']= '';
          header('Location: '.$page);
        } else {
          $_SESSION['error'] = 'Die Zugangsdaten sind nicht korrekt!';
          header('Location: ../home.php');
        }
      } else {
        $_SESSION['error'] = 'Die Zugangsdaten sind nicht korrekt!';
        header('Location: ../home.php');
      }
    }
  } else {
    echo 'Fehlemde Daten !';
  }
 ?>
