<?php

namespace Theory;

spl_autoload_extensions();
spl_autoload_register();

spl_autoload_register( function ($class) {
	$path = dirname( __FILE__ ) . "/" . strtolower(str_replace("\\", "/", $class));
	spl_autoload($path);
});

$app = new \ns\Application();

var_dump($app);