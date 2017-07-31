<?php
spl_autoload_extensions(".php");
spl_autoload_register();

// spl_autoload_register( function ($class) {
// 	$path = dirname( __FILE__ ) . "/" . strtolower(str_replace("\\", "/", $class));
// 	spl_autoload($path);
// });

$user2 = new Home\User("Den ", "654321 ", "alexey123@gmail.com ", "Vinnica ");
echo $user2->getInfo() . "\n";
Home\Myfunct('22');
