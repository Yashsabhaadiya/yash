<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    if (isset($_POST['btn_img'])) {


        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "codeaddict";

        $conn = mysqli_connect("localhost", "root", "", "codeaddict");
        $filename = $_FILES['choosefile']['name'];
        $tempfile = $_FILES['choosefile']['tmp_name'];
        $folder = "image/" . $filename;

        $sql = "INSERT INTO `images`(`image`) VALUES ('$filename')";

        if ($filename == "") {
            echo "<div class='container'>upload image</div>";
        } else {
            $result = mysqli_query($conn, $sql);
            move_uploaded_file($tempfile, $folder);
            echo "<div class='container'>image uploaded</div>";
        }
    }

    ?>

    <form action="task1.php" class="form-control" enctype="multipart/form-data" method="post">
        <input type="file" class="form-control" name="choosefile">
        <div>
            <button type="submit" name="btn_img">submit</button>
        </div>
    </form>

    <table class="table">
        <tr>
            <th>id</th>
            <th>image</th>
            <th>button</th>
        </tr>

        <?php

        $conn = mysqli_connect("localhost", "root", "", "codeaddict");
        $sql2 = "SELECT * FROM `images` WHERE 1";
        $result2 = mysqli_query($conn, $sql2);

        while ($fetch = mysqli_fetch_assoc($result2)) {

            echo "";
        }
        ?>
    </table>
</body>

</html>




