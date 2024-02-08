<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        First Name: <input type="text" name="fname" required>
        Last Name: <input type="text" name="lname" required>
        Email: <input type="text" name="email" required>
        <input type="submit" name="submit">
    </form>

    <?php

    // if($_SERVER["REQUEST_METHOD"] == "POST"){
    // $name = htmlspecialchars($_REQUEST['fname']);
    if (isset($_POST['submit'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];

        if (!preg_match("/^[a-zA-Z]+$/", $fname) || !preg_match("/^[a-zA-Z]+$/", $lname)) {
            echo "Invalid first or last name. Only letters are allowed.";
        } else if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo $email;
        } else {
            echo "Invalid email address.";
        }
    }

    ?>
</body>

</html>