<?php
// 3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.
$a = 25;
$b = 40;

function sum($arg1, $arg2) {
    return $arg1 + $arg2;
}
echo sum($a, $b) . PHP_EOL;

function sub($arg1, $arg2) {
    return $arg1 - $arg2;
}
echo sub($a, $b) . PHP_EOL;

function multi($arg1, $arg2) {
    return $arg1 * $arg2;
}
echo multi($a, $b) . PHP_EOL;

function div($arg1, $arg2) {
    return $arg1 / $arg2;
}
echo div($a, $b) . PHP_EOL;
