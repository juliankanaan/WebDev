<?php
session_start();
$sessionID = session_id();

 ?>
 <?php
 ini_set('display_errors', true);
 ini_set('display_startup_errors', true);
 error_reporting(E_ALL);
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

// attach object to session

if (!$sessionID) { # create new user object if user doesnt have one yet
  $currentUser = new User( $userInfo[0],$userInfo[1], $userInfo[2]);
  setUserSession($currentUser);
}


// create cart Object for user
$currentCart = new ShoppingCart();

if ($_GET['action']) { // handle Form submissions if they exist
  $result = handleCartChanges($currentCart, $currentUser, $inventoryObj);

  print($result['type']); // success or failure
  print($result['message']); // explanation
}
print_r($currentCart);


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


  </html>
