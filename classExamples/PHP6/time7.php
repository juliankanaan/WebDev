<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>PHP Time</title>

</head>
<body>

 	<?php
date_default_timezone_set('America/New_York');

//$now = date_default_timezone_get();	
$now = time();
$later = strtotime('Friday',$now);
$before = strtotime('last friday',$now);
print strftime("now: %c \n", $now);
print strftime("later: %c \n", $later);
print strftime("before: %c \n", $before);

	?>
</div>
</body>
</html>