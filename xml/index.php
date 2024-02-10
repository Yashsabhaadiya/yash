<!DOCTYPE html>
<html>
<body>

<?php
libxml_use_internal_errors(true);
$myXMLData =
"<?xml version='1.0' encoding='UTF-8'?>
<document>
  <user>John Doe</user>
  <email>john@example.com</email>
</document>";

$xml = simplexml_load_string($myXMLData);
if ($xml === false) {
    echo "Failed loading XML: ";
    foreach(libxml_get_errors() as $error) {
        echo "<br>", $error->message;
    }
} else {
    print_r($xml);
    echo "<br>";
}



$xmls = simplexml_load_file("index.xml") or die("Error: can not create object");
print_r($xmls);
echo "<br>";



$value = simplexml_load_file("index.xml") or die("Error: cannot create object");
echo $value->to . "<br>";
echo $value->from . "<br>";
echo $value->heading . "<br>";
echo $value->body . "<br>";


?>

</body>
</html>