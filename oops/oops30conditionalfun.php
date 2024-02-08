<?php
/* for clas_exists
class Myclass{

}

if(class_exists('myClass')){
    echo "this class is exists";
}else{
    echo "this class is not exists";
}*/




/* for interface_exists
interface Myinterface
{
}

if (interface_exists('Myinterface')) {
    echo "this interface is exists";
} else {
    echo "this interface is not exists";
}*/ 




/* for trait_exists 

trait MyTrait{
    public function MyMethod(){

    }
}

if (trait_exists('MyTrait')) {
    echo "this trait is exists";
} else {
    echo "this trait is not exists";
} */




/* for property_exists 

class Myclass{
    public $test;
}

if(property_exists('Myclass', 'test')){
    echo "this property is exists";
}else{
    echo "this property is not exists";
} */




/* for is_a

class Myclass{

}

$obj = new Myclass();

if(is_a($obj, 'Myclass')){
    echo "this object is of Myclas";
}else{
    echo "this object is not of Myclas";
}*/



/* for is_subclass_of */
class parentclass{

}

class childclass extends parentclass{

}

$obj = new childclass();

if(is_subclass_of($obj, 'parentclass')){
    echo "this \$obj is a object of subclass of parentclass";
}else{
    echo "this \$obj is not a object of subclass of parentclass";
}
