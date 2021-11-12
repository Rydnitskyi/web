<?php
/* 7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
22 часа 15 минут
21 час 43 минуты */


function get_hour($hour) {
    if ($hour === 1 || $hour === 21) {
        return $hour . ' час';
    } else if ($hour === 2 || $hour === 3 || $hour === 4 || $hour === 22 || $hour === 23 || $hour === 24) {
        return $hour . ' часа';
    } else {
        return $hour . ' часов';
    }
};

function get_min($min) {
    if ($min === 1 || $min === 21 || $min === 31 || $min === 41 || $min === 51) {
        return $min . ' минута';
    } else if ($min === 2 || $min === 3 || $min === 4 || $min === 22 || $min === 23 || $min === 24 || $min === 32 || $min === 33 || $min === 34 || $min === 42 || $min === 43 || $min === 44 || $min === 52 || $min === 53 || $min === 54) {
        return $min . ' минуты';
    } else {
        return $min . ' минут';
    }
};

echo get_hour( date('H') ) . ' ' . get_min( date('i') ) . PHP_EOL;