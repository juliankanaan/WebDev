<?php
header("Content-type: text/css"); // must indicate that it is CS_CAL_GRAY
$hue = rand(1, 360);
$color = "hsl($hue, 100%, 50%)";

?>

body {
		background-color: <?php echo $color; ?>;

}