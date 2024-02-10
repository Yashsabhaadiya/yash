<?php

// print_r(isset($_POST['username']));
// print_r(isset($_POST['password']));
$sum = null;
// return 'harish';
if(isset($_POST['val1']) && isset($_POST['val2'])){
  $sum = $_POST['val1'] + $_POST['val2'];
}

echo $sum;

?>