<?php
//Bayraktar Hasan
function checkPW($pass)
{
  $pattern = '/^(?=.*[A-Z])(?=.*[!@#$&*])(?=.*[0-9])(?=.*[a-z]).{8,16}$/';
  if(preg_match($pattern, $pass ) == 1){
    return true;
  } else {
    return false;
  }
}
 ?>
