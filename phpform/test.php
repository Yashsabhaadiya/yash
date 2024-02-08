<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "yash";

$con = mysqli_connect($server, $username, $password, $database);
if(!$con){
    die("not connceted " . mysqli_connect_error());
}

if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];   
    $sql = "INSERT INTO `users` (`username`, `pasaword`, `date-time`) VALUES ('$username', '$password', current_timestamp())";
    $res = mysqli_query($con, $sql);

}

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


    <form id=" form-container"  action="index.php" method = "POST">
        
        <div class="form-group">
            <p><label for="exampleInputPassword1">Username</label>
            <input type="text" class="form-control" id="username" name="username"></p>
        </div>
        <div class="form-group">
        <p class="display: block"><label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="password" name="password"></p>
        </div>
        <div class="form-group">
        <p><label for="exampleInputPassword1">Confirm Password</label>
            <input type="password" class="form-control" id="cpassword" name="cpassword"> </p>
        </div>
        <button type="submit"> submit</button>
        
    </form>



</body>

</html>