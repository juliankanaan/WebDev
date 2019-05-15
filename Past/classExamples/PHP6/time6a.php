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
	<title>Time</title>
</head>
<body>
<h3>PHP Time</h3>
<hr />
<?php
    date_default_timezone_set ( "America/New_York" );
   
    
    $afternoon = mktime(16, 30, 45, 05, 15, 2015);
    
    print strftime(" At %I:%M:%S on %m/%d/%y ");
    
    print "$afternoon seconds have elapsed since 1/1/1970.";
    
    
	
	

?>

</body>
</html>
