<?php
$DB = new mysqli('localhost', 'root', '', 'products_lang');

// $array = ['яблуко',
// 		 'банан',
// 		 'апельсин',
// 		 'ківі',
// 		 'лимон',
// 		 'ананас',
// 		 'грушка',
// 		 'полуниця',
// 		 'слива',
// 		 'персик',
// 		 'мигдаль',
// 		 'горобина',
// 		 'малина',
// 		 'кизил',
// 		 'інжир',
// 		 'смородина',
// 		 'виноград',
// 		 'шовковиця',
// 		 'гранат',
// 		 'авокадо',
// 		 'кокос',
// 		 'кавун',
// 		 'горіх',
// 		 'картопля',
// 		 'буряк',
// 		 'мандарин',
// 		 'манго',
// 		 'лайм',
// 		 'грейпфрут',
// 		 'вишня',
// 		 'черешня',
// 		 'журавлина',
// 		 'кизил',
// 		 'чорнослив',
// 		 'каштан',
// 		 'жолудь',
// 		 'фінік',
// 		 'перець',
// 		 'петрушка',
// 		 'укроп',
// 		 'редька',
// 		 'помідор',
// 		 'огірок',
// 		 'квасець',
// 		 'вода',
// 		 'шпориця',
// 		 'хліб',
// 		 'ковбаса',
// 		 'сир',
// 		 'молоко',
// 		 'батон',
// 		 'булка',
// 		 'мак',
// 		 'рис',
// 		 'манка',
// 		 'цукор',
// 		 'сіль',
// 		 'часник',
// 		 'цибуля',
// 		 'яйце',
// 		 'кориця',
// 		 'хрін',
// 		 'кетчуп',
// 		 'курка',
// 		 'гречка',
// 		 'салат',
// 		 'йогурт',
// 		 'ікра',
// 		 'бринза',
// 		 'баклажан',
// 		 'гарбуз',
// 		 'макарон',
// 		 'риба',
// 		 'мокрва',
// 		 'кукурудза',
// 		 'капуста',
// 		 'гриби',
// 		 'сметана',
// 		 'моцарелла',
// 		 'соус',
// 		 'сосиска',
// 		 'сарделька',
// 		 'сало',
// 		 'пшениця',
// 		 'арахіс',
// 		 'імбирь',
// 		 'мигдаль',
// 		 'кактус',
// 		 'паприка',
// 		 'пельмень',
// 		 'соя',
// 		 'шокола',
// 		 'цукерка',
// 		 'хурма',
// 		 'тукума',
// 		 'робуста',
// 		 'папая',
// 		 'моква',
// 		 'марула',
// 		 'мунду',
// 		 'мускат'
// 		 ];

// $array = ['яблуко',
// 			'Банан',
// 			'Апельсин',
// 			'Ківі',
// 			'Лимон',
// 			'Ананас',
// 			'Грушка',
// 			'Полуниця',
// 			'Слива',
// 			'Персик',
// 			'Мигдаль',
// 			'Горобина',
// 			'Малина',
// 			'Кизил',
// 			'Інжир',
// 			'Смородина',
// 			'Виноград',
// 			'Шовковиця',
// 			'Гранат',
// 			'Авокадо',
// 			'Кокос',
// 			'Кавун',
// 			'Горіх',
// 			'Картопля',
// 			'Буряк',
// 			'Мандарин',
// 			'Манго',
// 			'Лайм',
// 			'Грейпфрут',
// 			'Вишня',
// 			'Черешня',
// 			'Журавлина',
// 			'Кизил',
// 			'Чорнослив',
// 			'Каштан',
// 			'Жолудь',
// 			'Фінік',
// 			'Перець',
// 			'Петрушка',
// 			'Укроп',
// 			'Редька',
// 			'Помідор',
// 			'Огірок',
// 			'Квасець',
// 			'Вода',
// 			'Шпориця',
// 			'Хліб',
// 			'Ковбаса',
// 			'Сир',
// 			'Молоко',
// 			'Батон',
// 			'Булка',
// 			'Мак',
// 			'Рис',
// 			'Манка',
// 			'Цукор',
// 			'Сіль',
// 			'Часник',
// 			'Цибуля',
// 			'Яйце',
// 			'Корита',
// 			'Хрін',
// 			'Кетчуп',
// 			'Курка',
// 			'Гречка',
// 			'Салат',
// 			'Йогурт',
// 			'Ікра',
// 			'Бринза',
// 			'Баклажан',
// 			'Гарбуз',
// 			'Макарон',
// 			'Риба',
// 			'Мокрва',
// 			'Кукурудза',
// 			'Капуста',
// 			'Гриби',
// 			'Сметана',
// 			'Моцарелла',
// 			'Соус',
// 			'Сосиска',
// 			'Сарделька',
// 			'Сало',
// 			'Пшеница',
// 			'Арахіс',
// 			'Імбирь',
// 			'Мигдаль',
// 			'Яктус',
// 			"Паприка",
// 			'Пельмень',
// 			'Соя',
// 			'Шокола',
// 			'Цукерка',
// 			'Хурма',
// 			'Тукума',
// 			'Робуста',
// 			'Папая',
// 			'Моква',
// 			'Марула',
// 			'Мунду',
// 			'Мускат'
// ];

