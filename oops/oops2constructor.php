<?php

class person{

    public $name, $age;

    function __construct($name = "no name" , $age = 0){
        $this->name = $name;
        $this->age = $age;
    }

    function show(){
        echo $this->name . " - " . $this->age . "<br>";
    }
}

$p1 = new person();

$p2 = new person("yash" , 20);

$p3 = new person("deep", 19);

$p1->show();
$p2->show();
$p3->show();


?>