<?php
namespace Home;
class User
{
	public $name;
	public $password;
	public $email;
	public $city;

	function __construct($name, $password, $email, $city)
	{
		$this->name = $name;
		$this->password = $password;
		$this->email = $email;
		$this->city = $city;
	}

	function getInfo() {

		$information = "{$this->name}"."{$this->password}"."{$this->email}"."{$this->city}";

		return $information;
	}
}

$user1 = new User("Alex ", "123456 ", "alexey@gmail.com ", "Kiev ");
echo $user1->getInfo() . "\n";

function Myfunct($zero) {
	echo "string: " . $zero;
}

const SPEC_URL = "http://specialist.ru";

function spec_func() {
	return __FUNCTION__;
}

class Specialist {
	static function getClass() {
		return __CLASS__;
	}
}

// echo "<p>",\Home\SPEC_URL;
// echo "<p>",\Home\spec_func();
// echo "<p>",\Home\Specialist::getClass();