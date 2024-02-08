<?php

class student{

    public $course;
    private $first_name;
    private $last_name;
    private $detail = ['name' => 'test name', 'age' => '20'];

    public function setName($fname, $lname){
        $this->first_name = $fname;
        $this->first_name = $lname;
    }

    public function __isset($name){
        echo isset($this->detail[$name]);
    }
}

$test = new student();

// $test->setName('yash', 'sabhadiya');
// $test->course = "php";

echo isset($test->name);


?>