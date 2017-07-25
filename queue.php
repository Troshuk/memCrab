<?php
require_once __DIR__ . '/vendor/autoload.php';
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

$connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
$channel = $connection->channel();
// $channel = $connection->chanel();
// $connection->connect();

// $testChannel = new AMQPChannel($rabbit);
// $testExchange = new AMQPExchange($testChannel);

// $testExchange->setName('amq.direct');
// $testExchange->publish('Hello buddy!', 'route_to_everybody');

// $rabbit->disconnect();
