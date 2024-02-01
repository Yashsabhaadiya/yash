<?php

// function my_callback($item) {
//     return strlen($item);
// }

// $strings = ["apple","orange","banana","coconut"];
// $length = array_map("my_callback", $strings);
// print_r($length);



// $strings = ["apple","orange","banana","coconut"];
// $length = array_map(function($item) {return strlen($item);} , $strings);
// print_r($length);



# user-defined functions

function exclain($str){
    return $str . "!";
}

function ask($str){
    return $str . "?";
}

function printformatted($str, $format){
    echo $format($str);
}

printformatted("hello world", "exclain");
printformatted("hello world", "ask");
?>