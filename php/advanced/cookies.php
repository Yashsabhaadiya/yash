<?php

$cookie_name = "user";
$cookie_value = "yash sabahdiya";

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    if (!isset($_COOKIE[$cookie_name])) {
        echo "cookie named " . $cookie_name . " is not set!";
    } else {
        echo "cookie " . $cookie_name . " is set! <br>";
        echo "value is: " . $_COOKIE[$cookie_name];
        echo "<br>";
    }

    if(count($_COOKIE) > 0) {
        echo "Cookies are enabled.";
      } else {
        echo "Cookies are disabled.";
      }        


    ?>


</body>

</html>