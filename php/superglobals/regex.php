<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php

    $str = "visit w3school";
    $pattern = "/w3school/i";

    echo preg_match($pattern, $str);

    echo  "<br>";

    $string = "visit microsoft";
    $patterns = "/microsoft/i";

    echo preg_replace($patterns, "w3school", $string);

    echo "<br>";

    $str = "The rain in SPAIN falls mainly on the plains.";
    $pattern = "/ain/i";
    echo preg_match_all($pattern, $str);

    ?>
</head>

<body>

</body>

</html>