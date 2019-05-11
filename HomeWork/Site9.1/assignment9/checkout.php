<?php session_start(); ?>

<html>
<?php
include("CustInfoFunctions.php");
include("class-email-functions.php");
// checkout page

/*
- show all items in cart {img, title, price}
- SHow total
  - will need to carry ShoppingCart object thru user session
  - printCartContents() OO function
- confirm button -> sends to order-confirmation page
*/

// get our current user
$user = retrieveUserInfoFromSession(); # get User object & its details
# parse the object for what we need
$userFirstName = $user->firstName;
$userEmail = $user->email;
$userCart = $user->cart; # NOTE: this is an **object**

mailer($userEmail, printTotal($user));

# include relevant php
include("class-checkout.php");
?>
<head>
  <?php include("header.php"); ?>
</head>

<body>
  <div class="container" style="text-align: center;">
    <h3><?php echo $userFirstName; ?>'s cart</h3>
  </div>
  <div class="container one">
    <table class="checkout-grid" >
      <?php printCheckoutItems($user); ?>
    </table>

  </div>
  <div class="container" style="text-align: center;">
    <h4>Your total is $<?php printTotal($user); ?>
    <button onclick="window.location.href='order-confirmation.php'" class="btn btn-primary">Confirm Order</button>
  </div>

<?php include("footer.php"); ?>
</body>
</html>
