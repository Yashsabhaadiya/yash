<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="formsvalidation.php" method="POST">
        <h2>PHP Form Validation Example</h2>
        Name : <input type="text" name="name" required><br>
        E-mail: <input type="email" name="email" required><br>
        Website: <input type="text" name="website" required><br>
        comment: <input type="text" name="comment" required><br>
        Gender: <div id="div">
            <input type="radio" name="gender" id="male" value="male" required> Male
            <input type="radio" name="gender" id="female" value="female" required > Female
            <input type="radio" name="gender" id="other" value="other" required> other
        </div>
        <br><br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>

<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $website = $_POST['website'];
    $comment = $_POST['comment'];
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';


    if ($name != "" && $email  != "" && $website != "" && $comment != "" && $gender != "") {


        if (preg_match("/^[a-zA-Z]+$/", $name)) {
            echo "$name is valid name.";
            echo "<br>";
        } else {
            echo "invalid name";
            echo "<br>";
        }

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo $email;
            echo "<br>";
        } else {
            echo "Invalid email address.";
            echo "<br>";
        }

        if (filter_var($website, FILTER_VALIDATE_URL) === false) {
            echo "$website is a valid URL";
            echo "<br>";
        } else {
            echo "$website is not a valid URL";
            echo "<br>";
        }

        echo $comment;
        echo "<br>";

        echo "Gender: $gender <br>";

    } else {
        echo " $name <br>  $email <br>  $website <br>  $comment  <br> ";
        echo "<br>";
    }

    // if($gender ===  "on"){
    //     return $gender; 
    // }

}



?>


</html>