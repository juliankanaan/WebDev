<?php
// get all the things we need
if (isset($_POST['submitted'])) {
  $userinput = $_POST['userinput'];

  $words = explode(" ", $useruserinput); // split at spaces (array)


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
  if ( (strpos($word, 'a') == 0) || (strpos($word, 'e') == 0) || (strpos($word, 'i') == 0) || (strpos($word, 'o') == 0) || (strpos($word, 'u') == 0)  ) {
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

<head>

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

  <link rel="stylesheet" href="css/supplemental.css" />

<title>Julian Kanaan Web Dev</title>

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Julian</a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
      <li class="nav-item"><a class="nav-link" href="aboutme.html">About Me</a></li>
      <li class="nav-item"><a class="nav-link" href="other.html">Other</a></li>
    </ul>
  </div>
</nav>

<h3>Here is your pig latin text; </h3>

<p><?php echo $newText; ?></p>

</body>

</html>
