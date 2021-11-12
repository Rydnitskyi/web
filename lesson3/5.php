<?php
// 5. Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.

function space($string) {
    return str_replace(' ', '_', $string);
}
echo space('Some string') . PHP_EOL;
