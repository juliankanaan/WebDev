<?php

// create canvas
$width = 400;
$height = 400;
$image = imageCreate($width, $height);

// bg color now
$background = imagecolorallocate($image, 86, 61, 124);

// a textColor in the middle
$textColor = imagecolorallocate($image, 0 , 0 , 0);

// decide circle coordinates
$x = $width / 2;
$y = $height / 2;

$text = imageString($image, 5, $x, $y, "Lmao.", $textColor);


// push to browser
header('Content-type: image/png');
imagepng($image);
imagedestroy($image);
?>
