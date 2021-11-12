<?php
/* 6. *С помощью рекурсии организовать функцию возведения числа в степень. 
    Формат: function power($val, $pow), где $val – заданное число, $pow – степень. */

function power($val, $pow) {
    if($pow == 1) {
        return $val;
    } else if ($pow === 0 && $val === 0) {
        echo 'Undefined' . PHP_EOL;
    } else {
        return $val * power($val, $pow - 1);
    }
}
 echo power(2, 3) . PHP_EOL;