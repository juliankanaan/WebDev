/*
There are a random number of yellow, blue, white, green, black, purple, silver,
cyan and magenta gumballs and one red gumball. With a pocket full of quarters,
 you have set your heart on getting that single red gumball. So, write a program that will
 simulate buying gumballs until you get the red one.

 */

 // create empty 2D arr

 var balls = ["yellow", "blue", "white", "green", "black", "purple", "silver", "cyan", "magenta"];

 var machineInventory = createGumballPopulation(balls); // {"color" : "number, ...}

 tryForGumball(machineInventory, balls);

 // create empty key-val arr
function createGumballPopulation(types){

  var newArr = new Array(); // empty

  for (var i = 0; i < types.length; i++) {
    // create new object

    var color = types[i]; // key
    var number = Math.floor( Math.random() * 20 );

    // push to array

    newArr[color] = number; // assign value to key

  }


  return newArr; // {"red" : 200}
}
 function tryForGumball(machineInventory, balls){

   var found = false;

   while (!found) {
    var ball = dispenseGumball(machineInventory, balls);

    if (ball == "red") {
      found = true;
      break;
    }
  } // end while

 }
 function dispenseGumball(inventory, balls) {

   var index = Math.floor( Math.random() * (balls.length));

   // what's the name of the index we chose?

   var gumballColorReceived = balls[index];

   // console.log(gumballColorReceived);
   return gumballColorReceived; // ie. red
 }
