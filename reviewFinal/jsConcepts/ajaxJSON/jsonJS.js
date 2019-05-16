// read json file

// listen for clicks

var btnElement = document.getElementById("button");

btnElement.addEventListener("click", displaySuperheroes);


function displaySuperheroes() {

  // create object
  var request = new XMLHttpRequest();

  // give it some properties
  request.open("GET", "superheroes.json", true); // async

  // wait till request is complete
  request.onload = function(){
    // check status
    if (request.status == 200) {
      //console.log(request.response);

      // where do we start?
      var data = request.response; // top of tree
      //console.log(data);
      buildMarkup(data);

    } else {
      console.log("fuck");
    }
  }
  request.responseType = "json"; // MAKE SURE THIS IS HERE. browser wants to kill you if not
  request.send();
  // then write markup in #root


}
function buildMarkup(objJSON){

  var heroes = objJSON['members'];

  for (var i = 0; i < heroes.length; i++) {
    // get the data we need
    var hero = heroes[i];
    var name = hero.name;
    var powers = hero["powers"];

    // markup elements we'll need
    var newDiv = document.createElement("div");
    var newH2 = document.createElement('h2');


    newH2.textContent = name;

    document.getElementById("root").appendChild(newDiv);

    newDiv.appendChild(newH2);
    for (var j = 0; j < powers.length; j++) {
      var newP  = document.createElement('p');
       newP.textContent = powers[j];
       newDiv.appendChild(newP);
    }


  }
}
