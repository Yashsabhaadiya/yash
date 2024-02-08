<?php

$myfile = fopen("newdata.php", "w") or die ("unable to open file");
$txt = "John Doe <br> ";
fwrite($myfile, $txt);
$txt = "John Doe <br> ";
fwrite($myfile, $txt);
$txt = "minnie mouse <br> ";
fwrite($myfile, $txt);

fclose($myfile);

$myfile = fopen("newdata.txt", "r") or die("unable to open file");
echo fread($myfile, filesize("newdata.txt"));
fclose($myfile);    

?>