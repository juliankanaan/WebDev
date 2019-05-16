
// create an empty list of stuff

var items = new Array(); // no length

// var items = []; // works too

// push stuff to it
items.push("cow");
items.push("chicken");

console.log( items ); // [cow, chicken]

// iterate over it?

items.forEach(function(item){
  console.log(item);
});
// or like this:

for (var i = 0; i < items.length; i++) {
  console.log( items[i] );
}
// want to collapse elements into a string?

console.log( items.toString() ); // returns squashed "cow,chicken"
