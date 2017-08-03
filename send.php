<?php
require_once __DIR__ . '/vendor/autoload.php';
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;


$connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
$channel = $connection->channel();

$start = microtime(true);

	$channel->queue_declare('INSERT', false, true, false, false);
for ($i = 0; $i < 100; $i++) {
	$messageArr = ['name' => 'water-000' . rand(1, 999), 'price' => rand(1, 999), 'count' => rand(1, 999)];
	$msg = new AMQPMessage(json_encode($messageArr,JSON_UNESCAPED_UNICODE), array('delivery_mode' => 2));
	$channel->basic_publish($msg, '', 'INSERT', false, false, null);
}

echo round(microtime(true) - $start, 4) . "c. \n";
echo " [x] Send 'INSERT!'\n";

$channel->close();
$connection->close();