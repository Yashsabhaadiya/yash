<?php

class student{
    public $name;
    public $course;

    public function __construct($n){
        $this->name = $n;
    }

    public function setCourse(course $c){
        $this->course = $c;
    }
}

class course{
    public $cname;

    public function __construct($cn){
        $this->cname = $cn;
    }

    public function __clone(){
        $this->course = clone $this->course;
    }
}


$student1 = new student("yash");

$course1 = new course('php');
$student1->setCourse($course1);

$student2 = clone $student1;

$student2->name = "Ram kumar";
$student2->course->cname = "python";

/* echo $student1->name;
echo "<br>";
echo $student2->name;*/

print_r($student1);
print_r($student1);


?>