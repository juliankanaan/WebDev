// handles form




  // button calls "handleSubmit()"

function handleForm(formData){ // button sends "this.form" as an argument

  var name = formData.name.value; // traverse child DOM elements by *name*
  var email = formData.email.value;

  console.log(name, email);

  // show user this

  document.getElementById("emailOutput").innerHTML = email; // traverse DOM, use innerHTML
  document.getElementById("nameOutput").innerHTML = name;

}
