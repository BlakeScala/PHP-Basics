<?php
    $input = $_GET["message"];
    $new_string = encode($input);

    function encode($input_string) {
      $reversed_string = strrev($input_string);
      $new_string = strtoupper($reversed_string);
      return $new_string;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Encrypt a Message</title>
</head>
<body>
    <div class="container">
        <h1>Message encrypted!</h1>
        <h2>Here you go: <?php echo $new_string ?></h2>
    </div>
</body>
</html>
