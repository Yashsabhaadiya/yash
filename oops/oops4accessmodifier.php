<?php

class base{
    protected $name;

    public function  __construct($name){
        $this->name = $name;
    }

    protected function show(){
        echo "your name : " . $this->name . "<br>";
    }
}

class derived extends base{
    public function get(){
        echo "your name : " . $this->name . "<br>";
    }
}

$test = new derived("yash");
$test->get();

?>