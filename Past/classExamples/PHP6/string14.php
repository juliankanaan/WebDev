<?php
ini_set('display_errors', true);
ini_set('display_startup_errors', true);
error_reporting(E_ALL);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>implode</title>
</head>
<body>
<h2>Working with PHP:  IMPLODING stuff </h2>

<?php
$pieces = array("It", "was", "the" , "best", "of", "times");

$glueTogetherSpaces = implode(" ", $pieces);

echo "Glued with spaces - $glueTogetherSpaces <br />";


$glueTogetherDashes = implode("-", $pieces);

echo "Glued with dashes - $glueTogetherDashes";


?>

</body>
</html>




