<?php
$DB = new mysqli('localhost', 'root', '123456', 'products');

$start = microtime(true);

for ($i = 0; $i < 100; $i++) {
	$name = "name-$i";
	$price = $i + $i * 2;
	$count = $i * 2;

	$sql = "INSERT INTO poduct (name, price, count) VALUES ('" . $name . "', " . $price . ", " . $count . ")";
	$DB->query($sql);
}

echo round(microtime(true) - $start, 4) . "c. \n";

/*
$sql = 'SELECT * FROM poduct';
$result =  $DB->query($sql);
print_r($result->fetch_All());*/