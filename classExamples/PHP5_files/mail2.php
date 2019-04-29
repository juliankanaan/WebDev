<?php
ini_set('display_errors', true);
ini_set('display_startup_errors', true);
error_reporting(E_ALL);
$to = "hull@cs.nyu.edu";
$subject = "An Amazing Email Discovery";
$message = "Hello there.";
$headers = "From: nh2@i6.nyu.edu" . "\r\n" .
           "Reply-To: nathan@nyu.edu" . "\r\n" .
           "X-Mailer: PHP/" . phpversion();

mail($to, $subject, $message, $headers);

echo "mail sent";
 ?>