// $array = ['apple',
// 'Banana',
// 'Orange',
// 'Kiwi',
// 'Lemon',
// 'Pineapple',
// 'Punch',
// 'Strawberries',
// 'Plum',
// 'Peach',
// 'Almond',
// 'Rowan',
// 'Raspberry',
// 'Dogwood',
// 'Fig',
// 'Currant',
// 'Grape',
// 'Mulberry',
// 'Garnet',
// 'Avocado',
// 'Coconut',
// 'Watermelon',
// 'Nut',
// 'Potato',
// 'Beet',
// 'Tangerine',
// 'Mango',
// 'Lime',
// 'Grapefruit',
// 'Cherry',
// 'Merry',
// 'Cranberry',
// 'Dogwood',
// 'Prunes',
// 'Chestnut',
// 'Acorn',
// 'Date',
// 'Pepper',
// 'Parsley',
// 'Dill',
// 'Radish',
// 'Tomato',
// 'Cucumber',
// 'Quastic',
// 'Water',
// 'Spurice',
// 'Bread',
// 'Sausage',
// 'Cheese',
// 'Milk',
// 'Baton',
// 'Bulka',
// 'Poppy',
// 'Fig',
// 'Manka',
// 'Sugar',
// 'Salt',
// 'Garlic',
// 'Onion',
// 'Egg',
// 'Corita',
// 'Horseradish',
// 'Ketchup',
// 'Chicken',
// 'Buckwheat',
// 'Salad',
// 'Yogurt',
// 'Caviar',
// 'Brynza',
// 'Eggplant',
// 'Pumpkin',
// 'Macaroni',
// 'Fish',
// 'Mochva',
// 'Corn',
// 'Cabbage',
// 'Mushrooms',
// 'Sour cream',
// 'Mozzarella',
// 'Sauce',
// 'Sausage',
// 'Sausage',
// 'Salo',
// 'Wheat',
// 'Peanut',
// 'Ginger',
// 'Almond',
// 'Yaktus',
// "Paprika",
// 'Pelmeny',
// 'Soy',
// 'Chocolate',
// 'Candy',
// 'Persimmon',
// 'Tukuma',
// 'Robusta',
// 'Papaya',
// 'Wetness',
// 'Marula',
// 'Mundu',
// 'Muscat'
// ];

// $array = [ 'яблоко',
// "Банан",
// 'Апельсин',
// "Киви",
// "Лимон",
// "Ананас",
// "Грушка",
// "Клубника",
// "Слива",
// "Персик",
// "Миндаль",
// "Рябина",
// "Малина",
// "Кызыл",
// "Инжир",
// "Смородина",
// "Виноград",
// "Шелковица",
// "Гранат",
// "Авокадо",
// "Кокос",
// "Арбуз",
// "Орех",
// "Картофель",
// "Свекла",
// "Мандарин",
// "Манго",
// "Лайм",
// "Грейпфрут",
// "Вишня",
// "Черешня",
// "Клюква",
// "Кызыл",
// "Чернослив",
// "Каштан",
// "Жолудь",
// "Финик",
// "Перец",
// "Петрушка",
// "Укроп",
// "Редька",
// "Помидор",
// "Огурец",
// "Квасець",
// "Вода",
// "Шпориця",
// "Хлеб",
// "Колбаса",
// "Сыр",
// "Молоко",
// "Батон",
// "Булка",
// "Мак",
// "Рис",
// "Манка",
// "Сахар",
// "Соль",
// "Чеснок",
// "Лук",
// "Яйцо",
// "Корыта",
// "Хрен",
// "Кетчуп",
// "Курица",
// "Гречка",
// "Салат",
// "Йогурт",
// "Икра",
// "Брынза",
// "Баклажан",
// "Тыква",
// "Макарон",
// "Рыба",
// "Мокрва",
// "Кукуруза",
// "Капуста",
// "Грибы",
// "Сметана",
// "Моцарелла",
// "Соус",
// "Сосиска",
// "Сарделька",
// "Сало",
// "Пшеница",
// "Арахис",
// "Имбирь",
// "Миндаль",
// "Яктус",
// "Паприка",
// "Пельмень",
// "Соя",
// "Шокола",
// "Конфетка",
// "Хурма",
// "Тукума",
// "Робуста",
// "Папайя",
// "Моква",
// "Марула",
// "Мунду",
// "Мускат"
// ];

