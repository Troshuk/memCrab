<?php
include 'example.php';

$movies = new SimpleXMLElement($xmlstr);

/* Для каждого узла <character>, мы отдельно выведем имя <name>. */
foreach ($movies->movie->characters->character as $character) {
   echo $character->name, ' играет ', $character->actor, PHP_EOL;
}

?>