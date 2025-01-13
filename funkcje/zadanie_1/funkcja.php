<?php 
// function suma(a, b) {...} //
// Oblicza i zwraca sumę 2 liczb. // 

function add_two_numbers($number_1, $number_2) {
    $result = $number_1 + $number_2;
    return $result;
}

if (isset($_GET['number_1']) && isset($_GET['number_2'])) {
    $number_1 = $_GET['number_1'];
    $number_2 = $_GET['number_2'];

// wyświetl wynik działania funkcji
    echo add_two_numbers($number_1, $number_2);

}
