<?php

// create time using a string


$date = mktime(0, 0 , 0, 12, 14, 1996);

// format it.

$useable = date("M-d-Y", $date);

print "I was born on " . $useable . "\n";

// play with date() and its args
//print date("d"); // returns '16' as int (current day of month)
//print date("y");

// Find the first Tues of a given month?
$november = mktime(0,0,0,11,1,2020); //nov 2020

$electionday = strtotime("Tuesday", $november); // look for next Tuesday (the first one of month) in date

$formttedDate = strftime("Election day is %A, %B %d, %Y", $monday);

print "\n" . $formttedDate;
 ?>
