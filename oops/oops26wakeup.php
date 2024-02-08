<?php

class student{

    public $course = "php";
    private $first_name;
    private $last_name;

    public function setName($fname, $lname){
        $this->first_name = $fname;
        $this->last_name = $lname;
    }

    public function __sleep(){
        return array("first_name", "last_name");
    }

    public function __wakeup(){
        echo "this is wakeup method. </br>";
    }
}

$obj = new student();

$obj->setName("yash","sabhadiya");

$srl = serialize($obj);

$usrl = unserialize($srl);

print_r($usrl);

?>