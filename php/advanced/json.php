<?php

$age = array("peter" => 35, "ben" => 37, "joe" => 43);
echo json_encode($age);
echo "<br>";



$cars = array("Volvo", "BMW", "Toyota");
echo json_encode($cars);
echo "<br>";



$jsonobj = '{"peter":35, "ben":37, "joe":43}';
// var_dump(json_decode($jsonobj), true);   # for associative array
$obj = json_decode($jsonobj);
echo "<br>";

echo $obj->peter;
echo  "<br>";
echo $obj->ben;
echo  "<br>";
echo $obj->joe;
echo  "<br>";



# for associative array

$jsonobj = '{"peter":35, "ben":37, "joe":43}';
$obj = json_decode($jsonobj, true);

echo $obj["peter"];
echo  "<br>";

echo $obj["ben"];
echo  "<br>";

echo $obj["joe"];
echo "<br>";


# looping throught the values

$jsonobj = '{"peter":35, "ben":37, "joe":43}';
$obj = json_decode($jsonobj);

foreach($obj as $key => $values){
    echo $key . " => " . $values . "<br>"; 
}


?>