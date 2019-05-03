<?php
// file constructs cookies


function readCookie($name){

  $value = 0; // return zero if no cookie

  if (isset($_COOKIE[$name])){

    $value = $_COOKIE[$name];

  }
  return $value; // return val of cookie

}

function setNewCookie($name, $val){

  $success = NULL;

  if (!isset($_COOKIE[$name])){
    $success = setcookie($name, $value);
  }
  return $success;


}


?>
