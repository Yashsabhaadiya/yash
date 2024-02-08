<?php

echo "line number : " . __LINE__ . "<br>";

echo "the full path of this file is : " . __FILE__ . "<br>";

echo "the full path of this dir is : " . __DIR__ . "<br>";

function Myfunction()
{
    echo "the FUNCTON name is : " . __FUNCTION__ . "<br>";
}

Myfunction();

/*
// namespace Mynamespace;
class myClass{
    public function getClassName(){
        return __METHOD__;  # __CLASS__ gives the name of the class where it is located
                            # __NAMESPACE__ gives the name of the namespace
    } 
}

$obj = new myClass();
echo $obj->getClassName(); */

trait Mytrait
{
    public function getTraitName()
    {
        return __TRAIT__;
    }
}

class myClass
{
    use Mytrait;
}

$obj = new myClass();

echo  $obj->getTraitName();
