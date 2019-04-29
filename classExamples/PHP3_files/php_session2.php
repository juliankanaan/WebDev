<?php
session_start( );

if(!isset($_SESSION['background_color']))
    $_SESSION['background_color'] = 'yellow';  // set a default just in case

if(!isset($_SESSION['font_color']))
    $_SESSION['font_color'] = 'olive';  // set a default just in case

$session_uid = session_id();

$bcolor = $_SESSION['background_color'];
$fcolor = $_SESSION['font_color'];

?>
<html>
<head>
	<title>Using a session variable - Part II</title>
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
</p>
<form name="form1" method="post" 
    action="http://i6.cims.nyu.edu/~nh2/PHP3_files/php_session3.php">
  <p>Select a background color: 
    <select name="background_color_list" id="background_color_list">
      <option value="silver" selected>silver</option>
      <option value="white">white</option>
      <option value="gray">gray</option>
      <option value="lightblue">lightblue</option>
      <option value="yellow">yellow</option>
    </select>
  </p>
  <p>... and a font color for the {body} of your pages on this site: 
    <select name="font_color_list" id="font_color_list">
      <option value="maroon" selected>maroon</option>
      <option value="navy">navy</option>
      <option value="red">red</option>
      <option value="black">black</option>
    </select>
  </p>
    <input type="submit" value="Select your new color scheme!" />
</form>
</body>
</html>
