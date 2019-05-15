
// using a range, use midpoint as a guess

//recursiveGuessing(0, 150);

function recursiveGuessing(min, max){
  // throw out a guess:
  var guess = (min + max) / 2;

  // see if we were right:

  if (isAge(guess)) {
    alert("Guessed right.");
  } else { // try again w/ new min, max

    if (isHigher(guess)) // use guess as lower, orig max as upper
      recursiveGuessing(guess, max - 1);
     else  // lower guess
      recursiveGuessing(min + 1, guess);

  } // big else

} // end function



function isHigher(age) {

  var response = confirm("Enter to say your age is OVER, cancel to say under: " + age);

  if (!response) { // hit cancel. age under
    return false;
  } else {
    return true;
  }

} // end function

function isAge(age){

  var response = confirm("Is your age: " + age);

  if (!response) { // no
    return false;
  } else { // yes
    return true;
  }
}
