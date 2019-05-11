<?php
// create OOS graphic

  # draw background
  $image = imageCreate (200, 200);
  $color = imagecolorallocate($image, 0x00, 0x00, 0x80); # navy color

  // @TODO: create words "OUT OF STOCK"

  $textColor = imageColorAllocate($image, 255, 0 , 0); # red text
  $fontSize = 5;
  $textString = "OUT OF STOCK";
  // location for text

  $x = (200 - (imageFontWidth($font) * intval(strlen($textString))))/ 2; # based on class example solution
  $y = (200 - (imageFontHeight($font) )) / 2;

  # draw text
  imageString($image, $fontSize, $x, $y, $textString, $textColor);

  # draw background
  imageRectangle($image, 0,0, imageSX($image) - 1, imageSY($image) - 1, $color);

  header('Content-Type: image/png'); # make image
  imagePNG($image);
  imageDestroy($image);



?>
