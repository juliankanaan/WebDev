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
	<style>
		body { 	background-color: white;
				color: navy;
				margin-left: 20px;
			}
		h3   { 	color: olive;  }
	</style>
	<title>PHP - reading in data from external files</title>
</head>
<body>
<h3>Using PHP to read external files</h3>
<hr />
<?php
	 $tobe = file('pinafore.txt');
	print ("<p>");

	// to see just the first 6 lines:
        // for ($n=0; $n<6; $n++) {

	for ($n=0; $n<count($tobe); $n++) {
		print (trim($tobe[$n])."<br />\n");	
	}
	print( "</p>\n");
	print( "<p><em> ... from HMS Pinafore</em></p>\n");
	
?>

</body>
</html>




