<?php
  $suits = array("Hearts", "Clubs", "Diamonds", "Spades");
  $values = array("Two", "Three", "Four", "Five", "Six", "Seven", "Eight", "Nine", "Ten", "Jack", "Queen", "King", "Ace");
  $cards = array();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Deck of Cards</title>
  </head>
  <body>
    <h1>Cards</h1>
    <ul>
        <?php
            foreach ($suits as $suit) {
                foreach ($values as $value) {
                  array_push($cards, $value . " of " . $suit);
                }
            }

            shuffle($cards);

            foreach ($cards as $card) {
              echo "<li>" . $card . "</li>";
            }
        ?>
    </ul>
  </body>
</html>
