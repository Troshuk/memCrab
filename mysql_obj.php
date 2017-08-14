<?php
$DB = new mysqli('localhost', 'root', '', 'products_lang');

$sql = 'SELECT * FROM products_lang';
$result =  $DB->query($sql);

for ($i = 1; $i <= $result->num_rows; $i++) {
	${'product_' . $i} = new ProductsLang(mysqli_fetch_object($result));
}

for ($i = 1; $i <= $result->num_rows; $i++) { 
	echo ${'product_' . $i}->getName() . " - " . ${'product_' . $i}->getLang() . " (" . ${'product_' . $i}->getIdProduct() . ")\n";
}

class ProductsLang {

	protected $name;
	protected $lang;
	protected $id_product;

	function __construct($obj)
	{
		$this->name = $obj->name;
		$this->lang = $obj->lang;
		$this->id_product = $obj->id_product;
	}

	public function getName(){
		return $this->name;
	}

	public function getLang(){
		return $this->lang;
	}

	public function getIdProduct(){
		return $this->id_product;
	}
}