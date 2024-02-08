<?php

class abc{

    public function first(){
        echo "this is a first function <br>";
        return $this;
    } 

    public function second(){
        echo "this is a second function <br>";
        return $this;
    } 

    public function third(){
        echo "this is a third function <br>";
        return $this;
    } 
}

$test = new abc();

$test->first()->second()->third();


?>