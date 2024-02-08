<?php

include 'database.php';

$obj = new Database();

$sname = $_POST['sname'];
$sage = $_POST['sage'];
$scity = $_POST['scity'];

if($sname == "" || $sage == ""){
    echo "Please enter data correctly or fill the data <br>";
    exit;
}else{
    $value = ["student_name"=> $sname, "age" => $sage,"city"=>$scity];
}

if($obj->insert('students', $value)){
    echo "<h2>Data is inserted successfully</h2>";
}else{
    echo "<h2>Data is not inserted </h2>";
}



?>