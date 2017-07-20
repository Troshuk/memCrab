<?php
// merge, rebase, ferch, pull request, git flow, 
// усе протестити, з 2-ма користувачами, різні варіанти і т.д. ...

class MusicClass {
	public static $musicName = "Nuvoile Biench";
}

// echo MusicClass::$musicName."\n";

class PeopleDB
{
	protected $database;
	protected $title;
	protected $first_name;
	protected $last_name;

	public function __construct(mysqli $DB, $last_name)
	{
		$this->database = $DB;
		if (strlen($last_name) == 0) {
			throw new Exception('Last name required');
		}
		$this->last_name = $last_name;
	}

	public function setTitle($title)
	{
		$this->title = $title;
	}

	public function setFirstName($first_name)
	{
		$this->first_name = $first_name;
	}

	public function setLastName($last_name)
	{
		$this->last_name = $last_name;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function getFirstName()
	{
		return $this->first_name;
	}

	public function getLastName()
	{
		return $this->last_name;
	}

}
// $DB = new mysqli('localhost', 'root', '');
// $man = new PeopleDB($DB, 'Smith');
// $man->setTitle('Mr');
// $man->setFirstName('Mister');
// $man->setLastName('Mister');

// echo $man->getTitle()."\n";
// echo $man->getFirstName()."\n";
// echo $man->getLastName()."\n";

class DB {

	public static $DB;
	protected static $host = 'localhost';
	protected static $user = 'root';
	protected static $password = '';
	protected static $dbName = 'pocapt';

	protected function __construct() {
		$this->DB = new mysqli(self::$host, self::$user, self::$password, self::$dbName);

	}

	protected function __clone() {

	}

	function __destruct() {
		unset($this->DB);
	}

	public static function getDBConnect() {
		if (!isset(self::$DB) && empty(self::$DB)) {
			self::$DB = new self();
			echo "DB create"."\n";
		} else {
			echo "DB isset"."\n";
		}
		return self::$DB;
	}

	public function getImageById($id) {
		$sql = '
			SELECT *
			FROM images
			WHERE id = '.$id;
		$result =  $this->DB->query($sql);
		return $result->fetch_array();
	}

	public function getAllProducts() {
		$sql = '
			SELECT *
			FROM products
		';
		$result =  $this->DB->query($sql);
		return $result->fetch_array();
	}

    public function __sleep()
    {
        return array('DB', 'host', 'user', 'password', 'dbName');
    }

    public function __wakeup()
    {
        $this->getDBConnect();
    }
}

$DB = DB::getDBConnect();
$DB_2 = DB::getDBConnect();

$image = $DB->getImageById(2);
print_r($image);
$products = $DB->getAllProducts();
print_r($products);
$DB->__destruct();