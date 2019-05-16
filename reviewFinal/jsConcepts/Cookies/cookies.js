
var checkBtn = document.getElementById("check");
var setBtn = document.getElementById("set");

checkBtn.addEventListener("click", checkForCookie);
setBtn.addEventListener("click", setNewCookie);

// check if a visit cookie exists


// set cookie
function setNewCookie() {
  var email = document.getElementById("email").value;

  // set cookie -> {name}={value}
  document.cookie = "email=" + email;

}
function checkForCookie() {
  var allCookies = document.cookie; // is a big ass string of all of em

  console.log(allCookies);

  var keyValPairs = allCookies.split(";"); // split at equal sign

  if (keyValPairs && allCookies) { // any cookies?
    for (var i = 0; i < allCookies.length; i++) {
      var key = keyValPairs[i].split("=")[0];
      var value = keyValPairs[i].split("=")[1];
      //console.log(key + " " + value);
      // create markup

      var newP = document.createElement("p");
      newP.textContent = key + " " + value;
      document.getElementById("root").appendChild(newP);
    }
  } else {
    console.log("no cookies");
  }
}
