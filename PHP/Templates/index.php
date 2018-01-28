<?php

include('../Template.php');

$id = $_GET['value'];


$tpl = new Template();
$tpl->load("ProductTemplate.tpl");

session_start();

if(empty($_COOKIE["Stil"])) {
   $cookie = "Stil2";
 } else {
   $cookie = $_COOKIE["Stil"];
 }

 $Stil ="";

 if ($cookie == 'Stil1') {
   $Stil = '<link rel="stylesheet" href="../../src/css/master.css">';
 } else {
    $Stil = '<link rel="stylesheet" href="../../src/css/master2.css">';
 }

$Footer = require_once('../../PHP/Footers/FooterReturn.php');
include('../../PHP/Navbars/NavbarItems.php');


$host = 'localhost';
$user = 'root';
$password = 'haso';
$database = 'webpage';


$bildurl = "../";
$pName = "";
$pBeschreibung = "";
if($mysqli = new mysqli($host,$user,$password,$database))
{

  $query = "SELECT * FROM produkt WHERE id = '$id'";
  $result = $mysqli->query($query);

  $row = mysqli_fetch_array($result);

  $bildurl = $bildurl . $row['Location'];
  $pName = $row['pName'];
  $pBeschreibung = $row['pBeschreibung'];
}


$tpl->assign("Stil", $Stil );
$tpl->assign("Footer", $Footer );
$tpl->assign("Produkt", $bildurl );


$tpl->assign( "Produkt_Name", $pName );
$tpl->assign( "Produkt_Beschreibung", $pBeschreibung );
$tpl->assign( "Title", "Produkt" );

$tpl->display();

 ?>
