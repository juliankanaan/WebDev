<?php
ini_set('display_errors', true);
ini_set('display_startup_errors', true);
error_reporting(E_ALL);

// More on strpos function - finding second using optional starting pos
// If the function can find a search match, then it will return the position of the first match. 
//   However, if it can't find a match it will return false.

$numberedString = "1234567890123456789012345678901234567890";
$offset = -1; // initial offset is 0
$fiveCounter = 0;

echo "first offset is $offset";
$newpos = strpos($numberedString, "5", $offset + 1);
echo "first match is $newpos";

// Check the rest of the string for 5's
while($offset = strpos($numberedString, "5", $offset + 1)){
	$fiveCounter++;
	echo "<br />Five #$fiveCounter is at position - $offset";
}



?>