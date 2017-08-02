<?php
require_once __DIR__ . '/vendor/autoload.php';
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

$start = microtime(true);

$connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
$channel = $connection->channel();

for ($i = 0; $i < 10; $i++) {
	$channel->queue_declare('INSERT', false, false, false, false);
	/*$rand = rand(1, 999);*/
	$msg = new AMQPMessage("INSERT INTO poduct (name, price) VALUES ('water-11', '11')");
	$channel->basic_publish($msg, '', 'INSERT');
	/*echo $rand . "\n";*/
}

echo round(microtime(true) - $start, 4) . "c. \n";
echo " [x] Send 'INSERT!'\n";

$channel->close();
$connection->close();