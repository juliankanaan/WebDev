// checks email that its an actual email


jQuery(document).ready(function() {

  /* PART A: Poll Submission / validation */
  jQuery("#submitPoll").click(function(e){
    e.preventDefault(); // dont load and fire immediately

    var emailEntry = jQuery("#email").val(); // get what the entered val is


    if (validateEmail(emailEntry)){ // is this an email?
      // submit form
      jQuery("#pollForm").submit();
    } else {
      alert("invalid email");
    }

  }); // end poll click

  /* PART B: Summary page stuff */
  jQuery("#emailList").click(function(e){
    e.preventDefault();

    // upon clicking radio buttons, change the div

    jQuery("histogramPanel").fadeOut(); // reveal email div (fade in for style)
    jQuery("#emailPanel").fadeIn();


  });
  jQuery("#histogram").click(function(e){
    e.preventDefault();

    jQuery("emailPanel").fadeOut();
    jQuery("#histogramPanel").fadeIn();
  });


}); // document.ready
function validateEmail(email){

  var hasErrors = 0; // count up errors
  // check that it contains an "@"

  if (!email.indexOf('@')){ // https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/indexOf
    hasErrors++;
  }
  // check that it has a "."
  if (!email.indexOf('.')){
    hasErrors++;
  }

  // return true or false

  if (hasErrors > 0){
    return false;
  } else {
    return true;
  }

} // validateEmail();
