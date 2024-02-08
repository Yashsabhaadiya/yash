<?php

/* echo "Hello World! </br>";

$txt = "hi";
echo "$txt ,  How are you! </br>";

echo phpversion();

$yash0 = "hello";
echo " hi " . $yash0 . " jinujhbn </br>";

$x = 4;
$y = 87;
$z  = $x + $y;
echo $z; */



/* $x = 3;
echo "</br>";
var_dump($x);
var_dump(5);
var_dump("John");
var_dump(3.14);
var_dump(true);
var_dump([2, 3, 56]);
var_dump(NULL); */




// $x=$y=$z= "fruits";
// echo $x; 
// echo $y;
// echo $z;



/* $x = 5;
$y = 203;
function myTest()
{
  
    global $x;
    $y = $x;
    echo "<p>Variable x inside function is: $x </p>";
}
myTest();

echo "<p>Variable x outside function is: $x </p>";
echo $y; */



/* 
$x = 10;
$y = 20;


function myTest(){
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}
myTest();
echo $y;
*/


/*function myTest(){
    static $x = 0;
    echo $x;
    $x++;
}

myTest();
echo "</br>";
myTest();
echo "</br>";
myTest();*/


/*
print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";
*/


// $cars = array("volvo","Audi","BMW");
// var_dump($cars);



// PHP Object

/*
class cars
{
    public $color;
    public $model;
    public function __construct($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
    }
    public function message()
    {
        return "my car is" . $this->color . " " . $this->model . "!";
    }
}

$mycar = new cars("blue", "Range Rover");
var_dump($mycar);
 */


$x = 5;
$x = (string) $x;
var_dump($x);


?>