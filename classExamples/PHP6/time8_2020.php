<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>PHP Time</title>

</head>
<body>

 	<?php
	
// Find the epoch timestamp for November 1, 2020
date_default_timezone_set('America/New_York');
$november = mktime(0,0,0,11,1,2020);
// Find the First monday on or after November 1, 2020
$monday = strtotime('Monday', $november);
// Skip ahead one day to the Tuesday after the first Monday
$election_day = strtotime('+1 day', $monday);

print strftime('Election day is %A, %B %d, %Y', $election_day);

	?>
</div>
</body>
</html>