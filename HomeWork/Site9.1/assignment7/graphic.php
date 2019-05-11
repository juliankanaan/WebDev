<?php

function createRectangle($image_width){

  # draw rectangle
  $image = imageCreate ($image_width, 20);
  $color = imagecolorallocate($image, 0x00, 0x00, 0x80); # navy color

  header('Content-Type: image/png'); # make image
  imagePNG($image);
  imageDestroy($image);

}
$width = $_GET["width"] + 10;

if ($width === 0){
  $width = 10;

} else {
  createRectangle($width);
}
?>
