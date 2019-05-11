<?php
// email order summary
function mailer($to, $total){

  $message = "Your order total: $" + $total;

  $mail = mail($to, "Your order", $message);

  if ($mail) { # check if sent
    return true;
  } else {
    return false;
  }
}
 ?>
