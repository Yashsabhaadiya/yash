<?php

$cars = array("volvo", "bmw", "audi");
var_dump($cars);
echo "<br>";
echo $cars[0];
echo "<br>";
echo $cars[1] = "ford"; # for changing specific array indexed value
echo "<br>";
echo $cars[1];
echo "<br>";

#loop throught printing array values

foreach($cars as $x){
    echo "$x <br>";
}
echo "<br>";
#push new value in array

array_push($cars, "mercedes");
var_dump($cars);


?>