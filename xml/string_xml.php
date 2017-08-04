<?php
$string = <<<XML
<?xml version='1.0'?> 
<document>
 <title>Что 40?</title>
 <from>Джо</from>
 <to>Джейн</to>
 <body>
  Я знаю, что это - ответ. В чем заключается вопрос?
 </body>
</document>
XML;

$xml = simplexml_load_string($string);

print_r($xml);
?>