
// flip card over


// by default, the cards are facedown


/* Part A: Deal card */
jQuery(document).ready(function() {
    jQuery("#deal").click(function(e){
      e.preventDefault(); // don't deal until clicked

      var cards = dealCards(); // list of two rand nums. Ex [4, 2];

      jQuery("#card1form").val(cards[0]); // populate the vals of each form
      jQuery("#card2form").val(cards[1]); // second pos in the arr

      changeCard(cards[0], 1); // change first card
      changeCard(cards[1], 2); // change the second

      var total = determinePoints(cards);

      jQuery("#totalPoints").val(total); // add up both cards & display

      if (total == 21 ){
        blackjackCelebration();
      }


    });

    function dealCards(){

      var cardArr = []; // empty list so we can return it at end

      var rand1 = Math.floor((Math.random() * 13) + 2); // random between 2 & 14
      var rand2 = Math.floor((Math.random() * 13) + 2);

      cardArr.push(rand1);
      cardArr.push(rand2); // insert these into the blank list

      return cardArr; // ie [10, 2]

    }
    function changeCard(value, which){ // change img based on which value and first or second

      var urlBase = "https://cs.nyu.edu/courses/spring19/CSCI-UA.0061-002/assign4_sp2019/cards/";

      if (which == 1){ // first card
        var srcString = urlBase + value.toString() + "hearts.gif"; // create the img string
        jQuery("#cardImg1").attr("src", srcString); // change the SRC attribute to new

      } else { // second card
        var srcString = urlBase + value.toString() + "hearts.gif";
        jQuery("#cardImg2").attr("src", srcString);
      }

    }
    function determinePoints(cards){

      var pointTotal = 0;

      jQuery.each(cards, function(index, card){ // loop for each card, adding up vals

        if (card == 11){ // catch exception for the ace card
          //pointTotal+= 1;
          pointTotal+= 11; //?? idk when to logically add 11 instead
        } else if (card > 11) { // for J, Q, K exceptions
          pointTotal+= 10;
        } else {
          pointTotal+= card;
        }
      });
        // what if two aces? check
        if ((pointTotal / 2 ) == 11) {
          pointTotal = 2; // adjust total
        }

      return pointTotal;
    }

    function blackjackCelebration(){ // called when 21 is hit
      // open new window w/ gif anumation
      window.location.replace("celebration.html"); 
    }
}); // document.ready
