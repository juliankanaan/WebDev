<?php session_start(); ?>

<head>
<?php
include("CustInfoFunctions.php");
include("class-checkout.php");
/*
- Thank you message {name, email}
*/
$user = retrieveUserInfoFromSession(); # get User object & its details
# parse the object for what we need
$userFirstName = $user->firstName;
$userEmail = $user->email;
$total = printTotal($user);
include("class-email-functions.php");
mailer($userEmail, $total);
 ?>
<?php include("header.php"); ?>
</head>
<body>
  <div class="container" style="text-align: center;">
    <h3>Thanks for your order, <?php echo $userFirstName; ?></h3>
    <p>You should receive an email at <?php echo $userEmail; ?>
  </div>
  <?php include("footer.php"); ?>
</body>
</html>
