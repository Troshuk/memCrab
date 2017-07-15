<?php
// merge, rebase, ferch, pull request, git flow, 
// усе протестити, з 2-ма користувачами, різні варіанти і т.д. ...

class MusicClass {
	public static $musicName = "Nuvoile Biench";
}

// ЗМІНИ

echo MusicClass::$musicName."\n";

class Singelton {

	protected static $instance = "singelton";

	protected function __construct(){
		
	}

	protected function __clone(){

	}

	public static function getInstance(){
		if (!isset(static::$instance)) self::$instance = new Singelton();
		return static::$instance;
	}
}

echo Singelton::getInstance()."\n";

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
$DB = new mysqli('localhost', 'root', '');
$man = new PeopleDB($DB, 'Smith');
$man->setTitle('Mr');
$man->setFirstName('Mister');
$man->setLastName('Mister');

echo $man->getTitle()."\n";
echo $man->getFirstName()."\n";
echo $man->getLastName()."\n";