<?php

	session_start( );
	
	// release current colors in favor of those the user picked in php_session2.php:
	if(isset($_SESSION['background_color']))
		unset($_SESSION['background_color']); 
		
	if(isset($_SESSION['font_color']))
		unset($_SESSION['font_color']); 
	
	// reset session variables
    $_SESSION['background_color'] = $_POST['background_color_list'];
    $_SESSION['font_color'] = $_POST['font_color_list'];

	// set up local variables:
	$session_uid = session_id();
	$bcolor = $_SESSION['background_color'];
	$fcolor = $_SESSION['font_color'];

?>
<html>
<head>
	<title>Using session variables - Part III</title>
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
<p>
  <?php
	print("<p>Welcome to session number $session_uid</p><hr />\n ");
?>
  <br />
  <?php
print("The background color now should be $bcolor with a font in $fcolor.");
?>
</body>
</html>
