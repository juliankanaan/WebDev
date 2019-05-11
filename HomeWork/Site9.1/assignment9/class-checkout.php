<?php

function printCheckoutItems($userObj){

  $cartItems = $userObj->cart->items;

  foreach ($cartItems as $item) {
    $thumbnail = "<img src='../assets/" . $item->imageUrl . "' width=100>";

    echo "<tr class='item'>";
      echo "<td class='thumbnail'>";
        echo $thumbnail;
      echo "</td>";
      echo "<td class='title'>" . $item->name . "</td>";
      echo "<td class='price'>" . $item->price . "</td>";
    echo "</tr>"; # close item div

  } // end product markup loop


}
function printTotal($userObj){
  echo $userObj->cart->calculateBalance();
}

?>
