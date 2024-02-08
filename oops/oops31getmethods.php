<?php

# get_class()

/*
class Myclass{
    function name(){
        echo "Class Name : ". get_class($this) . "<br>";
    }
}

$obj = new Myclass();
$obj->name();

echo "class name is ; " . get_class($obj) . "<br>"; */





# get_parent_class()

/*class abc{

}

class xyz extends abc{
    function name(){
        echo "Parent Class Name : ". get_parent_class($this) . "<br>";
    }
}

$obj = new xyz();
$obj->name();

echo "Parent Class Name is : ". get_parent_class($obj) . "<br>"; */





# get_class_methods

/*class Myclass{
    function __construct(){

    }

    function myfunc1(){

    }

    function myfunc2(){

    }
}

$class_methods = get_class_methods('Myclass');

print_r($class_methods);
echo "<br>";

foreach($class_methods as $methods){
    echo $methods . "<br>";
} */





# get_class_vars

/*
class Myclass{
    public $var1;
    public $var2 = "hello";
    public $var3 = 100;
    private $var4;

    function __construct(){
        print_r(get_class_vars(__CLASS__));
    }

}

$obj = new Myclass();

$class_vars = get_class_vars(get_class($obj));

print_r($class_vars); */





#get_object_vars

/*class Myclass{
    public $var1;
    public $var2 = "hello";
    public $var3 = 100;
    private $var4;

    function __construct(){

        $this->var1 =  "wow";
        $this->var2 = "Yahoo";
        print_r(get_object_vars($this));
    }

}

$obj = new Myclass();

$class_vars = get_object_vars($obj);

print_r($class_vars);*/





#get_called_class (it returns array)

/*
class abc{
    public static function test(){
        var_dump(get_called_class());
    }
}

class xyz extends abc{

}

abc::test();
xyz::test(); */





#get_declared_class (it will shows the all declared classes)

/*class abc{

}

class xyz extends abc{

}

print_r(get_declared_classes());*/





#get_declared_interfaces (it will show the all declared interfaces)

/* interface test{

}

print_r(get_declared_interfaces());*/





#get_declared_traits (it will show the all declared traits)

/* trait test{

}

trait test2{

}

class abc{
    use test;
}

print_r(get_declared_traits()); */



# class_alice() (for making of classname short or modify)

class Myclass{
    public $test;
}

class_alias("Myclass" , "MC");

$a = new Myclass();
$b = new MC();

// $a->test = "hello";
// echo $a->test;

$b->test = "hi";
echo $b->test;


?>


