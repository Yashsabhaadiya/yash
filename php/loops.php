<?php  

// $i = 1;

/*while loop

while ($i < 6) {
    echo $i;
    echo "<br>";
    $i++;
    // if ($i == 3) {
    //     // break;
    //     continue;
    // }
    
}
*/

/*Do While loop 

$i = 0;

do{
    $i++;
    if($i == 3) continue;
    echo $i;
    echo "<br>";
}while ($i < 6);
*/


/* for loop 

for($x = 1; $x <= 10; $x++){
    // if($x == 3) break;
    if($x == 3) continue;
    echo "the number is : " . $x . "<br>";
}
*/

/* foreach loop */

// 1st 

// $colors = array("red","green","blue","yellow");

// foreach($colors as $x){
//     echo "$x <br>";
// }


// 2nd 

// $members = array("yash" => "20", "meet" => "21", "deep" => "19");

// foreach($members as $x => $y){
//     echo "$x : $y <br>";
// }


// 3rd 

// class car{
//     public $color;
//     public $model;

//     public function __construct($color, $model){
//         $this -> color = $color;
//         $this -> model = $model;
//     }
// }

// $mycar = new car("red", "Audi");
// $newcar = new car("black", "mercedes-benz");

// foreach($newcar as $x => $y){
//     echo "$x : $y <br>";
// }


// 4th

// $color = array("red", "green", "blue", "yellow");

// foreach($color as $x){
//     // if($x == "blue") break;
//     if($x == "blue") continue;

//     echo "$x <br>";
// }


// 5th

$color = array("red","green","blue","yellow");

foreach($color as &$x){ # & before the $x will change the value in the origional array
    if($x == "green") $x = "majenta";
}
var_dump($color);
?>