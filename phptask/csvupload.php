<?php
$conn = new mysqli('localhost', 'root', '', 'test');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
    $file = $_FILES["file"]["tmp_name"];

    if (!empty($file)) {
        $open = fopen($file, "r");

        if ($open !== false) {
            $rows = [];

            // fgetcsv($open); //for removing the header row from the file data counting while using the csv file.

            while (($row = fgetcsv($open)) !== false) {
                $rows[] = $row;
            }

            fclose($open);

            $data = array_map('trim', array_shift($rows));

            if (in_array('FirstName', $data) && in_array('LastName', $data) && in_array('Mo.No.', $data)) {
                $array = [];

                foreach ($rows as $row) {
                    $array[] = array_combine($data, $row);
                }

                foreach ($array as $value) {
                    $fname = $value['FirstName'];
                    $lname = $value['LastName'];
                    $mobile = $value['Mo.No.'];

                    if (!is_numeric($mobile) || strlen($mobile) !== 10 || !is_string($fname) || !is_string($lname)) {
                        echo "Invalid entry - FirstName: $fname, LastName: $lname, Mo.No.: $mobile <br>";
                    } else {
                        $sql = "INSERT INTO `ajaxcsvs`(`FirstName`, `LastName`, `Mo.No.`) VALUES ('$fname', '$lname', '$mobile')";

                        if ($conn->query($sql) !== TRUE) {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                    }
                }
                echo 1;
            } else {
                echo 0;
            }
        } else {
            echo "Error reading the file.";
        }
    } else {
        echo "Empty file.";
    }
} else {
    echo "No file uploaded.";
}

$conn->close();
?>
