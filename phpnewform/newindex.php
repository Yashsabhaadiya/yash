<?php

include 'database.php';

$obj = new Database();

#insert query

// $obj->insert('students', ['student_name'=> 'sahil kumar', 'age'=>21, 'city'=>'pune']);
// $obj->insert('students', ['student_name'=> 'yash kumar', 'age'=>21, 'city'=>'pune']);


// $obj->update('students', ['student_name'=>'yash patel', 'age'=>'22', 'city'=>'Delhi'], 'city="Goa"');

// $obj->delete('students', 'city= "1"');

// $obj->sql('SELECT * FROM students WHERE age = "21"');

echo "Insert result is ; ";
print_r($obj->getResult());
?>