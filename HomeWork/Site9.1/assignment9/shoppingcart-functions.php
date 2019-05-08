<?php

// inventory management

class Item {

  # ItemName, price, quantity, url

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


}#usage: $item1 = new Item("pickles", "10.10" etc);

class Inventory extends Item { # merchant inventory

  public $inventoryItems = []; // empty array for Items to go in

  function __construct($itemArr){
    $this->inventoryItems = $itemArr;
  }
  function findItemByName($nameString){
    $val = NULL ;
    foreach ($this->inventoryItems as $obj) {
      if ($nameString == $obj->name){
        $val = $obj;
      }
    }
    return $val;
  }
  function changeQuantity($item, $newQ){ // take name & new quantity
    # find the item first
    changeTxtQuantity($item->name, $newQ);
    $item->quantity = $newQ;
    return $item->quantity;
  }
  function changePrice($item, $newP){ // take name & new quantity
    # find the item first
    // need to change text file
    changeTxtPrice($item->name, $newP);
    $item->price = $newP;

    return $item->price;
  }
  function getItems(){
    return $this->inventoryItems;
  }
  function addItem(Item $thisItem){ #price & name
    $this->inventoryItems[] = $thisItem; // add items to inventory
  }
  function removeItem(Item $thisItem){
    $items = $this->inventoryItems;
    for ($i=0; $i < sizeOf($items) ; $i++) {
      if ($items[$i] == $thisItem){
        unset($items[$i]);
        //rewriteFile($items);
        print("removed");
      }
    } // loop
  } // removeItem();


  function printItems(){
    foreach ($this->inventoryItems as $item) {
      if ($item->quantity == 0){

      } else {
        echo "<div class='product'>";
        echo "<img src='../assets/" . $item->imageUrl . "' width=200>";
        echo "<p>" . $item->name . "- Stock: " .$item->quantity . "</p>";
        echo "<p>$" . $item->price . "</p>";

        echo "</div>";
      }
    }
  } // printItems()
   function printProductPage(){
     foreach ($this->inventoryItems as $item) {
       if ($item->quantity > 0){ # in stock
         echo "<div class='product'>";
         echo "<img src='../assets/" . $item->imageUrl . "' width=200>";
         echo "<p>" . $item->name . "- Stock: " .$item->quantity . "</p>";
         echo "<p>$" . $item->price . "</p>";
         echo "<p><button name='" . $item->name . "' value='addtocart'>Add to cart</button></p>";
         echo "</div>";

       } else { # not in stock
         echo "<div class='product'>";
         echo "<img src='../assets/" . $item->imageUrl . "' width=200>";
         echo "<p>" . $item->name . "- Stock: " .$item->quantity . "</p>";
         echo "<p>$" . $item->price . "</p>";
         echo "<p><i>Not in stock</p>";
         echo "</div>";
       }
     } // foreach loop
   } // printProductPage();


}
function readItemsFromFile(){
  $itemArr = []; // empty for now

  $lines = file("inventory.txt");

  foreach ($lines as $line) {
    # split again by commas
    $itemDetails = split(",", $line); # ex bananas,20.00,banana.png,43

    $params = []; // arr to create Item obj
    if ($itemDetails[1]){ // skip blank lines if exist
      for ($i=0; $i < 4; $i++) {
        $params[$i] = $itemDetails[$i];
      }
      $newItem = new Item($params[0], $params[1], $params[2], $params[3]);
      array_push($itemArr, $newItem);
    }
  }
  return $itemArr;

}
function changeTxtPrice($name, $newPrice){
  //print($name);
  $oldItems = readItemsFromFile(); // save this for later
  $newArr = []; // empty
  foreach ($oldItems as $item){ // iterate over each object

        if ($item->name == $name){ // find the item array that has this name
          //echo "found";
          $item->price = $newPrice; // change price then
        }
        array_push($newArr, $item);
    } // end item loop

  # now re-write file
  $fp = fopen('inventory.txt', "w"); // re-write

  foreach ($newArr as $newItem) {
    $newLine = $newItem->name . "," . $newItem->price . "," . $newItem->imageUrl . "," . $newItem->quantity;
    //print($newLine);
    fwrite($fp, $newLine);
  }
  fclose($fp);
}
function changeTxtQuantity($name, $newQ){
  //print($name);



  $oldItems = readItemsFromFile(); // save this for later
  $newArr = []; // empty
  foreach ($oldItems as $item){ // iterate over each object

        if ($item->name == $name){ // find the item array that has this name
          //echo "found";

          $item->quantity = $newQ; // change price then

        }

          array_push($newArr, $item); // push to new array if new quantity isnt zero

    } // end item loop

  # now re-write file
  $fp = fopen('inventory.txt', "w"); // re-write

  foreach ($newArr as $newItem) {
    $newLine = $newItem->name . "," . $newItem->price . "," . $newItem->imageUrl . "," . $newItem->quantity . "\n";
    //print($newLine);
    fwrite($fp, $newLine);
  }
  fclose($fp);
}
function rewriteFile($oldItems){

  # now re-write file
  $fp = fopen('inventory.txt', "w"); // re-write

  foreach ($oldItems as $newItem) {
    $newLine = $newItem->name . "," . $newItem->price . "," . $newItem->imageUrl . "," . $newItem->quantity . "\n";
    print($newLine);
    fwrite($fp, $newLine);
  }
  fclose($fp);
}

?>
