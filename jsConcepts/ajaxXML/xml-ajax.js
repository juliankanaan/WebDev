// define some DOM elements

var btn = document.getElementById("button");
// add event listener

btn.addEventListener("click", getXML);

function getXML() {
  var request = new XMLHttpRequest();

  // set some properties to object

  request.load("GET", "xmlsample.txt", true);

  console.log(request); 

}
// get our object created
