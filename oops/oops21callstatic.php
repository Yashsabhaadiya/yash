<?php

class student{

    private static function hello($name){
        // echo "this is static hello function";
        echo "Hello $name";
    }

    public static function __callStatic($method, $args){
        // echo "this is a private method : $method";
        if(method_exists(__CLASS__, $method)){
            call_user_func_array([__CLASS__, $method], $args);
        }else{
            ecHo "method does not exist : $method";
        }
    }
}

student::hello("yash sabhadiya");

?>