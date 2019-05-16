<?php

//$fileName = "passwords.txt";

function readItems($filePath){
  $resultsArr = []; // empty

  $lines = file($filePath);

  foreach ($lines as $line) {
    // split by spaces
    $loginDetails = explode(" ", $line); // array

    $username = $loginDetails[0]; // only usernames
    $password = $loginDetails[1];

    array_push($resultsArr, $username);

  }
  return $resultsArr;
}

 ?>
