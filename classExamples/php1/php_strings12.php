<?php
ini_set('display_errors', true);
ini_set('display_startup_errors', true);
error_reporting(E_ALL);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Working with PHP - strings and text</title>
</head>
<body>
<h2>Working with PHP: using strings</h2>
<hr />
<?php 
//use a period ( . ) for concatenation
$cat1 = "The rain in Spain";
$cat2 = " stays mainly on the plain.";
$cat3 = $cat1.$cat2;
print "<p>Concatenation: $cat3</p>";
print "<p>Concatenation using \$cat1 and \$cat2: ".$cat1.$cat2."</p>";
//use the trim() function to remove leading and/or trailing spaces
print "<p>Use trim to remove leading or trailing blanks: ";
$test1 =trim( "        lots_of_blanks     ");
print "$test1</p>";

$test1a =trim( "        lots of blanks     ");
print "$test1a</p>";

//use the strlen(string) to obtain the length of a string (an integer)
$len_test1 = strlen($test1);
print "The length of $test1 is $len_test1.";
print "<p>";
print strtolower('REALLY BIG');
print "</p>\n<p>";
print strtoupper('really small');
print "</p>\n<p>";
print ucwords(strtolower('GILBERT AND SULLIVAN'));
print "</p>\n";
print "<p>Using the substring function:<br />\n";
$phone = '212-998-1234';
$area_code=substr($phone,0,3);
$extension = substr($phone,-4);
print "$phone: The area code is $area_code and the extension is $extension.</p>\n";
print "<p>Using the printf() function ... <br />\n";
$pie = 3.1415926;
printf('PI IS $%.3f.<br />', $pie);
printf('The %s for %d copies is $%.2f.<br />', 'cost',5,12.5);


?>
</body>
</html>
