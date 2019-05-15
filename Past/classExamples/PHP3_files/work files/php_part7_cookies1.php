<?php
	// notice that cookies must be set before anything else happens!
    if(isset($_POST['submitted'])) {

		$name = $_POST['name'];
		$composer = $_POST['composer'];
		$instrument = $_POST['instrument'];
	
		setcookie('name',$name);
		setcookie('composer',$composer);
		setcookie('instrument',$instrument);

		$msg = "Your cookies have now been set!";
	} // end of if submitted    
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Working with cookies in PHP</title>
<link href="http://i6.cims.nyu.edu/~nh2/php/php_part7_cookies1.css" rel="stylesheet" type="text/css" />
</head>

<body>
<h3>Welcome to our Sheet Music Store!</h3>
<hr />
<div id="cookies">
	<?php // if cookies are set, print a message	
		if(isset($msg)) {
			print("<p>$msg</p>\n");
			print("<p>Welcome, $name<br />\n");
			print("We will assist you to find scores by $composer for the $instrument.</p>\n");
			print("<hr />\n");

		}
	?>
</div> <!-- end of div cookies -->
<hr />
<div id="menu">
<form id="cookies1" name="cookies1" method="post" 
    action="http://i6.cims.nyu.edu/~nh2/php/php_part7_cookies1.php" >
  <p>Your Name: 
    <input type="text" name="name" id="name" />
  </p>
 <fieldset id="music">

  <p>Your favorite composer: 
    <select name="composer" id="composer">
      <option value="Bach" selected="selected">Bach, J.S.</option>
      <option value="Copland">Copland, Aaron</option>
      <option value="Glass">Glass, Phillip</option>
      <option value="Mozart">Mozart, W.A.</option>
    </select>
  </p>
  <p>Your primary instrument:
    <select name="instrument" id="instrument">
      <option value="flute" selected="selected">flute</option>
      <option value="oboe">oboe</option>
      <option value="clarinet">clarinet</option>
      <option value="bassoon">bassoon</option>
      <option value="horn">French horn</option>
      <option value="piano">piano</option>
      <option value="harpsichord">harpsichord</option>
    </select>
  </p>
 </fieldset>

  <p><input type="submit" value="Set your cookies" /> </p>
  <input type="hidden" name="submitted" value="true" />
</form>
<hr />
</div> <!-- end of div menu -->
<p>&nbsp;</p>
</body>
</html>