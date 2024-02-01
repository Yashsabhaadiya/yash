<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 5px;
        }
    </style> -->
</head>

<body>
    <!-- <table>
        <tr>
            <td>Filter Name</td>                                                
            <td>Filter ID</td>
        </tr>
    </table> -->



    <?php

        // foreach(filter_list() as $id => $filter){
            // echo "<tr><td>" . $filter . "</td><td>" . filter_id($filter) . "</td></tr>";
        // }

        // $str = "<h1> Hello World!";
        // $newstr = filter_var($str, FILTER_SANITIZE_STRING);
        // echo $newstr;

        // $x = 100;
        // if(filter_var($x, FILTER_VALIDATE_INT) === 0 || !filter_var($x, FILTER_VALIDATE_INT) === false){
            // echo "interger is valid";
        // }else{
            // echo "integer is not valid";
        // }

        // $ip = "127.0.0.1";
        
        // if(!filter_var($ip, FILTER_VALIDATE_IP) === false){
        //     echo "$ip is a valid ip address";
        // }else{
        //     echo "$ip is not valid ip address";
        // }

        $url = "https://www.w3schools.com";
        
        $newurl = filter_var($url, FILTER_SANITIZE_URL);

        if(!filter_var($newurl, FILTER_VALIDATE_URL) === false){
            echo "valid url address";
        }
        else{
            echo "not valid url address";
        }

    ?>
</body>

</html>