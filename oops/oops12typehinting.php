<?php

/*
function fruits(array $names){
    foreach($names as $name){
        echo $name . "<br>";
    }
}

$test = array("Apple","Banana","Orange");

fruits($test); */



#type-hunting can also take the objects
/*
class hello
{
    public function sayhello()
    {
        echo "hello everyone";
    }
}

class bye
{
    public function saybye()
    {
        echo "bye everyone";
    }
}

function wow(hello $c)
{
    $c->sayhello();
}

$test = new hello();

wow($test); */



class school{
    public function getNames(student $names) {
        foreach($names->Names() as $name){
            echo $name . "<br>";
        }
    }
} 

class student{
    public function Names(){
        return ["ram", "krishan", "gopal"];
    }
}

class library{

}

$lib = new library();
$stu = new student();
$sch = new school();

$sch->getNames($stu);
