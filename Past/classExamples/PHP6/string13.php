<?php
ini_set('display_errors', true);
ini_set('display_startup_errors', true);
error_reporting(E_ALL);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>explode</title>
</head>
<body>
<h2>Working with PHP:  EXPLODING stuff </h2>

<?php
$thephonenumber = "800-555-1234";

$phoneparts = explode("-", $thephonenumber);

echo "Beginning Phone Num = $thephonenumber<br>";
echo "Area code = $phoneparts[0]<br>";

echo "Prefix = $phoneparts[1]<br>";
echo "Extension = $phoneparts[2]<br>";


?>

</body>
</html>




