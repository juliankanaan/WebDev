<?php
function gradient($image_width, $image_height,$c1_r, $c1_g, $c1_b, $c2_r, $c2_g, $c2_b, $vertical=false)
{
// first: lets type cast;
$image_width = (integer)$image_width;
$image_height = (integer)$image_height;
$c1_r = (integer)$c1_r;
$c1_g = (integer)$c1_g;
$c1_b = (integer)$c1_b;
$c2_r = (integer)$c2_r;
$c2_g = (integer)$c2_g;
$c2_b = (integer)$c2_b;
$vertical = (bool)$vertical;

// create a image
$image  = imagecreatetruecolor($image_width, $image_height); 

// make the gradient
for($i=0; $i<$image_height; $i++) 
{ 
$color_r = floor($i * ($c2_r-$c1_r) / $image_height)+$c1_r;
$color_g = floor($i * ($c2_g-$c1_g) / $image_height)+$c1_g;
$color_b = floor($i * ($c2_b-$c1_b) / $image_height)+$c1_b;

$color = ImageColorAllocate($image, $color_r, $color_g, $color_b);
imageline($image, 0, $i, $image_width, $i, $color);
} 



  // Flush the image
    header('Content-type: image/png');
    imagepng($image);
    imagedestroy($image);
}
gradient(100, 200,40, 40, 40, 50, 50, 255, true)
?>