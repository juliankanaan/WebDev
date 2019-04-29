<?php
	// Note: Session info is set on the SERVER; cookies on the browser
	session_start();
	$session_uid = session_id();
	$_SESSION['background_color'] = 'silver';  //store session data
	$_SESSION['font_color'] = 'navy';  //store session data
	
	$bcolor = $_SESSION['background_color'];	
	$fcolor = $_SESSION['font_color'];
		
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Using a session variable</title>

<style>
		body {
		
		  <?php
		  
		  		print("background-color:".$bcolor.";\n");		  
		  		print("color:".$fcolor.";\n");
		  
		  ?>

		}



</style>


</head>

<body>
<h3>Welcome to Session Variable Fun!</h3>
<hr />
<?php
   print("<p>Welcome to session number $session_uid</p><br>");
   
   print("<p>The background color should be $bcolor with a font in $fcolor.</p><br>");
?>
</body>
</html>