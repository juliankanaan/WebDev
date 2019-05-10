<?php session_start(); ?>
<?php
ini_set('display_errors', true);
ini_set('display_startup_errors', true);
error_reporting(E_ALL);
?>
<html>
<head>
  <?php
  include("header.php");
  include("CustInfoFunctions.php");

  ?>

  <div class="container">
    <form id="custForm" action="products.php" method="get" onsubmit="return false;">
      <div class="form-group.php">
      <input type="text" name="firstName" value="" placeholder="John" required>
      <input type="text" name="lastName" value="" placeholder="Smith" required>
      <input id="emailCust" type="text" name="email" value="" placeholder="you@gmail.com" required>
      <input type="hidden" name="submitted" value="true">
      <input id="subCust" type="submit" name="submit" value="Submit">
      </div>
    </form>
  </div>

<script src='validateEmail.js'></script>
</body>

</html>
