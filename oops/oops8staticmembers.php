<?php

class base
{
    public static $name = "yash";

    // public static function show(){
    //     echo self::$name;
    // }

    // public function __construct($n){
    //     echo self::$name = $n;
    // }
}

class derives extends base{
    public static function show(){
        echo parent::$name;
    }
}

# using this while static method is used

/* echo base::$name;
   echo "<br>";               
   base::show();*/


#while using the constructor function

$test = new derives("wow");

$test->show();
