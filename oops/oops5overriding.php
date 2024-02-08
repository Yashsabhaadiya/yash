<?php

class base{
    public $name = "parent class";

    public function calculate($a, $b){
        return $a * $b;
    }
}

class derived extends base{
    public $name = "child class"; 

    public function calculate($a, $b){
        return $a + $b;
    }
}

$test = new derived();

echo $test->calculate($a, $b);
?>