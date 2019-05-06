<?php
// get all the things we need
if (isset($_POST['submitted'])) {
  $userinput = $_POST['userinput'];

  $words = explode(" ", $userinput); // split at spaces (array)


  $latinStuff = translateToPig($words);
  $newText = implode(" ", $latinStuff);
}


function translateToPig($words){
    $newLatin = array(); // new empty array for each word

    // loop over each word

    foreach ($words as $word) {

      # if word starts with a consonant... append "-way" to end
      if (startsWithVowel($word)){
        $modified = $word . "-way";

        array_push($newLatin, $modified); // push new word into latin array

      } else { # append "ay" to end
        $modified = $word . "-ay";
        array_push($newLatin, $modified); // push new word into latin array

      }

    }
  return $newLatin;
}
// check if radio button was checked

function startsWithVowel($word){ // check if a string starts with a vowel

  // check if word starts with any vowel
  if ( (strpos($word, 'a') === 0) || (strpos($word, 'e') === 0) || (strpos($word, 'i') === 0) || (strpos($word, 'o') === 0) || (strpos($word, 'u') === 0)  ) {
    return true;
  } else {
    return false;
  }

}
function containsPeriod($word){ // check if a period exists

  if ( strpos($word, '.') > 0 ){
    return true;
  } else {
    return false;
  }

}
function stripPeriod($word){
  substr_replace($word, ''); // TODO

}
?>
<?php
// error stuff
ini_set('display_errors', true);
ini_set('display_startup_errors', true);
error_reporting(E_ALL);
?>
<html>

<?php include("header.php");?>


<div class="container">
  <h3>Here is your pig latin text: </h3>

  <p><?php echo $newText; ?></p>
</div>
</body>

</html>
