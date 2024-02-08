<?php 

$server = "localhost";
$username = "root";
$password = "";
$database = "yash";


$connection = mysqli_connect($server, $username, $password, $database);
if(!$connection) {
    die('not connected' . mysqli_connect_error());
}
else{
    // echo "connected successfully";
}

?>