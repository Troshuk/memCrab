<?php
include 'example.php';

$movies = new SimpleXMLElement($xmlstr);

/* Доступ к узлу <rating> первого фильма.
 * Так же выведем шкалу оценок. */
foreach ($movies->movie[0]->rating as $rating) {
    switch((string) $rating['type']) { // Получение атрибутов элемента по индексу
    case 'thumbs':
        echo $rating, ' thumbs up';
        break;
    case 'stars':
        echo $rating, ' stars';
        break;
    }
}
?>