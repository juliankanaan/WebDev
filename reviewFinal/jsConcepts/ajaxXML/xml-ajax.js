// define some DOM elements

var btn = document.getElementById("button");
// add event listener

btn.addEventListener("click", getXML);

function getXML() {
  // new request object
  var request = new XMLHttpRequest();

  // set some properties to object

  request.open("GET", "cities.xml", true);

  // check for readiness
  request.onload = function(){
    if (request.status == 200) {
      // get our XML body
      var data = request.responseXML;
      console.log(data);
      // use querySelector to point to specidfic tags
      var cities = data.querySelectorAll("city"); //<city>

      // get subdata

      function getChildrenVals(thisTag, childTag){

        // <usCities> -> <city> {here} -> {nodeElementWeWant}.nodeValue
        var value = thisTag.querySelector(childTag).firstChild.nodeValue; // just remenber this shit

        return value;
      }
      // loop
      for (var i = 0; i < cities.length; i++) {
          var name = getChildrenVals(cities[i], "name");
          var population = getChildrenVals(cities[i], "population");
          console.log(name + " " + population);
      }

    }
  }
  request.send();
}
// get our object created
