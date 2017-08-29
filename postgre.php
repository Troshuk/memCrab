<?php
// UPDATE, FROM, JOIN:(LEFT, RIGHT, FULL), ключі індекси(використовуються коли йде пошук по умові, коли сортується та сорутється по умові GIST-index), зовнішні ключі (REFERENCES table_name (column(s)_name))
// json (PostgreSQL && MySQL) - выборка поиск добваление елементов удаление и т.п.
$dbconn = pg_connect("host=localhost dbname=postgres user=root")or die('Could not connect: ' . pg_last_error());

// $query = "CREATE TABLE prod (id serial primary key, name VARCHAR(40) not null, price money, count integer)";

// pg_query($dbconn, $query);

// for ($i = 0; $i < 10; $i++) {
// 	$name = "name-$i";
// 	$price = $i + $i * 2;
// 	$count = $i * 2;
// 	$query = "INSERT INTO prod (name, price, count) VALUES ('" . $name . "', '" . $price . "', '" . $count . "')";

// 	pg_query($dbconn, $query);
// }

// $query = "DELETE FROM prod WHERE id > 10";
// pg_query($dbconn, $query);

// $query = "UPDATE prod SET count = count + 100 WHERE id < 10";
// pg_query($dbconn, $query);

$query = "SELECT * FROM prod ORDER BY id ASC";
$result = pg_query($dbconn, $query) or die('Ошибка запроса: ' . pg_last_error());

$query = "SELECT prod.id, products.name
			FROM prod 
			INNER JOIN products
			ON prod.id = products.id";
$result = pg_query($dbconn, $query) or die('Ошибка запроса: ' . pg_last_error());

$query = "SELECT products.name, prod.name, prod.price, prod.count
FROM prod
INNER JOIN products
ON prod.id = products.id
ORDER BY products.name";
$result = pg_query($dbconn, $query) or die('Ошибка запроса: ' . pg_last_error());

$query = "SELECT products.name, prod.id
FROM prod
LEFT OUTER JOIN products
ON prod.id = products.id
WHERE prod.id > 0
ORDER BY products.name";
$result = pg_query($dbconn, $query) or die('Ошибка запроса: ' . pg_last_error());

$query = "SELECT products.id, prod.price, products.name
FROM products
RIGHT OUTER JOIN prod
ON prod.id = products.id";
$result = pg_query($dbconn, $query) or die('Ошибка запроса: ' . pg_last_error());

$query = "SELECT products.id, products.name, prod.price
FROM products
FULL OUTER JOIN prod
ON products.id = prod.id";
$result = pg_query($dbconn, $query) or die('Ошибка запроса: ' . pg_last_error());

// Выполнение SQL запроса
// $query = 'SELECT * FROM prod';
// $result = pg_query($query) or die('Ошибка запроса: ' . pg_last_error());

// $query = 'CREATE TABLE cities (
//         city     varchar(80) primary key,
//         location point
// )';
// pg_query($query) or die('Ошибка запроса: ' . pg_last_error());
// $query = 'CREATE TABLE weather (
//         city      varchar(80) references cities(city),
//         temp_lo   int,
//         temp_hi   int,
//         prcp      real,
//         date      date
// )';
// pg_query($query) or die('Ошибка запроса: ' . pg_last_error());

// $query = "INSERT INTO cities VALUES ('Berkeley', '(25, 45)')";
// $result = pg_query($query) or die('Ошибка запроса: ' . pg_last_error());

// $query = "INSERT INTO weather VALUES ('Berkeley', 45, 53, 0.0, '1994-11-28')";
// $result = pg_query($query) or die('Ошибка запроса: ' . pg_last_error());


$DB = new mysqli('localhost', 'root', '', 'products_lang');

$sql = 'SELECT * FROM products';
$result = $DB->query($sql);

while ($row = $result->fetch_assoc()) {
    $products[$row['id']] = $row;
	$products[$row['id']] += array('name'=>array());
}

// $products = $result->fetch_all(MYSQLI_ASSOC);

$sql = 'SELECT * FROM products_lang';
$result = $DB->query($sql);
$products_lang = $result->fetch_all(MYSQLI_ASSOC);

foreach ($products_lang as $values) {
	$products[$values['id_product']]['name'] += array($values['lang']=>$values['name']);
}

$json = json_encode($products);
// $sql = "INSERT INTO json (name) VALUES ('$json')";
// $DB->query($sql);

// $sql = 'SELECT name->"$.name" FROM json';
// $sql = 'SELECT name->"$.name.de_DE" FROM json';
// $sql = 'SELECT name->"$.name.de_DE" FROM json WHERE name->"$.name.de_DE" = "banane"';
// $sql = 'UPDATE json SET name = JSON_SET(name, "$.name", "I am ID2") WHERE id = 3';
// $sql = 'UPDATE json SET name = JSON_SET(name, "$.new", "I am ID2") WHERE id = 3';
// $sql = "UPDATE json SET name = json_remove(name, '$.id')";



// $sql = "update orders set info=info-'name'";
// $sql = "SELECT info -> 'name' ->> 'ua_UA' FROM orders";
// $sql = "update orders set info = jsonb_set(info,'{name}','[2,3,4]')";
// $sql = "update orders set info = jsonb_set(info,'{new}','[2,3,4]')";

// Вывод результатов в HTML
echo "<table>\n";
foreach ($products as $key => $value) {
	$json = json_encode($value);

	// $query = "INSERT INTO orders (info) VALUES ('$json')";
	// $result = pg_query($query) or die('Ошибка запроса: ' . pg_last_error());

	// $sql = "INSERT INTO json (name) VALUES ('$json')";
	// $DB->query($sql);

	// echo "\t<tr>\n";
	// echo "\t\t<td>" . json_encode($value) . "</td>\n";
	// // foreach ($value as $col_value) {
	// // 	if(is_array($col_value)) {
	// // 		foreach ($col_value as $col) {
	// // 			echo "\t\t<td>$col</td>\n";
	// // 		}
	// // 	} else {
	// // 		echo "\t\t<td>$col_value</td>\n";
	// // 	}
	// // }
	// echo "\t</tr>\n";
}
echo "</table>\n";

// Вывод результатов в HTML
// echo "<table>\n";
// while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
// 	echo "\t<tr>\n";
// 	foreach ($line as $col_value) {
// 		echo "\t\t<td>$col_value</td>\n";
// 	}
// 	echo "\t</tr>\n";
// }
// echo "</table>\n";

// // Очистка результата
// pg_free_result($result);

// Закрытие соединения
pg_close($dbconn);