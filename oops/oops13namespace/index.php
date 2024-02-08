<?php

require 'product.php';
require 'testing.php';

function wow(){
    echo "wow from index file <br>";
}

$obj =  new pro\product();
// $obj =  new pro\product();

pro\wow();

?>