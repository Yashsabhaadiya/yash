<?php

trait hello{
    public function sayhello(){
        echo "Hello Everyone <br>";
    }

    public function sayhi(){
        echo "hi everyone <br>";
    }
}

trait bye{
    public function saybye(){
        echo "bye bye everyone <br>";
    }
}

class base{
    use hello, bye;
}

class base2{
    use hello;
}

$test = new base();

$test->sayhello();
$test->sayhi();
$test->saybye();

?>