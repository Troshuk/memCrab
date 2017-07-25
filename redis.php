<?php
require "predis/autoload.php";
Predis\Autoloader::register();

$redis = new Predis\Client(array(
"scheme" => "tcp",
"host" => "127.0.0.1",
"port" => 6379));

// помещение строки "Hello world"
$redis->set('message', 'Hello world');

// получаем строку по ключу
$value = $redis->get('message');

// Hello world
echo $value . "\n";

echo ($redis->exists('message')) ? "Oui" : "please populate the message key";
echo "\n";

$redis->set("counter", 0);
$redis->incr("counter");
$redis->incr("counter");
$redis->decr("counter");
$value = $redis->get('counter');
echo $value . "\n";


$redis->set("counter", 0);
$redis->incrby("counter", 15);
$redis->incrby("counter", 5);
$redis->decrby("counter", 10);
$value = $redis->get('counter');
echo $value . "\n";

print_r($redis->keys('*'));

$redis->rpush("languages", "french"); // [french]
$redis->rpush("languages", "arabic"); // [french, arabic]
// $value = $redis->get('languages');
// print_r($value);

$redis->lpush("languages", "english"); // [english, french, arabic]
$redis->lpush("languages", "swedish"); // [swedish, english, french, arabic]

$redis->lpop("languages"); // [english, french, arabic]
$redis->rpop("languages"); // [english, french]

$redis->llen("languages"); // 2

$value = $redis->lrange("languages", 0, -1); // returns all elements
$redis->lrange("languages", 0, 1); // [english, french]
print_r($value);

$key = "countries";
$redis->sadd($key, 'china');
$redis->sadd($key, ['england', 'france', 'germany']);
$redis->sadd($key, 'china'); // this entry is ignored

$redis->srem($key, ['england', 'china']);

$redis->sismember($key, 'england'); // false

$value = $redis->smembers($key); // ['france', 'germany']

print_r($value);