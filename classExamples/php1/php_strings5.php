<?php

// Using "strrpos" to find a substring  which returns the position
//  of some substring, or nil if it is not found there.  

// Command Format:  $x = index ($bigstring, $littlestring);

$sentence = "PHP is great at manipulating strings, naturally.";
echo "$sentence <br>";
$word = "string";
$where = strrpos($sentence, $word);

echo "$word begins at character $where"; 

?>