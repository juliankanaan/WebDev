

// add eventlistener

var btnElement = document.getElementById("button");

btnElement.addEventListener("click", loadMenu);


function loadMenu() {
  var request = new XMLHttpRequest();

  // give obj properties
  request.open("GET", "menu.xml", true);

  // wait for complete load
  request.onload = function(){
    // check status
    if (request.status == 200) {
      console.log("good request");
      var data = request.responseXML;
      createMarkup(data);
    }
  }
  request.send();
}
function createMarkup(objXML) {
  var foods = objXML.querySelectorAll("food");

  for (var i = 0; i < foods.length; i++) {
    var food = foods[i];
    //food -> look for price tags -> look for text node within it {firstChild} -> get val {nodeValue}
    console.log(food.querySelector("price").firstChild.nodeValue);
  }

}
