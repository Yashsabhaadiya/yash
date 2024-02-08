<!DOCTYPE html>
<html lang="en">
<head>


</head>
<body>
    <form method="post" action="">
        Name: <input type="text" name="fname">
        <input type="submit" name="submit   ">
    </form>

    <?php 
    if(isset($_POST['submit'])) {
        $name = $_POST['fname'];
        if(empty($name)) {
            echo "name is empty";
        }
        else {
            echo $name;
        }
    }
    ?>
</body>
</html>