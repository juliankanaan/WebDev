<?php
session_start();
$sessionID = session_id();

 ?>
<html>
<head>
<?php

include("CustInfoFunctions.php");
// get our inventory
$inventoryItems = readItemsFromFile();
$inventoryObj = new Inventory($inventoryItems);
// create new User object

$userInfo = captureFormGets(); // $_GET values from submission
// create User with these objects
$currentUser = new User( $userInfo[0],$userInfo[1], $userInfo[2]);
// attach object to session
setUserSession($currentUser);

// create cart Object for user
$currentCart = new ShoppingCart();

if ($_GET['action']) { // handle Form submissions if they exist
  $result = handleCartChanges($currentCart, $currentUser);

  print($result['type']); // success or failure
  print($result['message']); // explanation
}



include("header.php");
?>
</head>
<style>
.products{
  display: flex;
  justify-content: space-between;
}
</style>
<body>
  <div class="container">
    <h3>Hi <?php echo $userInfo[0]; ?>!</h3>
    <div class="products">
      <?php $inventoryObj->printProductPage(); ?>
    </div>
  </div>


  <?php include("footer.php"); ?>
  </html>