// $array = ['apfel',
// 'banane',
// 'orange',
// 'kiwi',
// 'zitrone',
// 'ananas',
// 'birne',
// 'erdbeeren',
// 'pflaume',
// 'geist',
// 'mandeln',
// 'eberesche',
// 'himbeere',
// 'hartriegel',
// 'feige',
// 'korinthen',
// 'trauben',
// 'maulbeere',
// 'granat',
// 'avocados',
// 'kokosnuss',
// 'wassermelone ',
// 'walnuss',
// 'kartoffeln',
// 'rübe',
// 'mandarin',
// 'mango',
// 'kalk',
// 'grapefruit',
// 'kirsche',
// 'kirsche',
// 'preiselbeere',
// 'hartriegel',
// 'pflaume',
// 'kastanie',
// 'eichel',
// 'daten',
// 'pfeffer',
// 'petersilie',
// 'dill',
// 'radieschen',
// 'tomate',
// 'essiggurke',
// 'kvasets',
// 'wasser',
// 'shporytsya',
// 'brot',
// 'wurst',
// 'käse',
// 'milch',
// 'taktstock',
// 'rolle',
// 'mohn',
// 'reis',
// 'munk',
// 'zucker',
// 'salz',
// 'knoblauch',
// 'zwiebel',
// 'ei',
// 'trog',
// 'hölle',
// 'ketchup',
// 'hähnchen',
// 'buchweizen ',
// 'salat',
// 'joghurt',
// 'kaviar',
// 'käse',
// 'aubergine',
// 'kürbis',
// 'makkaroni',
// 'fisch',
// 'mokrva',
// 'mai',
// 'kohl',
// 'pilze',
// 'sauer',
// 'mozzarella',
// 'sauce',
// 'wurst',
// 'wurst',
// 'fetts',
// 'weizen',
// 'erdnüsse',
// 'ingwer',
// 'mandeln',
// 'yaktus',
// 'paprika',
// 'dumplings',
// 'soja',
// 'schokolade',
// 'süßigkeiten',
// 'persimmon',
// 'tucuma',
// 'robusta',
// 'papaya',
// 'nässe',
// 'marula',
// 'mundu',
// 'muskatellertraube'
// ];

// print_r($array);

// for ($i = 1; $i <= 100; $i++) {
// 	$name = $array[$i];
// 	$sql = "INSERT INTO products_lang (name, lang, id_product) VALUES ('$name', 'de_DE', $i)";
// 	$DB->query($sql);
// }

// for ($i = 0; $i < 100; $i++) {
// 	$price = rand(1, 1000);
// 	if( $i%2 == 0 ) $count = 1;
// 	else $count = 0;
// 	$sql = "INSERT INTO products (price, status) VALUES ($price, $count)";
// 	$DB->query($sql);
// }


/*
$start = microtime(true);

for ($i = 2000; $i < 2100; $i++) {
	$sql = 'SELECT * FROM poduct WHERE id=$i';
	$result =  $DB->query($sql);
}

echo round(microtime(true) - $start, 4) . "c. \n";
*/
/*
$sql = 'SELECT * FROM poduct';
$result =  $DB->query($sql);
print_r($result->fetch_All());*/











$sql = 'SELECT * FROM products';
$result = $DB->query($sql);

while ($row = $result->fetch_assoc()) {
    $products[$row['id']] = $row;
	$products[$row['id']] += array('name'=>array());
}

// $products = $result->fetch_all(MYSQLI_ASSOC);

$sql = 'SELECT * FROM products_lang';
$result = $DB->query($sql);
$products_lang = $result->fetch_all(MYSQLI_ASSOC);

foreach ($products_lang as $values) {
	$products[$values['id_product']]['name'] += array($values['lang']=>$values['name']);
}
print_r($products);

// foreach ($products as $key => $values) {
// 	$languages = array();
// 	foreach ($products_lang as $lang_key => $lang_values) {
// 		if ($values['id'] == $lang_values['id_product']) $languages[$lang_values['lang']] = $lang_values['name'];
// 	}
// 	$products[$key] += array('name'=>$languages);
// }

// print_r($products);