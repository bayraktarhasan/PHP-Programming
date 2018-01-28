<?php
if(empty($_COOKIE["Stil"])) {
       $cookie = "Stil2";
     } else {
       $cookie = $_COOKIE["Stil"];
     }

      if ($cookie == 'Stil1') {
        echo '<link rel="stylesheet"  href="./src/css/master.css">';
      } else {
        echo '<link rel="stylesheet" href="./src/css/master2.css">';
      }

 ?>
