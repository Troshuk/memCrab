<?php
$xmlfile = 'xml.xml';
$xmlparser = xml_parser_create();

$fp = fopen($xmlfile, 'r');
$xmldata = fread($fp, 4096);

xml_parse_into_struct($xmlparser,$xmldata,$values);

xml_parser_free($xmlparser);
// print_r($values);

$myXMLData =
"<?xml version='1.0' encoding='UTF-8'?>
<note>
<to>Tove</to>
<from>Jani</from>
<heading>Reminder</heading>
<body>Don't forget me this weekend!</body>
</note>";

$xml=simplexml_load_string($myXMLData) or die("Error: Cannot create object");
// print_r($xml);

$simple = "<para><note>simple note</note></para>";
$p = xml_parser_create();
xml_parse_into_struct($p, $myXMLData, $vals, $index);
xml_parser_free($p);
echo "Index array\n";
// print_r($index);
echo "\nVals array\n";
print_r($vals);
