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
       action="http://i6.cims.nyu.edu/~nh2/PHP3_files/php_part7_writingDivs.php">
    <p>Name: 
      <input type="text" name="name" id="name" /> </p>
<p>Musical Style: 
  <select name="musicalStyle" id="musicalStyle">
    <option value="jazz">Jazz</option>
    <option value="Classical">Classical</option>
    <option value="rock">Rock</option>
    <option value="musicals">Musical Theatre</option>
  </select>
</p>
    <p>Primary instrument:
      <select name="instrument" id="instrument">
        <option value="trumpet">trumpet</option>
        <option value="saxaphone">alto saxaphone</option>
        <option value="clarinet">clarinet</option>
        <option value="violin">violin/fiddle</option>
        <option value="piano">piano/keyboard</option>
        <option value="flute">flute</option>
        <option value="percussion">percussion</option>
      </select>
    </p>
    <input type="submit" name="submit" value="Done" />
    <input type="hidden" name="submitted" value="true" />
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