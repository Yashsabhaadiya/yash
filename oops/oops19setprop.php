<?php

class student{
    public $name;

        public function hello(){
            echo $this->name;
        }

    public function __get($property){
        echo "oyu are trying to acces non-existing or private property ($property)"; 
    }

    public function __Set($property, $value){
        if(property_exists($property, $value)){
            $this->$property = $value;
        }else{
            echo "property doe not exist : $property"; 
        }
    }
}

$test = new student();

$test->name = "yash";
// $test->course = "PHP";

$test->hello(); 

?>