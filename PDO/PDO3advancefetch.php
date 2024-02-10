<?php

# for colums fetch


$db_name = "mysql:host=localhost;dbname=testing";
$username = "root";
$password = "";

$conn = new PDO($db_name, $username, $password);

$sql = $conn->query("SELECT * FROM students");
$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_COLUMN); # this will fetch columns from the database

echo "<pre>";
print_r($result);
echo "</pre>"; 




# for group fetch


$db_name = "mysql:host=localhost;dbname=testing";
$username = "root";
$password = "";

$conn = new PDO($db_name, $username, $password);

$sq = "UPDATE students SET city='chndigarh' WHERE city= 'mumbai'";

$sql = $conn->prepare($sq);
// $sql = $conn->query("SELECT city,student_name,age FROM students");
$sql->execute();

echo $sql->rowCount();
$result = $sql->fetchAll(PDO::FETCH_GROUP | PDO::FETCH_ASSOC); # this will fetch columns from the database

echo "<pre>";
print_r($result);
echo "</pre>";





# for last insert id

$db_name = "mysql:host=localhost;dbname=testing";
$username = "root";
$password = "";

$conn = new PDO($db_name, $username, $password);

$sq = "INSERT INTO students (student_name,city,age) VALUES (?,?,?)";

$sql = $conn->prepare($sq);
$sql->execute(["amir khan", "goa", "20"]);

echo $conn->lastInsertId();


?>