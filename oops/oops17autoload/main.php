<?php

// require 'first.php';
// require 'second.php';

function __autoload($class){
    require "classes/" . $class . ".php";
}

$test = new second();
$test1 = new first();
?>