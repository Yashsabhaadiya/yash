<?php

interface parent1{
    function calculation($a, $b);

}

interface parent2{
    function subtraction($c, $d);
}

class childClass implements parent1, parent2{

    public function calculation($a, $b){
        echo $a + $b;
    }

    public function subtraction($c, $d){
        echo $c - $d;
    }
}

$test = new childClass();

$test->calculation(20, 35);

echo "<br>";

$test->subtraction(20, 10);
?>