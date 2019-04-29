<?php
ini_set('display_errors', true);
	ini_set('display_startup_errors', true);
	error_reporting(E_ALL);

//GD Example!

// GD has built-in fonts number 1-5

$font = 5;

// calculate the approx image SIZE

$image_height = intval(imageFontHeight($font) * 2);
$image_width = intval(strlen($_GET['button'])) * imageFontWidth($font) * 1.3;

// create the image

$image = imageCreate ($image_width, $image_height);

// create colors for the image

$back_color = imageColorAllocate($image, 255, 216, 216);

// blue text 

$text_color = imageColorAllocate($image, 0, 0, 255);

// border COLOR
$rect_color = imageColorAllocate($image, 0, 0, 0);

// location for the text

$x = ($image_width - (imageFontWidth($font) * intval(strlen($_GET['button']))))/ 2;
$y = ($image_height - (imageFontHeight($font) )) / 2;

// Draw the text

imageString($image, $font, $x, $y, $_GET['button'], $text_color);

imageRectangle($image, 0,0, imageSX($image) - 1, imageSY($image) - 1, $rect_color);


// SEND the image to the browser (aka, make the image)

header('Content-Type: image/png');
imagePNG($image);

imageDestroy($image);


?>