<?php

namespace Theory;

spl_autoload_extensions(".php");
spl_autoload_register();

// spl_autoload_register( function ($class) {
// 	$path = dirname( __FILE__ ) . "/" . strtolower(str_replace("\\", "/", $class));
// 	spl_autoload($path);
// });

$app = new \nsa\Application();

var_dump($app);


/**
 * функція autoload для автоматичного підключення класів
 */
// function __autoload($class_name)
// {
//     // Масив папок, в яких можуть бути необхідні класи
//     $array_paths = array(
//         '/models/',
//         '/classes/',
//         '/controllers/',
//     );

//     // Перебираєм масив папок
//     foreach ($array_paths as $path) {

//         // Фортмуємо шлях до файла, слід додати наш костиль
//         $path = ROOT . $path . $class_name . '.php';
//         if (is_file($path)) {
//             include_once $path;
//         }
//     }
// }