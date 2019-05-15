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
$rawstring = "We are glad you chose flavor ice cream with topping on top, <br />
               and are happy to serve it in a holder!";

//placeholders array
$placeholders = array('flavor', 'topping', 'holder');
//male replace values array
$choice1subs = array('chocolate', 'whipped cream', 'cone');
//female replace values array
$choice2subs = array('vanilla', 'nuts', 'cup');

//male string
$choice1 = str_replace($placeholders, $choice1subs, $rawstring);

//female string
$choice2 = str_replace($placeholders, $choice2subs, $rawstring);

echo "First: ". $choice1 . "<br />";
echo "Second: ". $choice2;

?>