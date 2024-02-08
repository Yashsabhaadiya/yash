<?php

// string, int, float, bool, array, object, unset type casting in PHP

$a = 5;
$string_cast = (string) $a; #string conversion
var_dump($string_cast);
echo "<br>";

$x = "25 kilometer";
$int_cast = (int)$x; #int conversion
var_dump($int_cast);
echo "<br>";

$y = "hello";
$float_cast = (float)$y; #float coversion
var_dump($float_cast);
echo  "<br>";

$b = 5;
$bool_cast = (bool)$b; #bool conversion
var_dump($bool_cast);
echo "<br>";

$c = 25;
$array_cast = (array)$c; #array conversion
var_dump($array_cast);
echo "<br>";

$d = 34;
$obj_cast = (object)$d; #obj conversion
var_dump($obj_cast);
echo  "<br>";

$e = 45;
$null_cast = (unset)  $e; #null conversion
var_dump($null_cast);
echo   "<br>";


?>