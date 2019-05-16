<?php
// Create a blank image
$image = imagecreatetruecolor(400, 300);

// Allocate a color for the background
$bg = imagecolorallocate($image, 0, 0, 0);

// Allocate a color for the ellipse
$col_ellipse = imagecolorallocate($image, 255, 255, 0);

imagefilledellipse ( $image , 200 , 150 , 300 , 200 , $col_ellipse );
// Output the picture to the browser
header('Content-type: image/png');

imagepng($image);
imagedestroy($image);
?>