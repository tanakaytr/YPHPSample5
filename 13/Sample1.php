<?php

$doc = new DOMDocument;

$root = $doc->createElement("products");
$doc->appendChild($root);



$elm1 = $doc->createElement("name");
$root->appendChild($elm1);

$txt1 = $doc->createTextNode("鉛筆");
$elm1->appendChild($txt1);

$elm2 = $doc->createElement("price");
$root->appendChild($elm2);

$txt2 = $doc->createTextNode("80");
$elm2->appendChild($txt2);

$elm3 = $doc->createElement("name");
$root->appendChild($elm3);

$txt3 = $doc->createTextNode("消しゴム");
$elm3->appendChild($txt3);

$elm4 = $doc->createElement("price");
$root->appendChild($elm4);

$txt4 = $doc->createTextNode("50");
$elm4->appendChild($txt4);

print $doc->saveXML();

?>
