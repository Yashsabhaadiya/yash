<?php

$db_name = "mysql:host=localhost;dbname=testing";
    $username = "root";
    $password = "";

    $conn = new PDO($db_name, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = $conn->prepare("SELECT student_name,city FROM students");
    $sql->execute();

    $sql->bindColumn('student_name' ,$sname);
    $sql->bindColumn('city' ,$scity);

    while($row = $sql->fetch()){
        echo "{$sname} - {$scity} <br>";
    }

?>