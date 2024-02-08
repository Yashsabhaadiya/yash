<?php

class abc{

    public function __construct(){
        echo "this is a constructor function <br>";
    } 

    public function hello(){
        echo "Hello Everyone <br>";
    }

    public function __destruct(){
        echo "this is destructor function <br>";
    }
}

$test =  new abc();

$test->hello();


?>