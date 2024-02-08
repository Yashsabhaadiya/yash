<?php 

$x = 59.67;
var_dump(is_int($x)); #"is_integer()" and "is_long()" can be used insted of "is_int()"
echo "<br>";

$y = 5967;
var_dump(is_int($y));
echo "<br>";

$z = 56.89;
var_dump(is_float($z)); # "is_double()" can be used isted of "is_float()"
echo "<br>";

$a = 1.9e411;
var_dump($a); # for check is infinte or finite
echo "<br>";

$w = acos(8);
var_dump($w); # to check is a number or not
echo  "<br>";

$r = 5986;
var_dump(is_numeric($r));
echo  "<br>";

$e = "5986";
var_dump(is_numeric($e));
echo  "<br>";

$t = "59.86" + 6978;
var_dump(is_numeric($t));
echo  "<br>";

$y = "hello";
var_dump(is_numeric($y));
echo  "<br>";



// float to int value conversion

$g = 5789.87;
$int_cast = (int)$g;
echo $int_cast;
echo  "<br>";

// string to int value conversion

$l = "5789.87";
$string_cast = (int)$l;
var_dump($string_cast);

?>