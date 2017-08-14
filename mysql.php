<?php
$DB = new mysqli('localhost', 'root', '', 'products_lang');

$sql = 'SELECT * FROM products_lang';
$result =  $DB->query($sql);
print_r($result->fetch_All());

/*
$start = microtime(true);

for ($i = 0; $i < 1000; $i++) {
	$name = "name-$i";
	$price = $i + $i * 2;
	$count = $i * 2;

	$sql = "INSERT INTO poduct (name, price, count) VALUES ('" . $name . "', " . $price . ", " . $count . ")";
	$DB->query($sql);
}

echo round(microtime(true) - $start, 4) . "c. \n";*/


/*
$start = microtime(true);

for ($i = 2000; $i < 2100; $i++) {
	$sql = 'SELECT * FROM poduct WHERE id=$i';
	$result =  $DB->query($sql);
}

echo round(microtime(true) - $start, 4) . "c. \n";
*/
/*
$sql = 'SELECT * FROM poduct';
$result =  $DB->query($sql);
print_r($result->fetch_All());*/