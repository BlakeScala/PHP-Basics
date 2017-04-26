<?php
  $starting_number = $_GET["starting_number"];

  $factorial = function factorial($starting_number) {
        if ($starting_number < 2) {
            return 1;
        } else {
            return ($starting_number * factorial($starting_number-1));
        }
    }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>The factorial of <?php echo $starting_number?> is <?php factorial($starting_number) ?></h3>
  </body>
</html>
