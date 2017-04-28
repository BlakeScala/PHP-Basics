<?php
  $suits = array("Hearts", "Clubs", "Diamonds", "Spades");
  $values = array("Two", "Three", "Four", "Five", "Six", "Seven", "Eight", "Nine", "Ten", "Jack", "Queen", "King", "Ace");
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
                  echo "<li>" . $value . " of " . $suit . "</li>";
                }
            }
        ?>
    </ul>
  </body>
</html>
