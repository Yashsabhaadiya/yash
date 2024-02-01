<?php

// $myfile = fopen("read.txt", "r") or die("unable to open file");
// echo fread($myfile, filesize("read.txt"));
// fclose($myfile);




// $myfile = fopen("read.txt", "r") or die("unable to open file");
// echo fgets($myfile);
// fclose($myfile);




// $myfile = fopen("read.txt", "r") or die("unable to open file");

// while(!feof($myfile)){
//     echo fgets($myfile) . "<br>";
// }
// fclose($myfile);




$myfile = fopen("read.txt", "r") or die("unable to open file");

while(!feof($myfile)){
    echo fgetc($myfile) . "<br>";
}
fclose($myfile);

?>