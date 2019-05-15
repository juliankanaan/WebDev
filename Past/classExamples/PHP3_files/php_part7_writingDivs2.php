<?php 
if (isset($_POST['submitted'])) {
	$name = $_POST['name'];
	$style= $_POST['musicalStyle'];
	$instrument = $_POST['instrument'];

	$msg = ("<p>Welcome, $name. We will find $style gigs for you on $instrument.</p>\n");

} // end of submitted
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Using PHP to write to a div</title>
<link href="http://i6.cims.nyu.edu/~nh2/PHP3_files/php_part7_writingDivs.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h4>Enter data here ... </h4>
<div id="dataEntry">
    <form id="music2" name="music2" method="post" 
       action="http://i6.cims.nyu.edu/~nh2/PHP3_files/php_part7_writingDivs2.php">
    <p>Name: 
 	<?php
	if(isset($msg)) 
	     print($name."</p>\n");
     else
	     print("<input type=\"text\" name=\"name\" id=\"name\" /> </p>\n");
	?>
<p>Musical Style: 
 	<?php
	if(isset($msg)) 
		print($style."</p>\n");
	else  {
		  	print("<select name=\"musicalStyle\" id=\"musicalStyle\">\n");
    		print("<option value=\"jazz\">Jazz</option>\n");
    		print("<option value=\"Classical\">Classical</option>\n");
    		print("<option value=\"rock\">Rock</option>\n");
    		print("<option value=\"musicals\">Musical Theatre</option>\n");
  			print("</select>\n");
	}
	?>
</p>
    <p>Primary instrument:
 	<?php
	if(isset($msg)) 
		print($instrument."</p>\n");
	else  {
		      	print("<select name=\"instrument\" id=\"instrument\">\n");
        		print("<option value=\"trumpet\">trumpet</option>\n");
        		print("<option value=\"saxaphone\">alto saxaphone</option>\n");
        		print("<option value=\"clarinet\">clarinet</option>\n");
        		print("<option value=\"violin\">violin/fiddle</option>\n");
        		print("<option value=\"piano\">piano/keyboard</option>\n");
        		print("<option value=\"flute\">flute</option>\n");
        		print("<option value=\"percussion\">percussion</option>\n");
      			print("</select>\n");
	    		print("</p>\n");
    		print("<input type=\"submit\" name=\"submit\" value=\"Done\" />\n");
    		print("<input type=\"hidden\" name=\"submitted\" value=\"true\" />\n");
	}
	?>
  </form>
<hr />
<h4>... and use PHP to fill the div here </h4>
</div>

<div id="result">
	<?php
	if(isset($msg)) {
	    print $msg;
	}
	?>
</div>
</body>
</html>