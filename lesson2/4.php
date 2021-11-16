<?php 
/* 4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), 
где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. 
В зависимости от переданного значения операции выполнить одну из арифметических операций 
(использовать функции из пункта 3) и вернуть полученное значение (использовать switch). */

$a = 25;
$b = 40;

function sum($arg1, $arg2) {
    return $arg1 + $arg2;
}

function sub($arg1, $arg2) {
    return $arg1 - $arg2;
}

function multi($arg1, $arg2) {
    return $arg1 * $arg2;
}

function div($arg1, $arg2) {
    return $arg1 / $arg2;
}

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case '+':
            return sum($arg1, $arg2);
            break;
        case '-':
            return sub($arg1, $arg2);
            break;
        case '*':
            return multi($arg1, $arg2);
            break;
        case '/':
            return div($arg1, $arg2);
            break;
        default:
            echo 'Unknown operation';
            break;
    }
}

echo mathOperation(10, 30, '*') . PHP_EOL;