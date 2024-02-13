<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "test";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die('not connected' . mysqli_connect_error());
}

$myfile = fopen("Book1.csv", "r") or die("unable to read the file");

// Skip the header row
fgetcsv($myfile);

while (($data = fgetcsv($myfile)) !== FALSE) {

    if (count($data) < 3) {
        continue;
    }

    // getting data from the CSV col
    $fname = $conn->real_escape_string($data[0]);
    $lname = $conn->real_escape_string($data[1]);
    $mobile = $conn->real_escape_string($data[2]);

    if (!is_numeric($mobile) || strlen($mobile) !== 10 || !is_string($fname) || !is_string($lname)) {
        echo "Invalid entry - FirstName: $fname, LastName: $lname, Mobile: $mobile <br>";
    } else {

        $sql = "INSERT INTO `csvs` (`FirstName`, `LastName`, `Mo.No.`) VALUES ('$fname', '$lname', '$mobile')";

        if ($conn->query($sql) !== TRUE) {
            echo "Error: " . $sql . "<br>" . $conn->error;
        } else {
            echo "Record inserted successfully\n";
        }
    }
}

fclose($myfile);
$conn->close();
?>
