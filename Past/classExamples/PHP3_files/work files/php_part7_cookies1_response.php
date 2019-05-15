<?php
	// notice that cookies must be set before anything else happens!
	$name = $_POST['name'];
	$composer = $_POST['composer'];
	$instrument = $_POST['instrument'];
	
	setcookie('name',$name);
	setcookie('composer',$composer);
	setcookie('instrument',$instrument);

	setcookie('cookie[name]',$name);
	setcookie('cookie[composer]',$composer);
	setcookie('cookie[instrument]',$instrument);
	$msg = "Your cookies have now been set!";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Working with cookies in PHP</title>
<link href="http://i6.nyu.edu/~nh2/php/php_part7_cookies1.css" rel="stylesheet" type="text/css" />
</head>

<body>
<h3>Welcome to our Sheet Music Store!</h3>
<hr />
<?php
	print("<div id=\"cookies\">");
		print("<p>Welcome, $name<br />\n");
		print("We will assist you to find scores by $composer for the $instrument.</p>\n");
	print("</div>\n<hr />\n");

	print("<p>$msg</p>\n");

	// print all of the cookies at once:
	// A way to view all cookies
	print("<p>Using the \"print_r\" function to print all of the cookies: </p>\n");
	print_r($_COOKIE);

	print("<hr />\n<p>... or better - print them one at a time using a \"foreach\" loop: </p>\n");
		print "<table width='40%' cellpadding='3' cellspacing='5' border = '2'>\n";
	print "<tr>\n<td><b>Cookie name</b></td>\n<td><b>Cookie Value</b></td>\n</tr>\n";
		foreach ($_COOKIE as $key => $value){
			print "<tr>";
			print "<td>$key</td>\n";
			print "<td>$value</td>\n";
			print "</tr>";
			}
	print "</table>\n";
	print("<hr />\n<p>Or to print one at a time, for example the user's primary instrument:</p>");
	print("<p>Name: using \$_COOKIE notation:   ".$_COOKIE['instrument']."<br />\n");
	print("   Name: using \$HTTP_COOKIE_VARS[ ... ] notation:   ".$HTTP_COOKIE_VARS['instrument']."</p>\n");

?>
</body>
</html>