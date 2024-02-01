<?php 

// strings

/*

$x = "Hello World!";

echo strlen("$x");
echo "<br>";

echo str_word_count("$x");
echo "<br>";

echo strpos("$x", "World");
echo "<br>";

*/



// string modifying

/*

echo strtoupper($x);
echo "<br>";

echo strtolower($x);
echo "<br>";

echo str_replace("World", "Dolly", $x);
echo "<br>";

echo strrev($x);
echo "<br>";

$y = " Hello World! ";
echo trim($y);
echo "<br>";
 */



// string concatenate

/*

$a = "Hello";
$b = "World";

$c = $a . $b;
echo $c;
echo "<br>";

$d = $a . " " . $b;
echo $d;
echo "<br>";

$e = "$a $b";
echo $e;
*/



// string slicing

/*

$x = "Hello World";

echo substr($x, 6,5);
echo "<br>";

echo substr($x, 6);
echo "<br>";

echo substr($x, -5,2);
echo "<br>";

echo substr($x, 5,-3);
echo "<br>;";

*/

// string Escape characters

$x = "we are so-called 'vikings' from the earth";
echo $x;
echo "<br>";

$y = "we are so-called \"vikings\" from the earth";
echo $y;
echo "<br>";

$a = "Hello\nWorld!";
echo $a;
echo "<br>";

$b = "Hello\rWorld";
echo $b;
echo "<br>";

$c = "Hello \tWorld";
echo $c;
echo "<br>";

$h = "\110\145\154\154\157";
echo $h;

$e = "\x48\x65\x6c\x6c\x6f";
echo $e;


?>