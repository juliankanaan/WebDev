<?php
/*
ItemName
price
quantity
url
*/

function getAllItems($fileName){


return
}
function addItem($fileName){

  if (!doesExist($email)){ #check that result doesnt already exist before writing
    $fp   = fopen('results.txt', "a+"); // open file
    $line = $email . ": " . $color . "\n"; // line by line
    fwrite($fp, $line); // write
    fclose($fp); // close it up
  }
}
function getItemByName($name, $fileName){

  $lines = file($fileName); // docs: https://www.php.net/manual/en/function.file.php

  foreach ($lines as $line) {
    echo '<p>';
    echo $line;
    echo '</p>';
  }
}
function changePrice($itemName, $fileName){
  $lines = file($fileName);

  $lineCount = 0;

  foreach ($lines as $line) {
    lineCount++; # increment so we know where we are in file

    if (lineContains($itemName)){

    }
  }

}
?>
