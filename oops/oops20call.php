<?php

class student{

    private $first_name;
    private $last_name;

    private function setName($fname, $lname){
        $this->first_name = $fname;
        $this->last_name = $lname;
    }

    public function __call($method, $args){
        // echo "this is privat or non-existing method : $method  </br>";
        // print_r($args);
        if(method_exists($this, $method)){
            call_user_func_array([$this, $method], $args);
        }else{
            echo "method does not exists : $method";
        }
    }
}

$test = new student;

// $test->personal();
$test->setName("yash", "sabhadiya");

echo "<pre>";
print_r($test);
echo "</pre>";

?>