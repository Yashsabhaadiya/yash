<?php

try {

    $db_name = "mysql:host=localhost;dbname=testing";
    $username = "root";
    $password = "";

    $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

    $conn = new PDO($db_name, $username, $password, $options );

    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->beginTransaction();

    $sql1 = $conn->prepare("INSERT INTO students(student_name, city, age) VALUES (?,?,?)");
    $sql2 = $conn->prepare("UPDATE city SET cstudents = cstudents +1 WHERE cname = ?");

    $sql1->execute(["madan kumar", "goa", 25]);
    $sql2->execute(["goa"]);

    // if(!$sql1->execute(["madan kumar", "goa", 25])){
    //         throw new Exception("SQL 1 failed");
    //     }
    // if(!$sql2->execute(["goa"])){
    //         throw new Exception("SQL 2 failed");
    //     }

    $conn->commit();



} catch (Exception $e) {
    $conn->rollback();
    echo $e->getMessage();
}
