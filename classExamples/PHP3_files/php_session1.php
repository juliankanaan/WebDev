<?php

// Note: Session info is set on the SERVER; cookies on the browser
session_start( );
$session_uid = session_id();
$_SESSION['background_color'] = 'silver'; // store session data
$_SESSION['font_color'] = 'navy'; // store session data

$bcolor = $_SESSION['background_color'];
$fcolor = $_SESSION['font_color'];

?>
<html>
<head>
	<title>Using a session variable</title>
	<style>
		body { 
		
		<?php
		     print("background-color: ".$bcolor.";\n");
			 print("color: ".$fcolor.";");
		?>
		}
	</style>		
</head>
<body>
<?php
	print("<p>Welcome to session number $session_uid</p><hr />\n ");
?>
<br />
<?php
print("The background color should be $bcolor with a font in $fcolor.");
?>



</body>
</html>
