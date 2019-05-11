<?php session_start(); ?>

<html>

  <?php
  include("header.php");
  include("CustInfoFunctions.php");

  ?>

  <div class="container">
    <h3>Start shopping by inputting your info</h3>
    <form id="custForm" action="products.php" method="get" >
      <div class="form-group">
      <input type="text" name="firstName" value="" placeholder="John" required>
      <input type="text" name="lastName" value="" placeholder="Smith" required>
      <input id="emailCust" type="text" name="email" value="" placeholder="you@gmail.com" required>
      <input type="hidden" name="submitted" value="true">
      <button type="submit" id="subCust" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>

<script src='validateEmail.js'></script>
</body>

</html>
