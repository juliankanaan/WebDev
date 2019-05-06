<?php
include("shoppingcart-functions.php");

class ShoppingCart extends Item {
  public $items = array(); // holds array of Item objects by default

  function __construct(){

  }
  function addItem(Item $newItem){
    array_push($this->items, $newItem); // add to Item array
  }
  function removeItem(Item $thisItem){
    $cart = $this->items;
    for ($i=0; $i < sizeOf($cart) ; $i++) {
      if ($cart[$i] == $thisItem){
        unset($cart[$i]);

        print("removed");
      }
    }
  } // removeItem();



}

class User {
  public $email;
  public $firstName;
  public $lastName;
  public ShoppingCart $cart; // each user has ShoppingCart
  #public sessionID;


  function __construct($firstName, $lastName, $email, $sessionID ShoppingCart $cart){


  }
}
function setSession($variableName, $value){
  # session_start();
}


 ?>
