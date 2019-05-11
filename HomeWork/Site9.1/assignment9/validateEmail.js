$(document).ready(function(){

  $("#subCust").click(function(e){
      e.preventDefault();
      var email = $("#emailCust").val();

      // submit form only if its a good email
      if (validateEmail(email)) {
        $("#custForm").submit();
      } else {
        triggerAlert("Bad email");
      }


  });

  function validateEmail(email){

    if (!email.includes("@nyu.edu")) {
      return false;
    } else {
      return true;
    }
  }
  function triggerAlert(message) {
    alert(message);
  }
  console.log(validateEmail("jk@nyu.edu") );
});
