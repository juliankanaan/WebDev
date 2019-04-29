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
	<title>PHP - WRITING data to external files</title>
</head>
<body>
<h3>Using PHP to write variables to an external files</h3>
<hr />
<?php
	$author1 = "William Shakespeare";
	$author2 = "Mark Twain";
	$author3 = "George B. Shaw";
	$author4 = "Maya Angelou";

	$fp2 = fopen('author_variables.php',"w");
	$m1  = "\$author1 = \"".$author1 . "\";\n";
	$m2  = '$author2 = "'.$author2 . "\";\n";
	$m3  = "\$author3 = \"".$author3 . "\";\n";
	$m4  = "\$author4 = \"".$author4 . "\";\n";
	fwrite($fp2,"<?php \n");
	fwrite($fp2,$m1);
	fwrite($fp2,$m2);
	fwrite($fp2,$m3);
	fwrite($fp2,$m4);
	fwrite($fp2, "?> \n");
	fclose($fp2);
	print("<p><em>File written ... 4 records containing a list of author variables with names.</em></p>\n");

?>

</body>
</html>
