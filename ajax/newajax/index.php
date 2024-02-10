<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="loginform" method="post">
        Value 1: 
        <input type="text" name="val1" id="val1" required>
        Value 2:
        <input type="text" name="val2" id="val2" required>
        <input type="submit" name="loginBtn" id="loginBtn" value="sum">

        <br>
        answer:
        <!-- <input type="text" name="result" id="result"> -->
        <div id="result" ></div>
    </form>

    <script>
        $(document).ready(function(){
            $('#loginform').submit(function(e){
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "login.php",
                    data: $(this).serialize(),
                    success: function(response){
                        console.log(response);
                        $("#result").text
                        (response);
                    }
                });
            });
        });
    </script>
</body>
</html>