<?php

$db_name = "mysql:host=localhost;dbname=testing";
$username = "root";
$password = "";

$conn = new PDO($db_name, $username, $password);

$sql = $conn->query("SELECT * FROM students");


#for FETCH_ASSOC

while($row = $sql->fetch(PDO::FETCH_ASSOC)){ 
    
        echo "{$row['id']} - {$row['student_name']} - {$row['age']} - {$row['city']} <br>";
        // echo "<pre>";
        // print_r($row);
        // echo "</pre>";
    }
    
    

#for  FETCH_NUM
    
    while($row = $sql->fetch(PDO::FETCH_NUM)){ 
        
    echo "{$row[0]} - {$row[1]} - {$row[2]} - {$row[3]} <br>";
}



#for FETCH_OBJ

while($row = $sql->fetch(PDO::FETCH_OBJ)){ 

    echo "{$row->id} - {$row->student_name} - {$row->age} - {$row->city} <br>";
    
    // echo "<pre>";
    // print_r($row);
    // echo "</pre>";
}

$result = $sql->fetchAll(PDO::FETCH_NUM);

// echo "<pre>";
// print_r($result);
// echo "</pre>";

if(count($result)){
    foreach($result as $row){
        echo "{$row[1]} <br>";
    }
}else{
    echo "No record found";
}


?>