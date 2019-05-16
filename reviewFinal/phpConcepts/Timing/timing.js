// add listeners to dom elements
var startBtn = document.getElementById("start");
var stopBtn = document.getElementById("stop");
var resetBtn = document.getElementById("reset");

// event listeners

startBtn.addEventListener("click", startTimer);

//
var clock = document.getElementById("clock");

var timerID;
// define those functions

function startTimer() {
  // setInterval fires a function (first argument) at a given rate in ms
   timerID = setInterval(incrementNum, 1000);
}

function incrementNum(){
  // make sure to convert to int
  var currentVal = parseInt(clock.innerHTML); // what is it at rn?
  clock.innerHTML = (currentVal + 1); // add to it then
}

function stopTimer(){
  clearInterval(timerID);
}
function resetTimer(){
  clock.innerHTML = "0"; // put it to zero big boi
}
