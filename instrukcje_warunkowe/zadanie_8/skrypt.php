<?php

$number1 = $_GET["number1"];
$number2 = $_GET["number2"];
$number3 = $_GET["number3"];
    $array = [$number1, $number2, $number3];

$najmniejsza_liczba = min($array);
    
//     $najmniejsza_liczba = NULL;
//     foreach ($array as $value) {

// if ($najmniejsza_liczba == NULL) {
// $najmniejsza_liczba = $value;
//         } else {
//             if ($najmniejsza_liczba > $value) {
//                 $najmniejsza_liczba = $value;
//             }
//         }
//     }

    print "Najmniejsza z podanych liczba to $najmniejsza_liczba";

