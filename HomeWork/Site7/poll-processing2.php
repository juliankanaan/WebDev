<?php
ini_set('display_errors', true);
ini_set('display_startup_errors', true);
error_reporting(E_ALL);
?>

<?php


if (isset($_POST['submitted'])) { // check that button was pressed

  $email = $_POST['email'];
  //radios
  $color = $_POST['color'];
  // send over to text file 'results.txt'


  if (!doesExist($email)){ #check that result doesnt already exist before writing
    $fp   = fopen('results.txt', "a+"); // open file
    $line = $email . ": " . $color . "\n"; // line by line
    fwrite($fp, $line); // write
    fclose($fp); // close it up
  }
}
$redCount = countColor("red");
$blueCount = countColor("blue");
$greenCount = countColor("green");
$yellowCount = countColor("yellow");



function printResults() { // neatly loop and print each result

  $lines = file("results.txt"); // docs: https://www.php.net/manual/en/function.file.php

  foreach ($lines as $line) {
    echo '<p>';
    echo $line;
    echo '</p>';
  }
}
function countColor($colorName){
  # loop over each result in .txt file, returning a count
  $count = 0;

  $lines = file("results.txt");
  foreach ($lines as $line) {
    if (strrpos($line, $colorName)){ # does the line contain "red"?
      $count++; // increment
    }
  }

  return $count;
}
function doesExist($email){
  // loop over existing results
  $foundCount = 0;
  $email1 = $email . ":"; // adjusted for the colon
  $lines = file("results.txt");
  foreach ($lines as $line) {
    if (strrpos($line, $email1)){ # does any line already contain this email?
      $foundCount++; // increment
    }
  }
  if ($foundCount > 0 ){
    return true;
  } else {
    return false;
  }
}
?>
<html>
<?php
include("header.php");
?>
<style>
<?php # increment css width in 20px blocks per each submission
?>
.colorNames img {
  float: right;
}

</style>


<div class="container">
  <h3>Made with PHP graphics</h3>
  <div class="changeButtons" style="display: none;">
    <input  type="radio" id="emailList" >
      <label  for="emailList">
      Emails
      </label>
    <input  type="radio" id="histogram" >
      <label  for="histogram">
      Histogram
      </label>
  </div>
  <div class="poll-container" style="display: flex; justify-content: space-around;">
  <div id="emailPanel">
    <h3>Results of poll: </h3>


    <p> <?php printResults(); ?> </p>

  </div>
  <div id="histogramPanel">
    <h3>Histogram of poll: </h3>

      <div class="colorNames">Yellow <img src="graphic.php?width=<?php echo $yellowCount * 20; ?>"></div>
      <div class="colorNames">Blue <img src="graphic.php?width=<?php echo $blueCount * 20; ?>"></img></div>
      <div class="colorNames">Red <img src="graphic.php?width=<?php echo $redCount * 20; ?>"></img></div>
      <div class="colorNames">Green <img src="graphic.php?width=<?php echo $greenCount * 20; ?>"></img></div>


  </div>
</div>


</div>
<div class="container">
<p>
Graphics.php dynamically creates the correct image length using a function that
takes the width as a parameter.

It is invoked with the following (note the parameter in the URL):
</p>
<samp>
src="graphic.php?width=<\?php echo $redCount * 20; ?\>
</samp>
</div>

<?php include("footer.php"); ?>
</body>

</html>
