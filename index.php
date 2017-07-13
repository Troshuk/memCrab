<?php
// merge, rebase, ferch, pull request, git flow, 
// усе протестити, з 2-ма користувачами, різні варіанти і т.д. ...

Class Aparat {
	public $name = "nameAparat";
}
function safeMyParam($name){
	$name = "$name - changeName";
	echo $name."\n";
	// NAME = '123'; // Parse error
	echo MYCONST."\n";
}
function safeMyClassParam($object){
	$object->name = "$object->name - changeName";
	echo $object->name."\n";
}

$name = "Piter";
$aparat = new Aparat();

#1
const MYCONST = 'You can\'t update this const';
#2
define('NAME', "Piter");
#3
safeMyParam($name);
echo $name."\n";
#4
safeMyClassParam(clone $aparat);
// safeMyClassParam($aparat); // передає силку на обєкт
echo $aparat->name."\n";