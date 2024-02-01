<?php

# 1st function

// function myfunction(){
//     echo "Hello World!";
// }

// myfunction();



# 2nd function

/* function callName($value, $year){
    echo "$value kevadiya is born in $year <br>"; 
}

callName("kishan","1997");
callName("jani", "2000");
callName("stale", "2003");
callName("borge", "1994");*/



# 3rd function

/*
function height($minheight = 50 ){
    echo "the height is : $minheight <br>";
}

height(350);
height(4756);
height();
height(123);
*/



# 4th function 

/* function sum($x, $y){
    $z = $x + $y;
    return $z;
}

echo "sum of 3 + 5 is " . sum(3, 5) . "<br>";
echo "sum of 1 + 9 is " . sum(1,9) . "<br>";
echo "sum of 26 + 26 is " . sum(26, 26) . "<br>";*/




# 5th function (passing by reference)

/*function add_five(&$num){
    $num += 5;
}

$value = 2;
add_five($value);
echo $value;
*/



# 6th function (variadic function)

/*function run_function(...$x){
    $n = 0;
    $len = count($x);

    for($i = 0; $i < $len ; $i++){
        $n += $x[$i];
    }
    return $n;
}

$x = run_function(4,7,9,3,7,2,78);
echo $x;
*/



# 7th function (declaring data type in function)

/* function datatype(int $x, int $y){
    return $x + $y; 
}

echo datatype(5, intval("5 days"));*/



# 8th function

function addfloat(float $x, float $y) :float{
    return $x + $y;
}
echo addfloat(1.2,4.5);
echo "<br>";    

function addint(float $x, float $y) :int{
    return (int)($x + $y);
}
echo addint(1.2,4.5);
?>