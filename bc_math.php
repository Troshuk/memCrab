<?php
// Сума чисел
$a = '1.234';
$b = '5';
echo bcadd($a, $b) . "\n";     // 6
echo bcadd($a, $b, 4) . "\n";  // 6.2340

// Порівняння, яке білььше значення
echo bccomp('1', '2') . "\n";   // -1
echo bccomp('1.00001', '1', 3) . "\n"; // 0
echo bccomp('1.00001', '1', 5) . "\n"; // 1

// Ділення чисел
echo bcdiv('105', '6.55957', 3) . "\n";  // 16.007

// Остача від ділення
echo bcmod('4', '2') . "\n"; // 0
echo bcmod('2', '4') . "\n"; // 2

// Множення чисел
echo bcmul('1.34747474747', '35', 3) . "\n"; // 47.161
echo bcmul('2', '4') . "\n"; // 8

// піднесення числа до степення
echo bcpow('4.2', '3', 2) . "\n"; // 74.08

// піднесення числа до степення + Остача від ділення, швидка
echo bcpowmod('5', '2', 2) . "\n";
echo bcmod(bcpow('5', '2'), 2) . "\n"; // $a == $b.

// Задає заз замовчування кількість знаків після крапки
bcscale(3);
echo bcdiv('105', '6.55957'); // 16.007

// Квадратний Корінь з числа
echo bcsqrt('2', 3); // 1.414

// Віднімання
$a = '1.234';
$b = '5';
echo bcsub($a, $b);     // -3
echo bcsub($a, $b, 4);  // -3.7660