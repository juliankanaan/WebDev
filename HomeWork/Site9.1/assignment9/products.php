<?php
session_start();


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
# create new Inventory obj
$inventoryObj = new Inventory($inventoryItems);

// get data to create new User object
$userInfo = captureFormGets(); // $_GET values from submission

// create cart Object for user
$currentCart = new ShoppingCart(); #

// attach object to session, or retrieve it

if ($userInfo) { # create new user object if user doesnt have one yet
  $currentUser = new User( $userInfo[0],$userInfo[1], $userInfo[2], $currentCart);
  setUserInfoToSession($currentUser); # pass User object to session
  $userFirstName = $userInfo[0];
} else {
  $currentUser = retrieveUserInfoFromSession(); # get User object & its details
  $userFirstName = $currentUser->firstName;
}



if ($_GET['action']) { // handle Form submissions if they exist
  $result = handleCartChanges($currentUser, $inventoryObj);

  print($result['type']); // success or failure
  print($result['message']); // explanation
  //print_r($currentUser->cart); # see the cart after changes
}



include("header.php");

//print_r($currentUser);
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
    <h3>Hi <?php echo $userFirstName; ?>!</h3>
    <div class="products">
      <?php $inventoryObj->printProductPage(); ?>
    </div>
  </div>
  <div class="container">
    <button onclick="window.location.href='checkout.php'" class="btn btn-primary">Go to cart</button>
  </div>
<?php include("footer.php"); ?>
</body>
  </html>
