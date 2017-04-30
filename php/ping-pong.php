<?php
  $input = $_GET["inputNumber"];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ping Pong</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  </head>
  <body>
    <ul>
      <?php
        echo $input;
        for ($i=0; $i < $input; $i++) {
          if ($i % 15 == 0) {
            echo "<li>" . "Ping Pong" . "</li>";
          } else if ($i % 5 == 0) {
            echo "<li>" . "Pong" . "</li>";
          } else if ($i % 3 == 0) {
            echo "<li>" . "Ping" . "</li>";
          } else {
            echo "<li>" . $i . "</li>";
          }
        }
      ?>
    </ul>
  </body>
</html>
