<?php

// inventory management

/*
ItemName
price
quantity
url
*/


class Item {
  public $price;
  public $name; // string
  public $imageUrl;
  public $quantity;

  function __construct($itemName, $itemPrice, $url, $quant){
    $this->name = $itemName; // construct items by giving them names
    $this->price = $itemPrice;
    $this->imageUrl = $url;
    $this->quantity = $quant;
    //writeItem($ItemName, $itemPrice, $url, $quant);
  }
  function getImageUrl(){
    return $this->imageUrl;
  }
  function getName(){
    return $this->name;
  }
  function getQuantity(){
    return $this->$quantity;
  }
  function setImageUrl($pathString){
    $this->imageUrl = $pathString;
  } // uage: echo $item1->getName();

}#usage: $item1 = new Item("pickles", "10.10");

class Inventory extends Item { # merchant inventory

  public $inventoryItems = []; // empty array for Items to go in

  function __construct(){

  } // no args
  function findItemByName($nameString){
    $val = NULL ;
    foreach ($this->inventoryItems as $obj) {
      if ($nameString == $obj->name){
        $val = $obj;
      } else {
        $val = 0;
      }
    }
    return $val;
  }
  function changeQuantity($item, $newQ){ // take name & new quantity
    # find the item first

    $item->quantity = $newQ;
    return $item->quantity;
  }
  function changePrice($item, $newP){ // take name & new quantity
    # find the item first


    $item->price = $newP;

    return $item->price;
  }
  function getItems(){
    return $this->inventoryItems;
  }
  function addItem(Item $thisItem){ #price & name
    $this->inventoryItems[] = $thisItem; // add items to inventory
  }
  function printItems(){
    foreach ($this->inventoryItems as $item) {
      echo "<div class='product'>";
      echo "<img src='" . $item->imageUrl . "' width=200>";
      echo "<p>" . $item->name . "- Stock: " .$item->quantity . "</p>";
      echo "<p>$" . $item->price . "</p>";

      echo "</div>";

    }
  }

}
function readItemsFromFile(){
  $itemArr = []; // empty for now

  $lines = file("inventory.txt");

  foreach ($lines as $line) {
    # split again by commas
    $itemDetails = split(",", $line); # ex bananas,20.00,banana.png,43

    $params = []; // arr to create Item obj

    for ($i=0; $i < 4; $i++) {
      $params[$i] = $itemDetails[$i];
    }
    $newItem = new Item($params[0], $params[1], $params[2], $params[3]);
    array_push($itemArr, $newItem);
  }
  return $itemArr;

}
function writeItem(Item $newItem){
  $fp   = fopen('inventory.txt', "a+"); // open file
  $name = $newItem->name;
  $price = $newItem->price;
  $url = $newItem->imageUrl;
  $quantity = $newItem->quantity;

  $line = $name . "," . $price . "," . $url . "," . $quantity . "\n"; // line by line
  fwrite($fp, $line); // write
  fclose($fp); // close it up
}
class ShoppingCart extends Item {

  // to be cont'd

} // end ShoppingCart

?>
