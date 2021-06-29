<?php

$doc = new DOMDocument;

$root = $doc->createElement("products");
$doc->appendChild($root);

$elm10 = $doc->createElement("product");
$root->appendChild($elm10);

$elm11 = $doc->createElement("name");
$root->appendChild($elm11);

$txt11 = $doc->createTextNode("鉛筆");
$elm11->appendChild($txt11);

$elm12 = $doc->createElement("price");
$root->appendChild($elm12);

$txt12 = $doc->createTextNode("80");
$elm12->appendChild($txt12);

$elm20 = $doc->createElement("product");
$root->appendChild($elm20);

$elm13 = $doc->createElement("name");
$root->appendChild($elm13);

$txt13 = $doc->createTextNode("消しゴム");
$elm13->appendChild($txt13);

$elm14 = $doc->createElement("price");
$root->appendChild($elm14);

$txt14 = $doc->createTextNode("50");
$elm14->appendChild($txt14);

print $doc->saveXML();

?>
