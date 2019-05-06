
<html>

<?php
include('header.php');
//include("js/pollValidation.js"); // dont let form get submitted before validation
include("cookieSetter.php"); // to make 



?>


<div class="container">
  <form id="pollForm" method="post" action="poll-processing.php">

  <p>Vote for your favorite color</p>
    <div class="radios">
      <input  type="radio" name="color" id="red" value="red" checked>
      <label  for="red">
        Red
      </label>
      <input  type="radio" name="color" id="blue" value="blue" >
      <label  for="blue">
        blue
      </label>
      <input  type="radio" name="color" id="green" value="green" >
      <label  for="green">
        green
      </label>
      <input  type="radio" name="color" id="yellow" value="yellow" >
      <label  for="yellow">
        yellow
      </label>
    </div><!-- end radios div -->
    <div class="emails">
      <label for="email">Email</label>
      <input name="email" class="email" type="email" id="email" placeholder="you@gmail.com">
    </div>


    <input type="hidden" name="submitted" value="true" />

  </form>
    <button id="submitPoll" class="btn btn-primary">Submit</button><!-- outside of form so press doesnt submit it yet -->

</div>


<div class="container">

  <p>View <a href="results.txt">results.txt</a></p>
</div>


<?php include("footer.php"); ?>
</body>

</html>
