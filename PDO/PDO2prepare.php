<?php

$db_name = "mysql:host=localhost;dbname=testing";
$username = "root";
$password = "";

$conn = new PDO($db_name, $username, $password);

# for select query


$city = "Delhi";
$id = 5;

$sql = $conn->prepare("SELECT * FROM students WHERE city = :city AND id > :id");
// $sql->bindParam(1, $city, PDO::PARAM_STR);
// $sql->bindValue(2, $id, PDO::PARAM_INT);
$sql->execute(array(':city' => $city, ':id' => $id));

$result = $sql->fetchAll(PDO::FETCH_ASSOC);

if(count($result)){
    foreach($result as $row){
        echo "{$row['id']} - {$row['student_name']} - {$row['city']} <br>";
    }
}else{
    echo "no record found"; 
} 




# for insert query

$name = "ajay devgan";
$city = "Mumbai";
$age = 45;

$sql = $conn->prepare("INSERT INTO students (student_name, city, age) VALUES (:name, :city, :age)");

$sql->execute(array(':name'=> $name, ':city'=> $city, ':age'=> $age));


?>