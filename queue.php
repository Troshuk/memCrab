<?php
require_once __DIR__ . '/vendor/autoload.php';

use PhpAmqpLib\Connection\AMQPStreamConnection;
$connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
$channel = $connection->channel();

$channel->queue_declare('INSERT', false, true, false, false);

echo ' [*] Waiting for messages. To exit press CTRL+C', "\n";
$DB = new mysqli('localhost', 'root', '123456', 'products');
$i = 0;
$start = 0;
$callback = function($msg) {
	global $DB, $i, $start;
	$i++;
	if($i == 1) $start = microtime(true);
	$data = json_decode($msg->body, true);
	/*$name = $data['name'];
	$price = $data['price'];
	$count = $data['count'];
	echo " [x] Received " . $name . " : " . $price . " : " . $count, "\n";*/
	echo " [x] Received \n";
	/*$sql = "INSERT INTO poduct (name, price, count) VALUES ('" . $name . "', " . $price . ", " . $count . ")";
	$DB->query($sql);*/
	if($i == 1000) {
		echo round(microtime(true) - $start, 4) . "c. \n";
		$i = 0;
	}
};
$channel->basic_qos(null, 1, null);
$channel->basic_consume('INSERT', '', false, true, false, false, $callback);
while(count($channel->callbacks)) {
	$channel->wait();
}

$channel->close();
$connection->close();