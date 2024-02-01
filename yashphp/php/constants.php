<?php 

define("GREETING", "Welcome to this webpage"); #define functions
echo GREETING;
echo "<br>";

const MYCAR = "Volvo"; #declaration of constant variable
echo MYCAR;
echo "<br>";

define("cars", ["alfa-romio", "bmw", "Audi"]); #creating array using define function
echo cars[0];
echo  "<br>";

// constants

define("congrats", "wish you a happy new year"); #globally using constants

function myTest(){
    echo congrats;
}

myTest();
?>