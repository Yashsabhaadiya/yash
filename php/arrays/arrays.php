<?php

function myfunction(){
    echo "this is a function called by an array";
}

$array = array("volvo", 15, ["apples", "bananas"], myfunction());

$array[3];
echo "<br>";

$new = array("Audi", "BMW", "Cietron");
echo count($new);

?>