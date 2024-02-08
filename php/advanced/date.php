<?php

// echo "today is ". date("Y/m/d") . "<br>"; 
// echo "today is ". date("Y.m.d") . "<br>"; 
// echo "today is ". date("Y-m-d") . "<br>"; 

// date_default_timezone_set("America/New_York");
// echo "the time is :" . date("h:i:sa");


$d = mktime(11,14,54,11,28,2023);
echo "created date is: " .date("Y-m-d h:i:sa", $d);

echo "<br>";

// str to time 

$x = strtotime("10:30 pm march 19 2013");
echo "created date is : ". date("Y-m-d h:i:sa", $x);

echo "<br>";

$d = strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d = strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d = strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
?>

<!-- &copy; 2010 - <?php echo date("Y");?> -->