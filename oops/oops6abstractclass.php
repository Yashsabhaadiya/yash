<?php

abstract class parentclass
{

    public $name;

    abstract protected function calculation($a, $b);
}

class childclass extends parentclass
{

    public function calculation($a, $b)
    {
        // echo $a + $b;
        echo "Hello";
    }
}

$test = new childclass();

$test->calculation(10,50);