<?php
// some stuff idk what rn

// drawing an ellipse -- wtf I didn't know you couild do this in php

// create an img

$img = imagecreatetruecolor(400, 300); // accepts size for this canvas

$bg  = imagecolorallocate($img, 0,0,0); // accepts image, then RGB values

$ellipse_color = imagecolorallocate($img, 255,255, 0); // yellow

$ellipse  = imagefilledellipse($img, 200, 150, 300, 200, $ellipse_color); // accepts coordinates & color


// now output this shit to the browser

header('content-type: image/png');

imagepng($img);
imagedestroy($img); // clear it from cache

// create triangle

$triangle_color = imagecolorallocate($img, 255,255,255); // white color
$coords = array(
                0,0,
                100,200,
                300,200
                );
$triangle = imagepolygon($img, $coords, 3, $triangle_color); // coords, # of points, then color

// create words
$font_size = 4;

$words = $_GET['words']; // from URL string

// remember to be within canvas limits when making a shape. ie. coords (SY- 1)




?>
