<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>PHP - reading in data from an external file in .CSV format</title>
</head>
<body>
<h3>Using PHP to read external files in .csv format</h3>
<hr />
<?php

	$fp = fopen("centralParkData.csv","r") or die("can't open file!");
	print("<table border='1' cellspacing='2' cellpadding='2'>\n");
	print("<tr><td>Year</td><td>Jan</td><td>Feb</td><td>Mar</td><td>Apr</td><td>May</td><td>Jun</td>".
	           "<td>Jul</td><td>Aug</td><td>Sep</td><td>Oct</td><td>Nov</td><td>Dec</td></tr>");
	while($row = fgetcsv($fp, 1024, ",")) 
	{
		$columns = count($row);
		print("<tr>\n");
		for ($m=0; $m<$columns; $m++)  
			{
			$value = floatval($row[$m]);
			if ($value>900 && $m>0) 
				print( "<td>n/a</td>");
			else
				print("<td>".$value."</td>");
			}
		print("</tr>\n");
	}
	print("</table>\n");
	fclose($fp) or die("Can't close this file!");

?>
</body>
</html>
