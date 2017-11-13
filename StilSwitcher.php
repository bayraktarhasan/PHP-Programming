<?php

$page = $_GET['page'];

if(isset($_GET['switchStil']))
{
  setCookie("Stil", "Stil1",time() + (3600*24));
  header("Location: ".$page);
  exit();
}else{
  setCookie("Stil", "Stil2",time() + (3600*24));
  header("Location: ".$page);
  exit();
}
 ?>
