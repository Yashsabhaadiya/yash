<?php

$xmlDoc = new DOMDocument();
$xmlDoc->load("last.xml");

print $xmlDoc->saveXML();

echo "<br>";

$x = $xmlDoc->documentElement;
foreach ($x->childNodes AS $item) {
  print $item->nodeName . " = " . $item->nodeValue . "<br>";
}
?>