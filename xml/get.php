<!DOCTYPE html>
<html>
<body>

<?php
libxml_use_internal_errors(true);

$values = simplexml_load_file("get.xml") or die("Error: cannot create object");

echo $values->book[0]->title . "<br>";
echo $values->book[1]->title . "<br>";


foreach($values->children() as $books){
    echo $books->title . ", ";
    echo $books->author . ", ";
    echo $books->year . ", ";
    echo $books->price . "<br> ";
}

echo $values->book[0]['category'] . "<br>";
echo $values->book[1]->title['lang'] . "<br>";

foreach($values->children() as $row){
    echo $row->title['lang'];
    echo "<br>";
}

?>

</body>
</html>