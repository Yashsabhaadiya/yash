<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="formData" enctype="multipart/form-data">
        <label for="file">Choose File(.csv*):</label>
        <input type="file" class="file" name="file" accept=".csv" required>
        <br>
        <button type="submit">Submit</button>

        <div id="result"></div>
 
    </form>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#formData").submit(function (e) {
                e.preventDefault();
                var fileInput = $(".file")[0].files[0];
                var allowedExtensions = /(\.csv)$/i;
            
                if (!allowedExtensions.exec(fileInput.name)) {
                    alert("invalid file type selected");
                } else {
                    alert("valid file selected");
                }
            
                var formData = new FormData();
                formData.append('file', fileInput);
            
                $.ajax({
                    url: "csvupload.php",
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (result) {
                        if (result == 1) {
                            alert("Data uploaded successfully.");
                        } else {
                            alert("Error: " + result);
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>