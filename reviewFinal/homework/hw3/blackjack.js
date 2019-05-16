// deal a hand of blackjack

function dealHand(){
  var cardArr = []; // will be two numbers

  var card1 = (Math.ceil(Math.random() * 14)); // 1 - 12 [J K Q , A]

  var card2 = (Math.ceil(Math.random() * 14));

  // push the boys

  cardArr.push(card1);
  cardArr.push(card2);

  return cardArr;
}

function assessHand(cardArr){
  var totalHandVal = 0;
  cardArr.forEach(function(cardVal){

    if (cardVal == 11) {
      cardVal = 11;
    } else if (cardVal > 11) {
      cardVal = 10;
    }

    totalHandVal += cardVal;
  });

  return totalHandVal;
}
function gameStart(){
  // give user a hand
  console.log("Welcome to blackjack");
  var hasWon = false;

  while (!hasWon) {

    var cards = dealHand();
    var score = assessHand(cards);

    if (score > 21) {
      console.log("bust");
    } else if (score == 21) {
      console.log("blackjack");
      hasWon = true;
      break;
    } else {
      console.log(score);
    }

  }


}
gameStart();
