<?php 

class abc{
    private $data = ["name"=>"yash","course"=>"php","fees"=>"2000"];
 
    public function __get($key){
        if(array_key_exists($key, $this->data)){
            return $this->data[$key];
        }else{
            return "this key ($key) is not defined";
        }
    }

}

$test = new abc();

echo $test->name;


?>