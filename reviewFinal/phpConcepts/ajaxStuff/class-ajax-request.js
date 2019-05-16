
var element = document.getElementById("button");

// detect click
element.addEventListener("click", loadFileText);

// define the function

function loadFileText() {
  // create new XML object

  var request = new XMLHttpRequest();

  // add some data to our request
  // GET  type, {file}, {async?}
  request.open("GET", "sample.txt", true);

  /*
  unnecessary: for my info. Can just check for request.onload 

  request.onreadystatechange = function(){
    // waiting ... until state becomes 4
    if (this.readyState == 4) {
      console.log("ready!");
    }
  }
  */
  // check some things
  request.onload = function(){
    if (request.status == 200) {
      //console.log("good request");
      var text = request.responseText; // here's our text

      document.getElementById("root").innerHTML = text;  // push to DOM

    } else {
      console.log("fuck");
    }
  }

  // send the request
  request.send();
}
