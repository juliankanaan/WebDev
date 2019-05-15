<?php
ini_set('display_errors', true);
ini_set('display_startup_errors', true);
error_reporting(E_ALL);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>time stuff</title>
</head>
<body>
<H2> Time Stuff! </h2>


<?php

/* use Unix time stamp - make certain we know what time zone it is */

date_default_timezone_set ("America/Chicago");
echo date("m/d/y"). "<br />";

$tomorrow = mktime(0,0,0, date("m"), date("d")+1, date("y") );

echo "tomorrow is ".date("m/d/y", $tomorrow)."<br />";

?>


</body>
</html>
