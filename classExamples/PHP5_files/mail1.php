<?php
ini_set('display_errors', true);
ini_set('display_startup_errors', true);
error_reporting(E_ALL);
mail('hull@cs.nyu.edu', 'Hello', 'This is a test message.');
echo "mail sent";
 ?>