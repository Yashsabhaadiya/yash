<?php

session_start();

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

session_unset();
session_destroy();
echo "favourite color is : " . $_SESSION["favcolor"] . "<br>"; 
echo "favourite color is : " . $_SESSION["favanimal"] . "."; 

    echo "all the sessions are destroyed successfully";
?>
</body>
</html>