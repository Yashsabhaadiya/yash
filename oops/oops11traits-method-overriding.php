<?php

trait hello{
    public function sayhello(){
        echo "hello from hello trait <br>";
    }
}

trait hi{
    public function sayhello(){
        echo "hello from hi trait <br>";
    }
}

class base{
    // public function sayhello(){
        // echo "hello from base class <br>";
    // }

    use hello, hi{
        // hello::sayhello as public newhello; #write public to make it public & then there is a new name
        hello::sayhello insteadof hi;
        hi::sayhello as newhello;
    }
}

// class child extends base{
//     use hello;

//     public function sayhello(){
//         echo "hello from the child class <br>";
//     }
// }

$test = new base();

$test->sayhello();
$test->newhello();

?>