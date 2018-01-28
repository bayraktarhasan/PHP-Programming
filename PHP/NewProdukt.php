<?php
  if(isset($_POST["ProduktName"]) && isset($_POST["btn-upload"])){
    $pName = filter_input(INPUT_POST, 'ProduktName', FILTER_SANITIZE_STRING);
    $pBeschreibung = filter_input(INPUT_POST, 'textarea', FILTER_SANITIZE_STRING);


    $host = 'localhost';
    $user = 'root';
    $password = 'haso';
    $database = 'webpage';

    if($mysqli = new mysqli($host, $user, $password, $database)){
      $pName = $mysqli->real_escape_string($pName);
      $pBeschreibung = $mysqli->real_escape_string($pBeschreibung);

      $basename = $_FILES['file']['name'];

      $target_dir = "../Uploaded_Files/";
      $target_file= $target_dir . basename($_FILES['file']['name']);

      move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
      $file = basename($_FILES["file"]["name"]);

      $location = "../Uploaded_Files/" . $file;
      $query = "INSERT INTO produkt(pName, pBeschreibung,  FileName, Location) VALUES ('$pName', '$pBeschreibung', '$file', '$location')";
      $mysqli->query($query);

      if($mysqli->errno == 0) {
        header('Location: ../Aufgabensammlung/Aufgabensammlung6.php');
      } else {
        echo 'Fehler';
      }

    }

  }

 ?>
