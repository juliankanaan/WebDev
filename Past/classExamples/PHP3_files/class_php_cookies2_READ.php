<?php
	// notice that cookies must be set before anything else happens!
	if(isset($_COOKIE['name'])) {

		$name = $_COOKIE['name'];
		$composer = $_COOKIE['composer'];
		$composition_type = $_COOKIE['composition'];
		$msg1 = "Your cookies have been set!";
		$msg2 = "<p>Hello, $name! We will get you music by $composer in the $composition_type category.</p><hr />\n";
		$msg3 = "To print one cookie at a time, for example the kind of composition:</p>".
				"<p>Name: using \$_COOKIE notation:   ".$_COOKIE['composition']."<br />\n" .
				"</p>\n";
		}
	else   {
		$msg1 = "You have not set your cookies yet.";
		$msg2 = "<p>&nbsp;</p>";
		$msg3 = "<p>&nbsp;</p>";

	} // end of if submitted    
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Retrieving cookies in PHP</title>
<link href="http://i6.cims.nyu.edu/~nh2/php/php_cookies1.css" rel="stylesheet" type="text/css" />
</head>

<body>
<h3>Welcome to our Sheet Music Store!</h3>
<hr />
<?php
	print($msg1);
	print($msg2);
	print($msg3);
?>
</body>
</html>
