<?php

# sort() method
/* $cars = array("Volvo", "BMW", "Toyota");
sort($cars);

$arrlenght = count($cars);
for($x = 0; $x < $arrlenght; $x++){
    echo $cars[$x];  
    echo "<br>";
}
*/



#rsort() method
/* $num = array(4, 6, 2, 22, 11);
rsort($num);

$arrlenght = count($num);
for($x = 0; $x < $arrlenght; $x++){
    echo $num[$x];  
    echo "<br>";
} 
*/



#asort() method
/* $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);

foreach($age as $x => $x_value){
    echo "key = " . $x . ", value = " . $x_value;
    echo  "<br>";
}
*/



#ksort() method
/* $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);

foreach($age as $x => $x_value){
    echo "key = " . $x . ", value = " . $x_value;
    echo  "<br>";
}*/



#arsort() method
/* $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);

foreach($age as $x => $x_value){
    echo "key = " . $x . ", value = " . $x_value;
    echo  "<br>";
}*/



#krsort() method
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);

foreach($age as $x => $x_value){
    echo "key = " . $x . ", value = " . $x_value;
    echo  "<br>";
}

?>