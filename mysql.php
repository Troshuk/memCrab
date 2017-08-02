<?php
$DB = new mysqli('localhost', 'root', '123456', 'products');

$sql = "INSERT INTO poduct (name, price) VALUES ('water', '123')";
$DB->query($sql);

$sql = 'SELECT * FROM poduct';
$result =  $DB->query($sql);
print_r($result->fetch_All());