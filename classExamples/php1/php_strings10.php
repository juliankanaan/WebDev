<?php
ini_set('display_errors', true);
ini_set('display_startup_errors', true);
error_reporting(E_ALL);

/* str_replace has three parameters that are required for the function to work properly. 
    str_replace(search, replace, originalString).

search - This is what you want to search your string for. This can be a string or an array.
replace - All matches for search will be replaced with this value. This can be a string 
  or an array.
originalString - This is what search and replace will be operating on. 
The str_replace function will return a modified version of originalString when it completes.

*/

//string that needs to be customized
$rawstring = "Wow!  My favorite flavor ice cream is replaceme with a topping.<br>";

//male string
$choice1 = str_replace("replaceme", "chocolate", $rawstring);

//female string
$choice2 = str_replace("replaceme", "vanilla", $rawstring);

echo "Choice 1: ". $choice1 . "<br />";
echo "Choice 2: ". $choice2;


?>