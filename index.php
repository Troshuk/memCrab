<?php
// merge, rebase, ferch, pull request, git flow, 
// усе протестити, з 2-ма користувачами, різні варіанти і т.д. ...

function safeMyParam($name){
	$name = "$name - changeName";
	echo $name."\n";
	// NAME = '123'; // Parse error
}
function safeMyClassParam($object){
	$object->name = "$object->name - changeName";
	echo $object->name."\n";
}
Class Aparat {
	public $name = "nameAparat";
}

$name = "Piter";
$aparat = new Aparat();

#1
define('NAME', "Piter");
#2
safeMyParam($name);
echo $name."\n";
#3
safeMyClassParam(clone $aparat);
// safeMyClassParam($aparat); // передає силку на обєкт
echo $aparat->name."\n";