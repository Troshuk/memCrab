<?php

namespace Specialist;
require_once "Nam/autoload.php";

echo __NAMESPACE__;

const SPEC_URL = "http://specialist.ru";

function spec_func() {
	return __FUNCTION__;
}

class Specialist {
	static function getClass() {
		return __CLASS__;
	}
}

echo "<p>", SPEC_URL;
echo "<p>", \Specialist\SPEC_URL;
echo "<p>", spec_func();
echo "<p>", Specialist::getClass();

function substr() {
	echo "<p>test";
}

substr(); // Specialist

$user = new \Nam\User("John");
echo "<p>",$user->name;

$foo = new \Nam\Some\Foo\Foo();
$foo->getInfo();