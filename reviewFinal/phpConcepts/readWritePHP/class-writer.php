<?php

function writeStuff($fileName, $arrOfThings){

  $fp = fopen($filePath, "w"); // open file to re-write

  foreach ($arrOfThings as $username) {
    $newLine = $username . "\n";

    fwrite($fp, $newLine);
  }

  fclose(); 

}

?>
