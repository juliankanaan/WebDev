<?php

// More on strpos function - finding second using optional starting pos
// If the function can find a search match, then it will return the position of the first match. 
//   However, if it can't find a match it will return false.

$numberedString = "5234567890123456789012345678901234567890";
$offset = 0; // initial offset is 0
$fiveCounter = 0;

// First check if there is a "5" at position 0.
if(strpos($numberedString, "5") == 0){
	$fiveCounter++;
	echo "<br />Five #$fiveCounter is at position - 0";
}

// Check the rest of the string for 5's
while($offset = strpos($numberedString, "5", $offset + 1)){
	$fiveCounter++;
	echo "<br />Five #$fiveCounter is at position - $offset";
}



?>