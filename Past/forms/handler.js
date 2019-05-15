
function handleForm(data){ // argument name is whatever: being called by handleForm(this.form); in a submit button

  var input1 = data.textbox1.value; // use the names of the inputs 
  var input2 = data.textbox2.value;
  
  // do something with it: 
  
  newArray = []; // empty 
  
  newArray.push(input1, input2); 

  return newArray; 
}
