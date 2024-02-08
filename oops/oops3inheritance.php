<?php

class employee{

    public $name, $age, $salary;

    function __construct($name,$age,$salary){
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    function info(){
        echo "<h3>Emloyee Profile</h3>";
        echo "Employee Name : " . $this->name . "<br>";
        echo "Employee Age : " . $this->age . "<br>";
        echo "Employee Salary : " . $this->salary . "<br>";
    }
}

class manager extends employee{
    public $ta = 10000;
    public $phone = 7300;
    public $totalsalary;

    function info(){
        $this->totalsalary = $this->salary + $this->ta + $this->phone;
        echo "<h3>Manager Profile</h3>";
        echo "Manager Name : " . $this->name . "<br>";
        echo "Manager Age : " . $this->age . "<br>";
        echo "Manager Salary : " . $this->totalsalary . "<br>";
    }
}

$e1 = new employee("Ram", 25, 25000);
$e2 = new manager("krishna", 25, 75000);

$e1->info();
$e2->info();

?>