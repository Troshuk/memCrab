<?php
if (file_exists('xml.xml')) {
    $xml = simplexml_load_file('xml.xml');
 
    print_r($xml);
} else {
    exit('Не удалось открыть файл xml.xml.');
}
?>