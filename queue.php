<?php
require_once __DIR__ . '/vendor/autoload.php';
use PhpAmqpLib\Connection\AMQPConnection;
use PhpAmqpLib\Message\AMQPMessage;

$connection_params = array(
  'host' => 'localhost',
  'port' => 5672,
  'vhost' => '/',
  'login' => 'guest',
  'password' => 'guest'
);


$connection = new AMQPConnection($connection_params);
$connection->connect();


/*
$connection = new AMQPStreamConnection('localhost', 15672, 'guest', 'guest');
$channel = $connection->channel();*/
// $channel = $connection->chanel();
// $connection->connect();

// $testChannel = new AMQPChannel($rabbit);
// $testExchange = new AMQPExchange($testChannel);

// $testExchange->setName('amq.direct');
// $testExchange->publish('Hello buddy!', 'route_to_everybody');

// $rabbit->disconnect();

//change 2
