// translate given string text into pig latin

// word starts w/ vowel? append -way
// start w/ consonant? append -ay

var sampleText = "Hello there I am Julian this is asinine";

var latin = getPigLatinArr(sampleText);

console.log( latin.join(" ") ); // spit out with spaces

function getPigLatinArr(sample){

  // empty arr to be filled
  var newArr = [];

  // split the string by its spaces

  var words = sample.split(" "); // ["Hello", "there", "I", "am" ... ]

  for (var i = 0; i < words.length; i++) {
    // does word start w/ vowel

    if (startsWithVowel( words[i].toLowerCase() )) {
      newArr.push( words[i] + "-way");
    } else {
      newArr.push( words[i] + "-ay");
    }
  } // loop
  return newArr;
}
function startsWithVowel(word){

  var firstChar = word.charAt(0); // first pos in string

  var vowels = ["a", "e", "i", "o", "u"];

  if (vowels.includes(firstChar)) { // https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/includes
    return true;
  } else {
    return false;
  }
}
