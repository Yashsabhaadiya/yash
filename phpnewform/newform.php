<?php

include 'database.php';
$obj = new Database();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action='newsavedata.php' method='POST'>
        <label>Name</label>
        <input type="text" name="sname"><br><br>

        <label>Age</label>
        <input type="number" name="sage"><br><br>

        <label>city</label>
        <select name="scity" id="">
            <?php

                 $obj->select('city');
                 $result = $obj->getResult();

                 foreach($result as list("cid"=>$cid, "cname"=>$cname)){
                    echo "<option value='$cid'>$cname</option>";
                }

            ?>
        </select><br><br>

        <input type="submit" value="save">
    </form>
</body>

</html>