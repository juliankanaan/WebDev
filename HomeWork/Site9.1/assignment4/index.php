<?php
ini_set('display_errors', true);
ini_set('display_startup_errors', true);
error_reporting(E_ALL);
?>
<html>

<?php include("header.php");
      include("cookieSetter.php");

      setNewCookie("hasPlayed", "true"); // set. function will detect if cookie already set

      $hasPlayed = readCookie("hasPlayed");


?>
<script src="blackjack.js"></script>
<div class="container">

<h1>Welcome to Blackjack</h1>
<p>Press Deal! to start the game</p>
<?php if ($hasPlayed){
  echo "<p>Cookie says you have played before. Welcome back!</p>";
} else {
  echo "<p>Cookie says you have <i>never</i> played before. Hi!</p>";
}
?>

<div class="container">

  <div class="cards" style="display: flex; justify-content: space-around;">
    <div class="indivCard">
      <img id="cardImg1" src="https://cs.nyu.edu/courses/spring19/CSCI-UA.0061-002/assign4_sp2019/cards/cardback.gif">
      <div class="input-group">
        <input type="text" id="card1form" class="form-control">
        <div class="input-group-append">
          <span class="input-group-text">points</span>
        </div>
      </div>
    </div>
    <div class="indivCard">
      <img id="cardImg2" src="https://cs.nyu.edu/courses/spring19/CSCI-UA.0061-002/assign4_sp2019/cards/cardback.gif">
      <div class="input-group">
        <input type="text" id="card2form" class="form-control">
        <div class="input-group-append">
          <span class="input-group-text">points</span>
        </div>
      </div>
    </div>
  </div>
  <div class="extras">
    <button id="deal" type="button" class="btn btn-secondary">Deal!</button>

    <h3> Total point in hand</h3>


    <div class="input-group">
      <input type="text" id="totalPoints" class="form-control">
      <div class="input-group-append">
        <span class="input-group-text">total points</span>
      </div>
    </div>

    <p>Hands so far: </p>
    <input type="text" id="handsSoFar" class="form-control" value="0">
  </div>

</div>



</div>

</body>

</html>
