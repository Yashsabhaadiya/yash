<?php

/*
function divide($devidend, $devisor){
    if($devisor == 0){
        throw new Exception("devision by zero");
    }
    return $devidend / $devisor;
}

echo divide(5, 1);
 */


# try-catch method 

function divides($devidend, $devisor)
{
    if ($devisor == 0) {
        throw new Exception("devision by zero");
    }
    return $devidend / $devisor;
}

try {
    echo divides(5, 1);
    echo "<br>";
} catch (Exception $e) {
    echo "unable to devide <br>";
} finally {
    echo "process complete <br>";
}



# The Exception Object

function divide($devidend, $devisor)
{
    if ($devisor == 0) {
        throw new Exception("devision by zero");
    }
    return $devidend / $devisor;
}

try {
    echo divide(5, 0);
    echo "<br>";
} catch (Exception $ex) {
    $code = $ex->getCode();
    $message = $ex->getMessage();
    $file = $ex->getFile();
    $line = $ex->getLine();
    echo "exception thrown in $file on line $line: [code $code] $message";
} 