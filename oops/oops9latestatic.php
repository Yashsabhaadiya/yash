<?php

class base{
    protected static $name = "yash";

    public function show(){
        echo static::$name;
        echo self::$name;
    }
}

class derived extends base{
    protected static $name = "deep";
}

$test = new derived();

$test->show();

?>
