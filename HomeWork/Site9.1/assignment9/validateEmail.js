document.ready(function(){

  $("#subCust").click(function(e){
      e.preventDefault();
      var email = $("#emailCust").val();

      var isGoodEmail = validateEmail(email);

      // submit form only if its a good email
      if (isGoodEmail) {
        $("#custForm").submit();
      } else {
        triggerAlert("Bad email");
      }


  });

  function validateEmail(email){

    if (!email.indexOf("@nyu.edu") >=0) {
      return false;
    } else {
      return true;
    }
  }
  function triggerAlert(message) {
    alert(message);
  }
});
