<?php

// Oblicz ilość "trójek" w tablicy.
$array = array(7, 3, 1, 6, 9, 5, 4, 10, 3, 2, 4, 3, 6, 12, 15, 4);
$array_values = array_count_values($array);
// print_r($array_values);
echo "ilość trójek w tablicy wynosi: " . $array_values[3];