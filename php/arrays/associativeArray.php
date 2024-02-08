<?php

$car = array("brand"=> "ford", "model" => "mustang", "year" => "1964");

var_dump($car);
echo "<br>";

echo $car["model"];
echo "<br>";

foreach ($car as $x => $y) {
  echo "$x: $y <br>";   
}
?>