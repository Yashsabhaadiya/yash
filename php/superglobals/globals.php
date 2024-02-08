<?php 

/*
$x = 56;

function myfunction(){
    // echo $GLOBALS['x']; 
    global $x;
    echo $x;
}

myfunction();
*/

function myfunction(){
    echo $GLOBALS['x'] = 100;
}

myfunction();
echo "<br>";
echo $GLOBALS['x'];

?>