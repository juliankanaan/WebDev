<?php
include("shoppingcart-functions.php");

class ShoppingCart extends Item {
  public $items = array(); // holds array of Item objects by default

  function __construct(){
    // nothing to go here; ShoppingCart is just an array of Items
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
  function calculateBalance(){
    $subTotal = 0;
    $cart = $this->items;
    for ($i=0; $i < sizeOf($cart) ; $i++) {
      $subTotal += $cart[$i]->price; // increment
    }
    return $subTotal;
  }
  function getItemByName($nameToFind){
    $cart = $this->items;
    $matchingItem = null;

    for ($i=0; $i < sizeOf($cart) ; $i++) {
      if ($cart[$i]->name == $nameToFind) {
        $matchingItem = $cart[$i];
      }
    }
    return $matchingItem;
  }

} // ShoppingCart class

class User extends ShoppingCart {
  public $email;
  public $firstName;
  public $lastName;
  public $cart = [];  // each user has ShoppingCar(empty by default

  function __construct($firstName, $lastName, $email){
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->email = $email;
    $this->cart = new ShoppingCart(); # assign ShoppingCart object

  }
  function getCartObject(){
    return $this->cart;
  }
  function setCartObject($cartObj){
    $this->cart = $cartObj;
  }

} // end User class


function setUserInfoToSession($userObj){
  session_start();
  $_SESSION['userDetails'] = serialize($userObj); // session data serialized

}
function retrieveUserInfoFromSession(){
  session_start();
  $userObj = unserialize( $_SESSION['userDetails'] );

  return $userObj;
}
function captureFormGets(){

    $details = array(); // empty
    if (isset($_GET['firstName'])){
    $firstName = $_GET['firstName'];
    $lastName  = $_GET['lastName'];
    $email = $_GET['email'];

    array_push($details, $firstName, $lastName, $email);
    return $details;
  } else {
    return null;
  }

}
function handleCartChanges($currentUser, $inventory){

  $currentCart = $currentUser->cart;

  $action = $_GET['action'];
  $itemName = $_GET['itemname'];
  $result = array('type' => "failure", # success or failure
                  'message' => "could not handle change. whoops.", # explanation
                  'cartBalance' => $currentCart->calculateBalance()
                  );

  # url string: /?action=addtocart&itemname=bananas

  if ($action == "addtocart") { #user wants to add item to cart
    # find item Object by name ** in Inventory **
    $itemObj = $inventory->findItemByName($itemName);

    if ($itemObj) { // did we find this item?
      if ($itemObj->quantity > 0) { // ..is the item in stock?
        $currentCart->addItem($itemObj);
        setUserInfoToSession($currentUser); // update session info
        $result['type'] = "success";
        $result['message'] = "Added to cart!";
        $result['cartBalance'] = $currentCart->calculateBalance();

      } else {
        $result['type'] = "failure";
        $result['message'] = "Item is out of stock!";
      }
    } else { // no item object found
      $result['type'] = "failure";
      $result['message'] = "Item not found in store inventory!";
    }

  } elseif ($action == "deleteitem") { # user wants to delete item
    # find item Object by name ** in Cart **
    $itemObj = $currentCart->findItemByName($itemName);
    if ($itemObj){
      # remove this from cart
      $currentCart->removeItem($itemObj);
      #TODO: update inventory quantity (add back item)
    } else {
      $result['type'] = "failure";
      $result['message'] = "Item not found in store inventory!";
    }

  } // deleteitem

  return $result;
} // handleCartChanges()




 ?>
