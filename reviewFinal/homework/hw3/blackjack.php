<?php
// game of blackjack

//$cardTypes = [1,2,3,4,5,6,7,8,9,10,A,K,Q,J];
$cardVals  = [1,2,3,4,5,6,7,8,9,10,11,10, 10, 10];

// dealHand
function dealHand($cards){

  $newCards = [];

  $card1 = rand(0, 14); // 0 to whatever
  $card2 = rand(0, 14); // 0 to whatever

  // push to Array

  array_push($newCards, $card1, $card2);

  return $newCards;
}

//print_r(dealHand($cardVals));
function assessHand($cardArr){

  $subtotal = 0;

  // loop over en
  foreach ($cardArr as $cardVal) {
    $subtotal += $cardVal;
  }
  return $subtotal;
}

$gimmeCards = dealHand();

$result = assessHand($gimmeCards);

print($result);

function playGame(){

  $hasWon = false;

  while (!$hasWon) {
    $tries++; 
    $gimmeCards = dealHand();
    $result = assessHand($gimmeCards);
    $tries = 0;

    if ($result == 21) {
      echo "blackjack";
      $hasWon = true;
      break;
    } else {
      echo $result;
    }
  }
  return $tries;
}

 ?>
