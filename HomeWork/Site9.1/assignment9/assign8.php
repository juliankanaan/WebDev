
<html>

<?php

// creating a shopping cart
include_once("shoppingcart-functions.php");

$cartStuff = readItemsFromFile(); # read current inventory from .txt file

# create new inventory with it

$inventory1 = new Inventory(); // obj
// add items one by one
foreach ($cartStuff as $item) {
  $inventory1->addItem($item);
}
if (isset($_GET['submitted'])){ # form submitted
  $productName = $_GET['name'];
  //echo $productName;
  $productPrice = $_GET['price'];
  $quantity = $_GET['quantity'];

  $prodObj = $inventory1->findItemByName($productName);

  if (!$prodObj){
    echo "whoops. couldnt find that product. try making the text file readable?";
  } else {

    $inventory1->changePrice($prodObj, $productPrice); # change object properties as form GETs


    $inventory1->changeQuantity($prodObj, $quantity);
  }
}

include('header.php');
?>
<style>
.products{
  display: flex;
  justify-content: space-between;
}
</style>
<div class="container">
  <p>I used some object-oriented programming style as an experiment (like I do in java)</p>
</div>
<div class="container products">



  <?php $inventory1->printItems(); ?>
</div>


</div>
<div class="container">
  <div class="changeThings">
    <p>Change properties of the inventory</p>
    <form method="get" action="">
      <label for="newName">Enter Name</label>
      <input id="newName" type="text" name="name" placeholder="ex. raddish">
      <label id="newPrice" for="newName">Enter new price</label>
      <input type="text" name="price" placeholder="ex. 1.99">
      <label for="newQ">Enter new quantity</label>
      <input id="newQ" type="text" name="quantity" placeholder="ex. 200">
      <input type="hidden" name="submitted" value="true" />
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>


</body>

</html>
