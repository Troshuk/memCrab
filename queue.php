<?php
require_once __DIR__ . '/vendor/autoload.php';

use PhpAmqpLib\Connection\AMQPStreamConnection;
$connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
$channel = $connection->channel();

$channel->queue_declare('INSERT', false, false, false, false);

echo ' [*] Waiting for messages. To exit press CTRL+C', "\n";
$DB = new mysqli('localhost', 'root', '123456', 'products');
$callback = function($msg) {
	global $DB;
	echo " [x] Received ", $msg->body, "\n";
	$DB->query($msg->body);
};
$channel->basic_consume('INSERT', '', false, true, false, false, $callback);
while(count($channel->callbacks)) {
	$channel->wait();
}

$channel->close();
$connection->close();