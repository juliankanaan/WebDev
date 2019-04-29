<?php

// More on strpos function - finding second using optional starting pos
// If the function can find a search match, then it will return the position of the first match. 
//   However, if it can't find a match it will return false.

$numberedString = "1234567890123456789012345678901234567890";

$fivePos = strpos($numberedString, "5");
echo "The position of 5 in our string was $fivePos";
$fivePos2 = strpos($numberedString, "5", $fivePos + 1);
echo "<br />The position of the second 5 was $fivePos2";

?>