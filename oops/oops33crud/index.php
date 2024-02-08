<?php

include 'database.php';

$obj = new Database();

$colname = "students.id, students.student_name, students.age, citytb.cname";

$join = "citytb ON students.city = citytb.cid";

$limit = 3;

# for insert command

// $obj->insert('students', ['student_name'=>'ram kumar', 'age'=>'20', 'city'=>'goa']);
// echo "Insert result is ; ";
// print_r($obj->getResult());



# for update command

// $obj->update('students', ['student_name'=>'yash patel', 'age'=>'22', 'city'=>'Goa'], 'id = "5" OR  city="Delhi"');
// echo "Update result is ; ";
// print_r($obj->getResult());



# for delete command

// $obj->delete('students', 'id= "11"');
// echo "Delete result is ; ";
// print_r($obj->getResult());



# for sql(select) command

// $obj->sql('SELECT * FROM students   WHERE age = "20"');
// echo "SQL result is : ";
// print_r($obj->getResult());



# for select command

$obj->select('students', $colname ,$join, null,null,$limit);
echo "\n\nSELECT result is : ";
print_r($obj->getResult());

$obj->pagination('students',$join,null,$limit);

?>
