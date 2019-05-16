<?php

// translate given string text into pig latin

// word starts w/ vowel? append -way
// start w/ consonant? append -ay

$text = "Hello there I am Julian this is asinine";
$latin = getPigLatinArr($text);
$translated = translateToLatin($latin);
print($translated);

function translateToLatin($latinArr){

  // implode this arr

  $newString = implode(" ", $latinArr);

  return $newString;


}

function getPigLatinArr($sample){

  $newArr = []; // empty for now

  // split sample into Array of words

  $words = explode(" ", $sample);

  foreach ($words as $word) {
    //echo $word;
    if (startsWithVowel($word)) {
      $newArr[] = $word . "-way"; // concatenate & push into new array of words
    } else {
      $newArr[] = $word . "-ay";
    }

    // or
    // arry_push($newArr, $words);
  }
  return $newArr;


}
function startsWithVowel($word){

  $vowels = ["a", "e", "i", "o", "u"];

  $firstChar = $word[0]; // strings are like lists in php, yeet

  if (in_array($firstChar, $vowels)) {
    return true;
  } else {
    return false;
  }

}


 ?>
