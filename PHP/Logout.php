<?php
  $page = $_POST['page'];
  session_start();
  session_destroy();
  header('Location: '.$page);
 ?>
